// var app = angular.module('piuapp', [])
// 	.constant('API_URL', 'http://localhost:8080/api/v1.0/');

(function(window){
  var mainApplicationModuleName = 'piuapp';

  var service = {
  	applicationModuleVendorDependencies: [
  		'ngAnimate',
  		'ngAria',
	    'ngCookies',
	    'ngMessages',
	    'ngResource',
	    'ngRoute',
	    'ngSanitize',
	    'ngTouch',
	    'ngMaterial',
  	],
  	mainApplicationModuleName: mainApplicationModuleName,
  	registerModule: registerModule
  };
  window.ApplicationConfiguration = service;

  var mainApplicationModule = angular.module(service.mainApplicationModuleName,
  	service.applicationModuleVendorDependencies);

  mainApplicationModule.config(['$locationProvider',
    function($locationProvider) {
      $locationProvider.hashPrefix('!');
    }
  ]);

  if (window.location.hash === '#_=_') {
    window.location.hash = '#!';
  }

  function registerModule(moduleName, dependencies) {
  	angular.module(moduleName, dependencies || []);
  	angular.module(mainApplicationModuleName).requires.push(moduleName);
  }

  // angular.element(document).ready(function() {
  //   angular.bootstrap(document, [mainApplicationModuleName]);
  // });
}(window));