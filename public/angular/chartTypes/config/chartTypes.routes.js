(function () {
	'use strict';

	function routeConfig($routeProvider) {
		$routeProvider
			.when('/chartTypes', {
				templateUrl: 'angular/chartTypes/views/index.view.html',
				controller: 'IndexChartTypesCtrl',
				controllerAs: 'vm'
			});
	}

	angular
		.module('chartTypes')
		.config(routeConfig);

	routeConfig.$inject = ['$routeProvider'];

}());
