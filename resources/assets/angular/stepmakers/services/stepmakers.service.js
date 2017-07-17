(function(){
	'use strict';

	angular
		.module('stepmakers')
		.factory('Stepmaker', Stepmaker);

	Stepmaker.$inject = ['$resource'];

	function Stepmaker($resource){
		var Stepmaker = $resource('/api/v1.0/stepmakers/:stepmaker_id', {
			'stepmaker_id': '@id'
		}, {
			update: {
				method: 'PUT'
			}
		});

		return Stepmaker;
	}
})();
