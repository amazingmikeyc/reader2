<?php

namespace AppBundle\Entity;

use Predis\Client as Cache;
use GuzzleHttp\Client as Ftp;

class FeedFactory
{
    private $cacheInterface;
    private $curlInterface;
        
    public function __construct(Cache $cacheInterface, Ftp $curlInterface)
    {
        $this->cacheInterface = $cacheInterface;
        $this->curlInterface = $curlInterface;
    }
    
    public function getFeed($url)
    {
        if (!$this->cacheInterface->get($url)) {
            $this->refreshFeed($url);
        }
        
        return new Feed($url, $this->cacheInterface->get($url));
       
    }
        
    
    public function refreshFeed($url)
    {
        $value = $this->curlInterface->get($url);
        $this->cacheInterface->set($url, $value->getBody());
        
        return $value->getBody;
    }
    
    
}
