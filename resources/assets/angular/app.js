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
      'md.data.table',
      'satellizer',
      'ngStorage'
  	],
  	mainApplicationModuleName: mainApplicationModuleName,
  	registerModule: registerModule
  };
  window.ApplicationConfiguration = service;

  window.BASE_PATH = 'https://pumpitup.herokuapp.com/api/v1.0/';
  // window.BASE_PATH = 'http://localhost:8000/api/v1.0/';

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
})(window);
