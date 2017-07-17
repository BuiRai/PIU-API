(function(){
	'use strict';

	angular
		.module('levels')
		.factory('Level', Level);

	Level.$inject = ['$resource'];

	function Level($resource){
		var Level = $resource('/api/v1.0/levels/:level_id', {
			'level_id': '@id'
		}, {
			update: {
				method: 'PUT'
			}
		});

		return Level;
	}
})();
