(function(){
	'use strict';

	function routeConfig($routeProvider) {
		$routeProvider
			.when('/', {
				templateUrl: 'angular/main/views/index.view.html',
				controller: 'MainCtrl',
				controllerAs: 'vm'
			});
	}

	angular
		.module('main')
		.config(routeConfig);

	routeConfig.$inject = ['$routeProvider'];
}());