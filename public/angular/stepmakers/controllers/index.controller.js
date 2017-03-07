(function (){
	'use strict';

	angular
		.module('stepmakers')
		.controller('IndexStepmakersCtrl', IndexStepmakersCtrl);

	IndexStepmakersCtrl.$inject = ['StepmakersService'];

	function IndexStepmakersCtrl(StepmakersService) {
		var vm = this;
		vm.stepmakers = [];
    vm.isLoading = true;
    vm.query = {
      limit: 10,
      page: 1,
      total: 0
    };

		vm.init = function() {
			vm.getStepmakers();
		};

    vm.getStepmakers = function() {
      StepmakersService.get({page: vm.query.page}, function(response){
        vm.query.total = response.totalItems;
        vm.stepmakers = response.data;
        vm.isLoading = false;
      }, function(err){
        console.log(err);
      });
    };
	}

}());
