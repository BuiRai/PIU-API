(function(){
  'use strict';

  angular
    .module('songs')
    .controller('IndexSongsCtrl', IndexSongsCtrl);

    IndexSongsCtrl.$inject = ['Song'];

    function IndexSongsCtrl(Song) {
      var vm = this;
      vm.songs = [];
      vm.isLoading = true;
      vm.query = { limit: 10, page: 1, total: 0 };

      vm.init = function() {
        vm.getSongs();
      };

      vm.getSongs = function() {
        Song.get({page: vm.query.page}, function(response){
          console.log(response);
          console.log(vm.query);
          vm.query.total = response.totalItems;
          vm.songs = response.data;
          vm.isLoading = false;
        }, function(err){
          console.log(err);
        });
      };

      vm.getSongsByName = function() {
        // vm.isLoading = true;
        Song.get({page: vm.query.page, search: vm.search}, function(response){
          console.log(response);
          console.log(vm.query);
          vm.query.total = response.totalItems;
          vm.songs = response.data;
          // vm.isLoading = false;
        }, function(err){
          console.log(err);
        });
      };
    }
})();
