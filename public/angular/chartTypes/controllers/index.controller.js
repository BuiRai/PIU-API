(function (){
	'use strict';

	angular
		.module('chartTypes')
		.controller('IndexChartTypesCtrl', IndexChartTypesCtrl);

	IndexChartTypesCtrl.$inject = ['ChartTypesService'];

	function IndexChartTypesCtrl(ChartTypesService) {
		var vm = this;
		vm.chartTypes = [];
    vm.isLoading = true;
    vm.query = {
      limit: 10,
      page: 1,
      total: 0
    };

		vm.init = function() {
			vm.getChartTypes();
		};

    vm.getChartTypes = function() {
      ChartTypesService.get({page: vm.query.page}, function(response){
        console.log(response.data);
        vm.query.total = response.totalItems;
        vm.chartTypes = response.data;
        vm.isLoading = false;
      }, function(err){
        console.log(err);
      });
    };
	}

}());
