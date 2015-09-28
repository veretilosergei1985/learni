'use strict';

var serviceBase = 'http://admin.learni.loc/';

var app = angular.module('learnist', [
  'ngRoute',
  'learnistControllers',
]);

app.config(['$routeProvider',
  function($routeProvider) {
    $routeProvider.
      when('/categories/:categoryId', {
        templateUrl: 'partials/index.html',
        controller: 'view',
        resolve: {
          category: function(services, $route){
            var categoryId = $route.current.params.categoryId;
            return services.getCategory(categoryId);
          }
        }
      })
    .otherwise({
        redirectTo: '/categories/index'
    });
  }]);