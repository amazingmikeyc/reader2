<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Vinelab\Rss\Feed as RssFeed;
use Vinelab\Rss\Rss;

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
        $post = $this->getRequest()->createFromGlobals();
        $url = $post->get('url');
        
        $feedFactory = $this->get('feedFactory');
        try {
            $feed = $feedFactory->getFeed($url);            
            var_dump($feed->getContent());
            $f = new RssFeed(new Rss($feed->getContent()));
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
        
        return $this->render('default/index.html.twig');
        
    }
    
}
