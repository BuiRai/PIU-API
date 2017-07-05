(function(){
	'use strict';

	angular
		.module('chartTypes')
		.factory('ChartTypesService', ChartTypesService);

	ChartTypesService.$inject = ['$resource'];

	function ChartTypesService($resource){
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
