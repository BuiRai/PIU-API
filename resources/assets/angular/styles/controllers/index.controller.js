(function (){
	'use strict';

	angular
		.module('styles')
		.controller('IndexStylesCtrl', IndexStylesCtrl);

	IndexStylesCtrl.$inject = ['StylesService'];

	function IndexStylesCtrl(StylesService) {
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
      StylesService.get({page: vm.query.page}, function(response){
        vm.query.total = response.totalItems;
        vm.styles = response.data;
        vm.isLoading = false;
      }, function(err){
        console.log(err);
      });
    };
	}

})();
