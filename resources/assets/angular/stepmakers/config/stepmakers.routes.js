(function () {
	'use strict';

	function routeConfig($routeProvider) {
		$routeProvider
			.when('/stepmakers', {
				templateUrl: 'dist/views/stepmakers/index.view.html',
				controller: 'IndexStepmakersCtrl',
				controllerAs: 'vm'
			});
	}

	angular
		.module('stepmakers')
		.config(routeConfig);

	routeConfig.$inject = ['$routeProvider'];

})();
