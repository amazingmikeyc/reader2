var rssApp = angular.module('rssApp', []);

rssApp.controller('feedListController', function ($scope, $http) {
  $scope.feedlist = {};
  $scope.feedlist.list = [
    {'name': 'http://blog.mikecongreve.com/feed/',
     'title': 'mikecongreves blog'},
    {'name': 'http://scripting.com/rss.xml',
     'title': 'scripting.com'},
    {'name': 'http://www.guardian.co.uk/rss',
     'title': 'guardian'}
  ];
  
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
