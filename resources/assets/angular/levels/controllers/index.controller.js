(function (){
	'use strict';

	angular
		.module('levels')
		.controller('IndexLevelsCtrl', IndexLevelsCtrl);

	IndexLevelsCtrl.$inject = ['Level'];

	function IndexLevelsCtrl(Level) {
		var vm = this;
		vm.levels = [];
    vm.isLoading = true;
    vm.query = {
      limit: 10,
      page: 1,
      total: 0
    };

		vm.init = function() {
			vm.getLevels();
		};

    vm.getLevels = function() {
      Level.get({page: vm.query.page}, function(response){
        console.log(response.data);
        vm.query.total = response.totalItems;
        vm.levels = response.data;
        vm.isLoading = false;
      }, function(err){
        console.log(err);
      });
    };
	}

})();
