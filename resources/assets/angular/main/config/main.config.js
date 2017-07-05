(function(){
	'use strict';

	function routeConfig($routeProvider) {
		$routeProvider
			.when('/', {
				templateUrl: 'dist/views/main/index.view.html',
				controller: 'MainCtrl',
				controllerAs: 'vm'
			});
	}

	angular
		.module('main')
		.config(routeConfig);

	routeConfig.$inject = ['$routeProvider'];
})();
