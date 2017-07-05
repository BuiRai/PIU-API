(function () {
	'use strict';

	function routeConfig($routeProvider) {
		$routeProvider
			.when('/channels', {
				templateUrl: 'dist/views/channels/index.view.html',
				controller: 'IndexChannelsCtrl',
				controllerAs: 'vm'
			});
	}

	angular
		.module('channels')
		.config(routeConfig);

	routeConfig.$inject = ['$routeProvider'];

}());
