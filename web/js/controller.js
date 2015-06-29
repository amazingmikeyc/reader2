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
        $scope.feedlist.list.push({name:$scope.feedlist.newUrl, title:$scope.feedlist.newUrl});
        $scope.feedlist.newUrl = '';
    };
    
    $scope.load = function(feedName) {
        feedService.setFeed(feedService.loadFeed(feedName));
    };
     
}]);

rssApp.factory('feedListService', ["$resource", function($resource) {     
        
        var feedList = [];
        
        return {
            addFeed: function(feedUrl) {
                
            },
            deleteFeed: function(feedUrl) {
                
            },
            loadFeedList: function() {
                return $resource('/getFeedList', {}).query({isArray:true});
            },
            setFeedList: function(newList) {              
                feedList = newList;               
            },
            getFeedList: function() {   
                return feedList;
            }
        };
}]);

rssApp.service('feedService', ["$resource", function($resource) {
       
    var feed = {info:{title:""}};
    
    return {
        loadFeed: function(feedUrl) {
            return $resource('/getFeed', {'url':'@url'}).get({url: feedUrl}); 
        },
        setFeed: function(newFeed) {
            feed = newFeed;
        },
        getFeed: function() {
            return feed;
        }
    };
        
}]);