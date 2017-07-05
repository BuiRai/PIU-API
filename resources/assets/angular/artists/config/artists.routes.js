(function () {
	'use strict';

	function routeConfig($routeProvider) {
		$routeProvider
			.when('/artists', {
				templateUrl: 'dist/views/artists/index.view.html',
				controller: 'IndexArtistsCtrl',
				controllerAs: 'vm'
			});
	}

	angular
		.module('artists')
		.config(routeConfig);

	routeConfig.$inject = ['$routeProvider'];

})();
