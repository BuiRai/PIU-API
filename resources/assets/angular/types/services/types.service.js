(function(){
	'use strict';

	angular
		.module('types')
		.factory('TypeSong', TypeSong);

	TypeSong.$inject = ['$resource'];

	function TypeSong($resource){
		var Type = $resource('/api/v1.0/typesSongs/:type_id', {
			'type_id': '@id'
		}, {
			update: {
				method: 'PUT'
			}
		});

		return Type;
	}
})();
