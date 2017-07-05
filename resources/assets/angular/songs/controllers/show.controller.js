(function(){
  'use strict';

  angular
    .module('songs')
    .controller('ShowSongCtrl', ShowSongCtrl);

    ShowSongCtrl.$inject = ['SongsService', 'ChartTypesService',  'StepmakersService', 'StylesService', '$routeParams', 'LevelsService', 'song', '$q', '$mdToast'];

    function ShowSongCtrl(SongsService, ChartTypesService, StepmakersService, StylesService, $routeParams, LevelsService, song, $q, $mdToast) {
      var vm = this;
      vm.song = song.data || {};
      vm.level = {};
      vm.stepmakers = [];
      vm.styles = [];
      vm.chartTypes = [];
      vm.loadingPercentage = 0;

      vm.init = function() {
        console.log(vm.song);
        vm.getChartTypes()
        .then(function(response){
          vm.chartTypes = response;
          vm.loadingPercentage = 33;
          return vm.getStepmakers();
        })
        .then(function(response){
          vm.stepmakers = response;
          vm.loadingPercentage = 66;
          return vm.getStyles();
        })
        .then(function(response){
          vm.styles = response;
          vm.loadingPercentage = 100;
        })
        .catch(function(err){
          console.log('Errors:',err);
        });
      };

      vm.getStepmakers = function(){
        var deferred = $q.defer();
        StepmakersService.get(function(response){
          deferred.resolve(response.data);
        }, function(err){
          deferred.reject(err);
        });
        return deferred.promise;
      };

      vm.getStyles = function(){
        var deferred = $q.defer();
        StylesService.get(function(response){
          deferred.resolve(response.data);
        }, function(err){
          deferred.reject(err);
        });
        return deferred.promise;
      };

      vm.getChartTypes = function(){
        var deferred = $q.defer();
        ChartTypesService.get(function(response){
          deferred.resolve(response.data);
        }, function(err){
          deferred.reject(err);
        });
        return deferred.promise;
      };

      vm.addLevelToSong = function() {
        console.log('level:',vm.level);
        if (vm.levelForm.$valid) {
          vm.level.song_id = vm.song.id;
          LevelsService.save(vm.level, function(response){
            vm.song.levels.push(response.data);
            vm.showToast('Level created successfully');
          });
        } else {
          console.log('no valid');
        }
      };

      vm.showToast = function(message) {
        $mdToast.show(
          $mdToast.simple()
            .textContent(message)
            .position('top right')
            .hideDelay(3000)
        )
      };
    }
})();
