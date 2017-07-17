(function(){
	'use strict';

	angular
		.module('channels')
		.factory('Channel', Channel);

	Channel.$inject = ['$resource'];

	function Channel($resource){
		var Channel = $resource('/api/v1.0/channels/:channel_id', {
			'channel_id': '@id'
		}, {
			update: {
				method: 'PUT'
			}
		});

		return Channel;
	}
}());
