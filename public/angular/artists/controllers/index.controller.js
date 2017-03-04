(function (){
	'use strict';

	angular
		.module('artists')
		.controller('IndexArtistsCtrl', IndexArtistsCtrl);

	IndexArtistsCtrl.$inject = ['ArtistsService'];

	function IndexArtistsCtrl(ArtistsService) {
		var vm = this;
		vm.artists = [];
    vm.isLoading = true;
    vm.query = {
      limit: 10,
      page: 1,
      total: 0
    };

		vm.init = function() {
			vm.getArtists();
		};

    vm.getArtists = function() {
      ArtistsService.get({page: vm.query.page}, function(response){
        vm.query.total = response.totalItems;
        vm.artists = response.data;
        vm.isLoading = false;
      }, function(err){
        console.log(err);
      });
    };
	}

}());
