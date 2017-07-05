(function () {
	'use strict';

	function routeConfig($routeProvider) {
		$routeProvider
			.when('/chartTypes', {
				templateUrl: 'dist/views/chartTypes/index.view.html',
				controller: 'IndexChartTypesCtrl',
				controllerAs: 'vm'
			});
	}

	angular
		.module('chartTypes')
		.config(routeConfig);

	routeConfig.$inject = ['$routeProvider'];

})();
