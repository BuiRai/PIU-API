(function(){
	'use strict';

	angular
		.module('gameVersions')
		.factory('GameVersionsService', GameVersionsService);

	GameVersionsService.$inject = ['$resource'];

	function GameVersionsService($resource){
		var GameVersion = $resource('/api/v1.0/gameVersions/:gameVersion_id', {
			'gameVersion_id': '@id'
		}, {
			update: {
				method: 'PUT'
			}
		});

		return GameVersion;
	}
}());
