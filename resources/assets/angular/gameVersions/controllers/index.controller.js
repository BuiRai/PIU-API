(function (){
	'use strict';

	angular
		.module('gameVersions')
		.controller('IndexGameVersionsCtrl', IndexArtistsCtrl);

	IndexArtistsCtrl.$inject = ['GameVersion'];

	function IndexArtistsCtrl(GameVersion) {
		var vm = this;
		vm.gameVersions = [];
    vm.isLoading = true;
    vm.query = {
      limit: 10,
      page: 1,
      total: 0
    };

		vm.init = function() {
			vm.getGameVersions();
		};

    vm.getGameVersions = function() {
      GameVersion.get({page: vm.query.page}, function(response){
        vm.query.total = response.totalItems;
        vm.gameVersions = response.data;
        vm.isLoading = false;
      }, function(err){
        console.log(err);
      });
    };
	}

})();
