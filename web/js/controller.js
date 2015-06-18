var rssApp = angular.module('rssApp', ['ngSanitize', 'ngResource']);

rssApp.controller('feedController', ["$scope", 'feedListService', function ($scope, feedService) {

//  $scope.load = feedService.getFeed;
//  
//  $scope.feed = feedService.feed;
  
}]);

rssApp.controller('feedListController', ["$scope", "$http", "feedListService", function($scope, $http, feedService) {
    $scope.feedList = [{"url": "http://blog.mikecongreve.com/feed/","name": "mikecongreves blog"},{"url": "http://scripting.com/rss.xml","name": "scripting.com"},{"url": "http://www.guardian.co.uk/rss", "name": "guardian"}];
    
    $scope.feedList = feedService.query();

    console.log($scope.feedList);
      
    $scope.addFeed = function() {
        $scope.feedlist.list.push({name:$scope.feedlist.newUrl, title:$scope.feedlist.newUrl});
        $scope.feedlist.newUrl = '';
    };
     
}]);

     

rssApp.factory('feedListService', ["$resource", function($resource) {
        var feed = [];
        var feedlist = [{"url": "http://blog.mikecongreve.com/feed/","name": "mikecongreves blog"},{"url": "http://scripting.com/rss.xml","name": "scripting.com"},{"url": "http://www.guardian.co.uk/rss", "name": "guardian"}];

        return $resource('/getFeedList', {}, {query: {isArray:true}});
    
}]);

