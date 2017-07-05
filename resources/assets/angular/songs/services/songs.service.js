(function(){
  'use strict';

  angular
    .module('songs')
    .factory('SongsService', SongsService);

  SongsService.$inject = ['$resource'];

  function SongsService($resource){
    var Song = $resource('/api/v1.0/songs/:song_id', {
      'song_id': '@id'
    }, {
      update: {
        methd: 'PUT'
      }
    });

    return Song;
  }
})();
