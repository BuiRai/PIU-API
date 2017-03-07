(function(){
	'use strict';

	angular
		.module('channels')
		.factory('ChannelsService', ChannelsService);

	ChannelsService.$inject = ['$resource'];

	function ChannelsService($resource){
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
