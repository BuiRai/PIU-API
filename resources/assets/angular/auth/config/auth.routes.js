(function(){
  'use strict';

  function routeConfig($routeProvider){

    $routeProvider
      .when('/auth', {
        templateUrl: 'dist/views/auth/auth.view.html',
        controller: 'AuthCtrl',
        controllerAs: 'vm'
      });
  }

  angular
    .module('auth')
    .config(routeConfig);

  routeConfig.$inject = ['$routeProvider', '$authProvider'];
})();
