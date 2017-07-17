(function (){
	'use strict';

	angular
		.module('types')
		.controller('IndexTypesCtrl', IndexTypesCtrl);

	IndexTypesCtrl.$inject = ['TypeSong'];

	function IndexTypesCtrl(TypeSong) {
		var vm = this;
		vm.types = [];
    vm.isLoading = true;
    vm.query = {
      limit: 10,
      page: 1,
      total: 0
    };

		vm.init = function() {
			vm.getTypes();
		};

    vm.getTypes = function() {
      TypeSong.get({page: vm.query.page}, function(response){
        vm.query.total = response.totalItems;
        vm.types = response.data;
        vm.isLoading = false;
      }, function(err){
        console.log(err);
      });
    };
	}

})();
