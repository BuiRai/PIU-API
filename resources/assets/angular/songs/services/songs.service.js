(function(){
  'use strict';

  angular
    .module('songs')
    .factory('Song', Song);

  Song.$inject = ['$resource'];

  function Song($resource){
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
