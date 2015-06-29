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
                
                $newFeed['url'] = $feed->getUrl();
                $newFeed['name'] = $feed->getParsedXML()['info']->getTitle();                
                
                $feedList->push($userFeedFactory->createFromArray($newFeed));
                $userFeedRepository->save(0, $feedList);
                
                $response = ['OK'];
            
            } catch (\Exception $e) {          
                $response = ['error' => 'RSS Feed doesn\'t work: '.$e->getMessage()];                         
            }
        } else {
            $response = ['notice' => 'Feed already exists'];
        }
        
        $list = $userFeedRepository->getList(0);
        
        return new Response(
            json_encode($response),
            Response::HTTP_OK,
            ['content-type' => 'application/json']
        );
    }
    
    /**
     * @Route("getFeed/", name="getFeed")
     */    
    public function getFeedAction()
    {
        $post = $this->getRequest()->createFromGlobals()->query;
        $url = $post->get('url');
        
        $refresh = ($post->has('refresh') && $post->get('refresh'));
        
        $feedFactory = $this->get('feedFactory');
        try {
            $feed = $feedFactory->getFeed($url, $refresh);            

        } catch (\Exception $e) {          
            var_dump($e);            
        }

        return new Response(
            $feed, 
            Response::HTTP_OK, 
            ['content-type' => 'application/json']
        );
    }
    
}
