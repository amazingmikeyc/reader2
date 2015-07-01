<?php

namespace AppBundle\Entity;

use Predis\Client as Cache;
use GuzzleHttp\Client as Ftp;
use AppBundle\Parser\Rss as Parser;

use AppBundle\Value\RssFeed as Feed;

class FeedFactory
{
    private $cacheInterface;
    private $curlInterface;
    private $parser;
        
    /**
     * 
     * @param Cache  $cacheInterface
     * @param Ftp    $curlInterface
     * @param Parser $parser
     */
    public function __construct(
        Cache $cacheInterface, 
        Ftp $curlInterface,
        Parser $parser
    )
    {
        $this->cacheInterface = $cacheInterface;
        $this->curlInterface = $curlInterface;
        $this->parser = $parser;
    }
    
    /**
     * 
     * @param string $url
     * 
     * @return \AppBundle\Entity\Feed
     */
    public function getFeed($url, $refresh = false)
    {
        
        if ($refresh || !$this->getFeedFromCache($url)) {
            $this->addFeedToCache($url, $this->downloadFeed($url)); 
        }
              
        $feed = $this->parser->parse($this->getFeedFromCache($url));
       
        return $feed;
       
    }
        
    /**
     * 
     * @param string $url
     * 
     * @return type
     */
    public function downloadFeed($url)
    {
        return $this->curlInterface->get($url)->getBody();        
    }
    
    /**
     * 
     * @param string $url
     * 
     * @return string
     */
    private function getFeedFromCache($url)
    {
        return $this->cacheInterface->get($url);
    }
    
    /**
     * 
     * @param string $url 
     * @param string $content
     */
    private function addFeedToCache($url, $content)
    {
        $this->cacheInterface->set($url, $content);
    }
    
}
