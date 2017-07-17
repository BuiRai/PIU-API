(function(){
	'use strict';

	angular
		.module('styles')
		.factory('Style', Style);

	Style.$inject = ['$resource'];

	function Style($resource){
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
