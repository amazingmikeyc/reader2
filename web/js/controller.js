var rssApp = angular.module('rssApp', ['ngSanitize', 'ngResource']);

rssApp.controller('mainController', ["$scope", function ($scope) {

   // $scope.feed = [];  
  
}]);

rssApp.controller('feedController', ["$scope", 'feedService', function ($scope, feedService) {
        $scope.feed = function() { return feedService.getFeed(); };
}]);

rssApp.controller('feedListController', ["$scope", "$http", "feedListService", "feedService", function($scope, $http, feedListService, feedService) {
    
    $scope.feedList = feedListService.query('/getFeedList');
      
    $scope.addFeed = function() {
        $scope.feedlist.list.push({name:$scope.feedlist.newUrl, title:$scope.feedlist.newUrl});
        $scope.feedlist.newUrl = '';
    };
    
    $scope.load = function(feedName) {
        feedService.setFeed(feedService.loadFeed(feedName));        
    };
     
}]);

rssApp.factory('feedListService', ["$resource", function($resource) {     
        return $resource('/getFeedList', {}, {query: {isArray:true}});    
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