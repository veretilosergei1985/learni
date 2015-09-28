'use strict';

learnistControllers.factory("services", ['$http','$location','$route', 
    function($http,$location,$route) {
    var obj = {};
    obj.getCategory = function(categoryId){
        return $http.get(serviceBase + 'categories/' + categoryId);
    }
    
    return obj;   
}]);