(function () {
	'use strict';

	function routeConfig($routeProvider) {
		$routeProvider
			.when('/levels', {
				templateUrl: 'dist/views/levels/index.view.html',
				controller: 'IndexLevelsCtrl',
				controllerAs: 'vm'
			});
	}

	angular
		.module('levels')
		.config(routeConfig);

	routeConfig.$inject = ['$routeProvider'];

})();
