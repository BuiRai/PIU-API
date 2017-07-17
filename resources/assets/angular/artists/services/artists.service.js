(function(){
	'use strict';

	angular
		.module('artists')
		.factory('Artist', Artist);

	Artist.$inject = ['$resource'];

	function Artist($resource){
		var Artist = $resource('/api/v1.0/artists/:artist_id', {
			'artist_id': '@id'
		}, {
			update: {
				method: 'PUT'
			}
		});

		return Artist;
	}
})();
