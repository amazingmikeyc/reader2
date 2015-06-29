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
        if ($refresh || !$this->cacheInterface->get($url)) {
            $this->refreshFeed($url);
        }
                
        $feed = $this->parser->parse($this->cacheInterface->get($url));
       
        return $feed;
       
    }
        
    /**
     * 
     * @param string $url
     * 
     * @return type
     */
    public function refreshFeed($url)
    {
        $value = $this->curlInterface->get($url);
        $this->cacheInterface->set($url, $value->getBody());
        
        return $value->getBody;
    }
    
}
