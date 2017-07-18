(function(){
  'use strict';

  function routeConfig($authProvider){
    $authProvider.loginUrl = 'api/v1.0/authenticate';
    $authProvider.signupUrl = '/api/v1.0/signup';
    $authProvider.tokenPrefix = 'PIU';

    // If need some provider, add below please
    // More info on: https://github.com/sahat/satellizer
  }

  angular
    .module('auth')
    .config(routeConfig);

  routeConfig.$inject = ['$authProvider'];
}());
