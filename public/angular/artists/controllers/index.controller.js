(function (){
	'use strict';

	angular
		.module('artists')
		.controller('IndexArtistsCtrl', IndexArtistsCtrl);

	IndexArtistsCtrl.$inject = ['ArtistsService'];

	function IndexArtistsCtrl(ArtistsService) {
		var vm = this;
		vm.artists = [];

		vm.init = function(){
			console.log('init...');
			ArtistsService.get(function(response){
				vm.artists = response.data;
			});
		};
	}

}());