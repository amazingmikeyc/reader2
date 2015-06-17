<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
        $parameters = [
            ''
        ];
        
        return $this->render('default/index.html.twig', $parameters);
    }
    
    /**
     * @Route("/navigation", name="navigation")
     */
    public function navigationAction()
    {
        
    }
    
    /**
     * @Route("add/{param}", name="add")
     */
    public function addAction($param)
    {
        
        return $this->render('default/index.html.twig');
    }
        
    
    /**
     * @Route("show/", name="get")
     */    
    public function showAction()
    {
  
        return $this->render('feedShow/index.html.twig');
        
    }
    
    /**
     * @Route("getFeedList/", name="getFeedList")
     */    
    public function getFeedListAction()
    {
        /**
         * @var \AppBundle\Repository\UserFeed $userFeedRepository
         */
        $userFeedRepository = $this->get('userFeedRepository');
        $list = $userFeedRepository->getList(0);
        
        return new Response(
            $list,
            Response::HTTP_OK,
            ['content-type' => 'application/json']
        );
    }
    
    public function addFeedToList()
    {        
        $post = $this->getRequest()->createFromGlobals();
//        $url = $post->get('url');
//        $name = $post->get('name');
        
        $userFeedRepository = $this->get('userFeedRepository');
        $list = $userFeedRepository->getList(0);
        
        $userFeedFactory = $this->get('userFeedFactory');
        $feedList = $userFeedFactory->createCollectionFromJson($list);
        
        $feedList->push($userFeedFactory->createFromArray($post));
        
    }
    
    /**
     * @Route("getFeed/", name="getFeed")
     */    
    public function getFeedAction()
    {
        $post = $this->getRequest()->createFromGlobals();
        $url = $post->get('url');
        
        $feedFactory = $this->get('feedFactory');
        try {
            $feed = $feedFactory->getFeed($url);            
                       
        } catch (\Exception $e) {
            var_dump(':_)');
            var_dump($e);
            
        }
        
        $formattedXML = $feed->getParsedXML();

        return new Response(
            json_encode($formattedXML), 
            Response::HTTP_OK, 
            ['content-type' => 'application/json']
        );
    }
    
}
