(function () {
	'use strict';

	function routeConfig($routeProvider) {
		$routeProvider
			.when('/channels', {
				templateUrl: 'angular/channels/views/index.view.html',
				controller: 'IndexChannelsCtrl',
				controllerAs: 'vm'
			});
	}

	angular
		.module('channels')
		.config(routeConfig);

	routeConfig.$inject = ['$routeProvider'];

}());
