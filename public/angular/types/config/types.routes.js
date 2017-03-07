(function () {
	'use strict';

	function routeConfig($routeProvider) {
		$routeProvider
			.when('/types', {
				templateUrl: 'angular/types/views/index.view.html',
				controller: 'IndexTypesCtrl',
				controllerAs: 'vm'
			});
	}

	angular
		.module('types')
		.config(routeConfig);

	routeConfig.$inject = ['$routeProvider'];

}());
