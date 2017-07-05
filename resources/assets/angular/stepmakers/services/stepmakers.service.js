(function(){
	'use strict';

	angular
		.module('stepmakers')
		.factory('StepmakersService', StepmakersService);

	StepmakersService.$inject = ['$resource'];

	function StepmakersService($resource){
		var Stepmaker = $resource('/api/v1.0/stepmakers/:stepmaker_id', {
			'stepmaker_id': '@id'
		}, {
			update: {
				method: 'PUT'
			}
		});

		return Stepmaker;
	}
})();
