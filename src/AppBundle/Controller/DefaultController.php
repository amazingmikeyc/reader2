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
     * @Route("addFeed/{param}", name="add")
     */
    public function addFeedAction($param)
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
        $userFeedRepository = $this->get('userFeedRepository');
        $list = $userFeedRepository->getList(0);
        
        return new Response(
            $list,
            Response::HTTP_OK,
            ['content-type' => 'application/json']
        );
    }
        
    /**
     * @Route("removeFeedFromList/")
     */
    public function removeFeedFromList()
    {
        $post = $this->getRequest()->createFromGlobals();
    }
    
    /**
     * @Route("addFeedToList/")
     */
    public function addFeedToList()
    {        
        $post = json_decode($this->getRequest()->getContent(), true);

        $userFeedRepository = $this->get('userFeedRepository');
        $list = $userFeedRepository->getList(0);
        
        $userFeedFactory = $this->get('userFeedFactory');
        $feedList = $userFeedFactory->createCollectionFromJson($list);
    
        if (!$feedList->has($post['url'])) {
            
            $feedFactory = $this->get('feedFactory');
            try {
                $feed = $feedFactory->getFeed($post['url']);
                
                $feedList->push($userFeedFactory->createFromArray($post));
                $userFeedRepository->save(0, $feedList);
            
            } catch (\Exception $e) {          
                var_dump($e->getMessage());            
            }
        } else {
            
        }
        
        $list = $userFeedRepository->getList(0);
        
        return new Response(
            '',
            Response::HTTP_OK,
            ['content-type' => 'application/json']
        );
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
