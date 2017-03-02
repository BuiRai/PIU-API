(function(){
	'use strict';
	angular
		.module('main')
		.controller('MainCtrl', MainCtrl);

	MainCtrl.$inject = ['$http'];

	function MainCtrl($http){
		var vm = this;
		vm.apiSource = 'http://localhost:8000/api/v1.0/songs';
		vm.result;

		vm.init = function(){
			console.log('init main controller...');
		};

		vm.search = function() {
			$http.get(vm.apiSource).then(function(response){
				vm.result = response.data.data;
				console.log(response.data.data);
			}).catch(function(err){

			});
		};
	}

}());