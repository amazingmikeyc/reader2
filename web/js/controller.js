var rssApp = angular.module('rssApp', ['ngSanitize', 'ngResource', 'ngAnimate']);

rssApp.controller('mainController', ["$scope", function ($scope) {

   // $scope.feed = [];  
  
}]);

rssApp.controller('feedController', ["$scope", 'feedService', function ($scope, feedService) {
        $scope.feed = function() { return feedService.getFeed(); };
        
        $scope.refreshFeed = function() { feedService.refreshFeed(); };
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
        feedListService.setFeed(feedName);
    };
     
}]);


rssApp.controller('loginController', ["$scope", function($scope) {
    
    
    
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
        },
        setFeed: function(feed) {
            $(feedList).each(function() {
                this.active = (this.url === feed);
            });
        }
    };
}]);

rssApp.service('feedService', ["$resource", "$http", "$cacheFactory", function($resource, $http, $cacheFactory) {
       
    var feed = {info:{title:""}};
    var feedsCache = $cacheFactory('feeds');
    var currentFeed = '';
    
    return {
        loadFeed: function(feedUrl, options) {
            currentFeed = feedUrl;
            return $resource(
                '/getFeed/', 
                jQuery.extend(options, {'url':'@url'}),
                {'get': {method:'GET', cache:feedsCache} })
                    .get({url: feedUrl}); 
        },
        setFeed: function(newFeed) {
            feed = newFeed;
        },
        getFeed: function() {
            return feed;
        },
        refreshFeed: function() {            
            
            return $resource(
                '/getFeed/', 
                {'url':'@url', refresh: true},
                {'get': {method:'GET'} })
                    .get({url: currentFeed, refresh: true}); 
            
            $http.post('/getFeed/', {url: currentFeed, refresh: true}).success(function() {
                return this.loadFeed(currentFeed, {refresh:true});
            });
            
        }
    };
        
}]);