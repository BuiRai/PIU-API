(function(){
	'use strict';

	angular
		.module('artists')
		.factory('ArtistsService', ArtistsService);

	ArtistsService.$inject = ['$resource'];

	function ArtistsService($resource){
		var Artist = $resource('/api/v1.0/artists/:artist_id', {
			'artist_id': '@id'
		}, {
			update: {
				method: 'PUT'
			}
		});

		return Artist;
	}
}());