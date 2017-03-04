(function(){
  'use strict';

  function routeConfig($routeProvider) {
    $routeProvider
      .when('/songs', {
        templateUrl: 'angular/songs/views/index.view.html',
        controller: 'IndexSongsCtrl',
        controllerAs: 'vm'
      });
  }

  angular
    .module('songs')
    .config(routeConfig);

  routeConfig.$inject = ['$routeProvider'];

}());
