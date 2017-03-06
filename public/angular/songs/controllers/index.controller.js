(function(){
  'use strict';

  angular
    .module('songs')
    .controller('IndexSongsCtrl', IndexSongsCtrl);

    IndexSongsCtrl.$inject = ['SongsService'];

    function IndexSongsCtrl(SongsService) {
      var vm = this;
      vm.songs = [];
      vm.isLOading = true;
      vm.query = {
        limit: 10,
        page: 1,
        total: 0
      };

      vm.init = function() {
        vm.getSongs();
      };

      vm.getSongs = function() {
        SongsService.get({page: vm.query.page}, function(response){
          vm.query.total = response.totalItems;
          vm.songs = response.data;
          vm.isLoading = false;
        }, function(err){
          console.log(err);
        });
      };
    }
}());
