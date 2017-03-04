(function () {
	'use strict';

	function routeConfig($routeProvider) {
		$routeProvider
			.when('/artists', {
				templateUrl: 'angular/artists/views/index.view.html',
				controller: 'IndexArtistsCtrl',
				controllerAs: 'vm'
			});
	}

	angular
		.module('artists')
		.config(routeConfig);

	routeConfig.$inject = ['$routeProvider'];

}());
