(function(){
	'use strict';
	angular
		.module('main')
		.controller('MainCtrl', MainCtrl);

	MainCtrl.$inject = ['$http'];

	function MainCtrl($http){
		var vm = this;
		vm.apiSource = window.BASE_PATH + 'songs';
		vm.result;

		vm.init = function(){

		};

		vm.search = function() {
      $http.get(vm.apiSource).then(function(response){
        vm.result = response.data;
			}).catch(function(err){

			});
		};
	}

}());
