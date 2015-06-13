<?php

namespace AppBundle\Entity;

use Predis\Client as Cache;
use GuzzleHttp\Client as Ftp;
use Vinelab\Rss\Parsers\XML as Parser;

class FeedFactory
{
    private $cacheInterface;
    private $curlInterface;
    private $parser;
        
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
    
    public function getFeed($url)
    {
        if (!$this->cacheInterface->get($url)) {
            $this->refreshFeed($url);
        }
        
        $feed = new Feed($url, $this->cacheInterface->get($url));
        $feed->setParsedXML(
            $this->parser->parse(new \SimpleXMLElement($feed->getContent()))
        );
        return $feed;
       
    }
        
    
    public function refreshFeed($url)
    {
        $value = $this->curlInterface->get($url);
        $this->cacheInterface->set($url, $value->getBody());
        
        return $value->getBody;
    }
    
    
}
