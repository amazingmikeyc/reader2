<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Vinelab\Rss\Feed as RssFeed;
use Vinelab\Rss\Rss;
use Vinelab\Rss\Parsers\XML;
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
//        $post = $this->getRequest()->createFromGlobals();
//        $url = $post->get('url');
//        
//        $feedFactory = $this->get('feedFactory');
//        try {
//            $feed = $feedFactory->getFeed($url);            
//            
//            
//        } catch (\Exception $e) {
//            var_dump(':_)');
//            var_dump($e);
//            
//        }
        
        return $this->render('feedShow/index.html.twig');
        
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
        
//        $formattedXML['info'] = $parsedXML->info();
//        
//        foreach ($parsedXML->articles as $article) {            
//            $articles[] = [
//                'title' => $article->title,
//                'link' => $article->link,
//                'pubDate'=>$article->pubDate,
//                'content'=>$article->description
//            ];
//        }
//        $formattedXML['articles'] = $articles;
        
        return new Response(
            json_encode($formattedXML), 
            Response::HTTP_OK, 
            ['content-type' => 'application/json']
        );
    }
    
}
