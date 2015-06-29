var rssApp = angular.module('rssApp', ['ngSanitize', 'ngResource']);

rssApp.controller('mainController', ["$scope", function ($scope) {

   // $scope.feed = [];  
  
}]);

rssApp.controller('feedController', ["$scope", 'feedService', function ($scope, feedService) {
        $scope.feed = function() { return feedService.getFeed(); };
}]);

rssApp.controller('feedListController', ["$scope", "feedListService", "feedService", function($scope, feedListService, feedService) {

    feedListService.setFeedList(feedListService.loadFeedList());    
    $scope.feedList = function() { return feedListService.getFeedList(); };


    $scope.addFeed = function() {
        feedListService.addFeed($scope.newUrl);
        $scope.newUrl = '';
    };
    
    $scope.load = function(feedName) {
        feedService.setFeed(feedService.loadFeed(feedName));
    };
     
}]);

rssApp.factory('feedListService', ["$resource", "$http", function($resource, $http) {     
        
    var feedList = [];

    return {
        addFeed: function(feedUrl) {
            feedList.push({name:feedUrl, title:feedUrl});
            $http.post('/addFeedToList/', {url:feedUrl});
        },
        removeFeed: function(feedUrl) {
            $http.post('/removeFeedFromList/', {url:feedUrl});
        },
        loadFeedList: function(options) {            
            return $resource('/getFeedList', options).query({isArray:true});
        },
        setFeedList: function(newList) {              
            feedList = newList;               
        },
        getFeedList: function() {   
            return feedList;
        }
    };
}]);

rssApp.service('feedService', ["$resource", "$cacheFactory", function($resource, $cacheFactory) {
       
    var feed = {info:{title:""}};
    var feedsCache = $cacheFactory('feeds');
    
    return {
        loadFeed: function(feedUrl) {
            return $resource(
                '/getFeed', 
                {'url':'@url'},
                {'get': {method:'GET', cache:feedsCache} })
                    .get({url: feedUrl}); 
        },
        setFeed: function(newFeed) {
            feed = newFeed;
        },
        getFeed: function() {
            return feed;
        }
    };
        
}]);