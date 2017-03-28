(function(){
  'use strict';

  function routeConfig($routeProvider) {
    $routeProvider
      .when('/songs', {
        templateUrl: 'angular/songs/views/index.view.html',
        controller: 'IndexSongsCtrl',
        controllerAs: 'vm'
      })
      .when('/songs/:songId', {
        templateUrl: 'angular/songs/views/show.view.html',
        controller: 'ShowSongCtrl',
        controllerAs: 'vm',
        resolve: {
          song: getSong
        }
      });
  }

  angular
    .module('songs')
    .config(routeConfig);

  routeConfig.$inject = ['$routeProvider'];

  getSong.$inject = ['$route', 'SongsService'];

  function getSong($route, SongsService) {
    console.log($route.current.params.songId);
    return SongsService.get({song_id: $route.current.params.songId}).$promise;
  }

}());
