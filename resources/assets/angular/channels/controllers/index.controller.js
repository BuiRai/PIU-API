(function (){
	'use strict';

	angular
		.module('channels')
		.controller('IndexChannelsCtrl', IndexChannelsCtrl);

	IndexChannelsCtrl.$inject = ['Channel'];

	function IndexChannelsCtrl(Channel) {
		var vm = this;
		vm.channels = [];
    vm.isLoading = true;
    vm.query = {
      limit: 10,
      page: 1,
      total: 0
    };

		vm.init = function() {
			vm.getChannels();
		};

    vm.getChannels = function() {
      Channel.get({page: vm.query.page}, function(response){
        console.log(response.data);
        vm.query.total = response.totalItems;
        vm.channels = response.data;
        vm.isLoading = false;
      }, function(err){
        console.log(err);
      });
    };
	}

}());
