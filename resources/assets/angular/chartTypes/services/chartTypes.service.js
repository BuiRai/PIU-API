(function(){
	'use strict';

	angular
		.module('chartTypes')
		.factory('ChartType', ChartType);

	ChartType.$inject = ['$resource'];

	function ChartType($resource){
		var ChartType = $resource('/api/v1.0/chartTypes/:chartType_id', {
			'chartType_id': '@id'
		}, {
			update: {
				method: 'PUT'
			}
		});

		return ChartType;
	}
})();
