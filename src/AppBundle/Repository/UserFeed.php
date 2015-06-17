<?php

namespace AppBundle\Repository;

use Predis\Client as Cache;
use AppBundle\Value\Collection\UserFeedCollection;

class UserFeed 
{
    
    protected $cacheInterface;
    
    /**
     * 
     * @param Cache $cacheInterface
     */
    public function __construct(Cache $cacheInterface)
    {
        $this->cacheInterface = $cacheInterface;
    }
    
    /**
     * 
     * @param type $userId
     * 
     * @return string
     */
    public function getList($userId = 0)
    {        
        if ($this->cacheInterface->get('Feeds'.$userId))
        {
            return $this->cacheInterface->get('Feeds'.$userId);
        } else {
            return '{}';
        }
    }
    
    /**
     * 
     * @param type $userId
     * @param UserFeedCollection $userFeeds
     */
    public function save($userId = 0, UserFeedCollection $userFeeds)
    {
        $this->cacheInterface->set('Feeds'.$userId, $userFeeds->toJson());
    }
    
}

