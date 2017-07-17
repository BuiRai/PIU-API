(function(){
	'use strict';

	angular
		.module('gameVersions')
		.factory('GameVersion', GameVersion);

	GameVersion.$inject = ['$resource'];

	function GameVersion($resource){
		var GameVersion = $resource('/api/v1.0/gameVersions/:gameVersion_id', {
			'gameVersion_id': '@id'
		}, {
			update: {
				method: 'PUT'
			}
		});

		return GameVersion;
	}
})();
