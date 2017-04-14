(function(){
  'use strict';

  function routeConfig($routeProvider, $authProvider){
    $authProvider.loginUrl = 'api/v1.0/authenticate';

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

  routeConfig.$inject = ['$routeProvider', '$authProvider'];
}());
