(function(){
	'use strict';

	angular
		.module('styles')
		.factory('StylesService', StylesService);

	StylesService.$inject = ['$resource'];

	function StylesService($resource){
		var Style = $resource('/api/v1.0/styles/:style_id', {
			'style_id': '@id'
		}, {
			update: {
				method: 'PUT'
			}
		});

		return Style;
	}
})();
