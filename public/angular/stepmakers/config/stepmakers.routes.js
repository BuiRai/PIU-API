(function () {
	'use strict';

	function routeConfig($routeProvider) {
		$routeProvider
			.when('/stepmakers', {
				templateUrl: 'angular/stepmakers/views/index.view.html',
				controller: 'IndexStepmakersCtrl',
				controllerAs: 'vm'
			});
	}

	angular
		.module('stepmakers')
		.config(routeConfig);

	routeConfig.$inject = ['$routeProvider'];

}());
