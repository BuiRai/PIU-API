(function () {
	'use strict';

	function routeConfig($routeProvider) {
		$routeProvider
			.when('/styles', {
				templateUrl: 'dist/views/styles/index.view.html',
				controller: 'IndexStylesCtrl',
				controllerAs: 'vm'
			});
	}

	angular
		.module('styles')
		.config(routeConfig);

	routeConfig.$inject = ['$routeProvider'];

})();
