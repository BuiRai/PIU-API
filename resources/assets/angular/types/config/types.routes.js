(function () {
	'use strict';

	function routeConfig($routeProvider) {
		$routeProvider
			.when('/types', {
				templateUrl: 'dist/views/types/index.view.html',
				controller: 'IndexTypesCtrl',
				controllerAs: 'vm'
			});
	}

	angular
		.module('types')
		.config(routeConfig);

	routeConfig.$inject = ['$routeProvider'];

})();
