(function(){
	'use strict';

	angular
		.module('types')
		.factory('TypesService', TypesService);

	TypesService.$inject = ['$resource'];

	function TypesService($resource){
		var Type = $resource('/api/v1.0/types/:type_id', {
			'type_id': '@id'
		}, {
			update: {
				method: 'PUT'
			}
		});

		return Type;
	}
}());
