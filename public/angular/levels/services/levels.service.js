(function(){
	'use strict';

	angular
		.module('levels')
		.factory('LevelsService', LevelsService);

	LevelsService.$inject = ['$resource'];

	function LevelsService($resource){
		var Level = $resource('/api/v1.0/levels/:level_id', {
			'level_id': '@id'
		}, {
			update: {
				method: 'PUT'
			}
		});

		return Level;
	}
}());
