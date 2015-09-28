'use strict';

/* Controllers */

var learnistControllers = angular.module('learnistControllers', []);
/*
filmControllers.controller('filmListCtrl', ['$scope', '$http',
  function($scope, $http) {
    $http.get('phones/phones.json').success(function(data) {
      $scope.phones = data;
    });

    $scope.orderProp = 'age';
  }]);
*/  
  
learnistControllers.controller('view', ['$scope', '$http', 'services', '$location', 'category', 
    function($scope, $http, services, $location, category) {
    //$scope.message = 'Look! I am an about page.';
    //$scope.mainImageUrl = film.data.images[0].image;
    $scope.category = category.data;
}]);

