(function(){
  'use strict';

  function routeConfig($routeProvider){

    $routeProvider
      .when('/auth', {
        templateUrl: 'angular/auth/views/auth.view.html',
        controller: 'AuthCtrl',
        controllerAs: 'vm'
      });
  }

  angular
    .module('auth')
    .config(routeConfig);

  routeConfig.$inject = ['$routeProvider'];
}());
