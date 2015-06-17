var rssApp = angular.module('rssApp', ['ngSanitize']);

rssApp.controller('feedListController', function ($scope, $http) {
  $scope.feedlist = {};
  $scope.feedlist.list = [{"url": "http://blog.mikecongreve.com/feed/","name": "mikecongreves blog"},{"url": "http://scripting.com/rss.xml","name": "scripting.com"},{"url": "http://www.guardian.co.uk/rss", "name": "guardian"}];
    
  $scope.feedlist.addFeed = function() {
      $scope.feedlist.list.push({name:$scope.feedlist.newUrl, title:$scope.feedlist.newUrl});
      $scope.feedlist.newUrl = '';
  };
  
  $scope.load = function(feedname) {
      $http.get('/getFeed?url=' + feedname).success(function(data) {
          $scope.feed = data;
      });
  };
  
  $scope.feed = [];
  
});

