(function (){
	'use strict';

	angular
		.module('styles')
		.controller('IndexStylesCtrl', IndexStylesCtrl);

	IndexStylesCtrl.$inject = ['Style'];

	function IndexStylesCtrl(Style) {
		var vm = this;
		vm.styles = [];
    vm.isLoading = true;
    vm.query = {
      limit: 10,
      page: 1,
      total: 0
    };

		vm.init = function() {
			vm.getStyles();
		};

    vm.getStyles = function() {
      Style.get({page: vm.query.page}, function(response){
        vm.query.total = response.totalItems;
        vm.styles = response.data;
        vm.isLoading = false;
      }, function(err){
        console.log(err);
      });
    };
	}

})();
