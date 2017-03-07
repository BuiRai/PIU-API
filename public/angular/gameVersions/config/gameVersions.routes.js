(function () {
	'use strict';

	function routeConfig($routeProvider) {
		$routeProvider
			.when('/gameVersions', {
				templateUrl: 'angular/gameVersions/views/index.view.html',
				controller: 'IndexGameVersionsCtrl',
				controllerAs: 'vm'
			});
	}

	angular
		.module('artists')
		.config(routeConfig);

	routeConfig.$inject = ['$routeProvider'];

}());
