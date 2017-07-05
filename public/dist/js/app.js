// var app = angular.module('piuapp', [])
// 	.constant('API_URL', 'http://localhost:8080/api/v1.0/');

(function(window){
  var mainApplicationModuleName = 'piuapp';

  var service = {
  	applicationModuleVendorDependencies: [
  		'ngAnimate',
  		'ngAria',
	    'ngCookies',
	    'ngMessages',
	    'ngResource',
	    'ngRoute',
	    'ngSanitize',
	    'ngTouch',
	    'ngMaterial',
      'md.data.table',
      'satellizer'
  	],
  	mainApplicationModuleName: mainApplicationModuleName,
  	registerModule: registerModule
  };
  window.ApplicationConfiguration = service;

  // window.BASE_PATH = 'https://pumpitup.herokuapp.com/api/v1.0/';
  window.BASE_PATH = 'http://localhost:8000/api/v1.0/';

  var mainApplicationModule = angular.module(service.mainApplicationModuleName,
  	service.applicationModuleVendorDependencies);

  mainApplicationModule.config(['$locationProvider',
    function($locationProvider) {
      $locationProvider.hashPrefix('!');
    }
  ]);

  if (window.location.hash === '#_=_') {
    window.location.hash = '#!';
  }

  function registerModule(moduleName, dependencies) {
  	angular.module(moduleName, dependencies || []);
  	angular.module(mainApplicationModuleName).requires.push(moduleName);
  }

  // angular.element(document).ready(function() {
  //   angular.bootstrap(document, [mainApplicationModuleName]);
  // });
})(window);

(function(app){
	'use strict';

	app.registerModule('artists');
})(ApplicationConfiguration);

(function(app){
  'use strict';

  app.registerModule('auth');
})(ApplicationConfiguration);

(function(app){
	'use strict';

	app.registerModule('channels');
}(ApplicationConfiguration));

(function(app){
	'use strict';

	app.registerModule('chartTypes');
})(ApplicationConfiguration);

(function(app){
  'use strict';

  app.registerModule('gameVersions');
})(ApplicationConfiguration);

(function(app){
	'use strict';

	app.registerModule('levels');
})(ApplicationConfiguration);

(function(app){
	app.registerModule('main');
})(ApplicationConfiguration);

(function(app){
  'use strict';

  app.registerModule('songs');
})(ApplicationConfiguration);

(function(app){
	'use strict';

	app.registerModule('stepmakers');
})(ApplicationConfiguration);

(function(app){
	'use strict';

	app.registerModule('styles');
})(ApplicationConfiguration);

(function(app){
	'use strict';

	app.registerModule('types');
})(ApplicationConfiguration);

(function () {
	'use strict';

	function routeConfig($routeProvider) {
		$routeProvider
			.when('/artists', {
				templateUrl: 'dist/views/artists/index.view.html',
				controller: 'IndexArtistsCtrl',
				controllerAs: 'vm'
			});
	}

	angular
		.module('artists')
		.config(routeConfig);

	routeConfig.$inject = ['$routeProvider'];

})();

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

})();

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
})();

(function(){
  'use strict';

  function routeConfig($routeProvider, $authProvider){
    $authProvider.loginUrl = 'api/v1.0/authenticate';

    $routeProvider
      .when('/auth', {
        templateUrl: 'dist/views/auth/auth.view.html',
        controller: 'AuthCtrl',
        controllerAs: 'vm'
      });
  }

  angular
    .module('auth')
    .config(routeConfig);

  routeConfig.$inject = ['$routeProvider', '$authProvider'];
})();

(function(){
  'use strict';

  angular
    .module('auth')
    .controller('AuthCtrl', AuthCtrl);

  AuthCtrl.$inject = ['$mdDialog', '$auth'];

  function AuthCtrl($mdDialog, $auth) {
    var vm = this;

    vm.init = function() {

    };

    vm.cancel = function() {
      $mdDialog.cancel();
    };

    vm.authenticate = function(provider) {
      $auth.login()
    };

    vm.submit = function() {
      if (vm.loginForm.$valid) {
        console.log('Formulario válido, a login', vm.user);
        $auth.login(vm.user)
          .then(function(response){
            console.info(response);
          })
          .catch(function(response){
            console.error(response);
          });
      } else {
        console.log('Formulario no válido');
      }
    };
  }

})();

(function () {
	'use strict';

	function routeConfig($routeProvider) {
		$routeProvider
			.when('/channels', {
				templateUrl: 'dist/views/channels/index.view.html',
				controller: 'IndexChannelsCtrl',
				controllerAs: 'vm'
			});
	}

	angular
		.module('channels')
		.config(routeConfig);

	routeConfig.$inject = ['$routeProvider'];

}());

(function (){
	'use strict';

	angular
		.module('channels')
		.controller('IndexChannelsCtrl', IndexChannelsCtrl);

	IndexChannelsCtrl.$inject = ['ChannelsService'];

	function IndexChannelsCtrl(ChannelsService) {
		var vm = this;
		vm.channels = [];
    vm.isLoading = true;
    vm.query = {
      limit: 10,
      page: 1,
      total: 0
    };

		vm.init = function() {
			vm.getChannels();
		};

    vm.getChannels = function() {
      ChannelsService.get({page: vm.query.page}, function(response){
        console.log(response.data);
        vm.query.total = response.totalItems;
        vm.channels = response.data;
        vm.isLoading = false;
      }, function(err){
        console.log(err);
      });
    };
	}

}());

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

(function () {
	'use strict';

	function routeConfig($routeProvider) {
		$routeProvider
			.when('/chartTypes', {
				templateUrl: 'dist/views/chartTypes/index.view.html',
				controller: 'IndexChartTypesCtrl',
				controllerAs: 'vm'
			});
	}

	angular
		.module('chartTypes')
		.config(routeConfig);

	routeConfig.$inject = ['$routeProvider'];

})();

(function (){
	'use strict';

	angular
		.module('chartTypes')
		.controller('IndexChartTypesCtrl', IndexChartTypesCtrl);

	IndexChartTypesCtrl.$inject = ['ChartTypesService'];

	function IndexChartTypesCtrl(ChartTypesService) {
		var vm = this;
		vm.chartTypes = [];
    vm.isLoading = true;
    vm.query = {
      limit: 10,
      page: 1,
      total: 0
    };

		vm.init = function() {
			vm.getChartTypes();
		};

    vm.getChartTypes = function() {
      ChartTypesService.get({page: vm.query.page}, function(response){
        console.log(response.data);
        vm.query.total = response.totalItems;
        vm.chartTypes = response.data;
        vm.isLoading = false;
      }, function(err){
        console.log(err);
      });
    };
	}

})();

(function(){
	'use strict';

	angular
		.module('chartTypes')
		.factory('ChartTypesService', ChartTypesService);

	ChartTypesService.$inject = ['$resource'];

	function ChartTypesService($resource){
		var ChartType = $resource('/api/v1.0/chartTypes/:chartType_id', {
			'chartType_id': '@id'
		}, {
			update: {
				method: 'PUT'
			}
		});

		return ChartType;
	}
})();

(function(){
  'use strict';

  angular
    .module('main')
    .controller('SidenavCtrl', SidenavCtrl);

  SidenavCtrl.$inject = ['$scope', '$timeout', '$mdSidenav', '$log', '$mdDialog'];

  function SidenavCtrl($scope, $timeout, $mdSidenav, $log, $mdDialog) {

    $scope.toggleLeft = buildDelayedToggler('left');
    $scope.toggleRight = buildToggler('right');
    $scope.isOpenRight = function(){
      return $mdSidenav('right').isOpen();
    };

    /**
     * Supplies a function that will continue to operate until the
     * time is up.
     */
    function debounce(func, wait, context) {
      var timer;

      return function debounced() {
        var context = $scope,
            args = Array.prototype.slice.call(arguments);
        $timeout.cancel(timer);
        timer = $timeout(function() {
          timer = undefined;
          func.apply(context, args);
        }, wait || 10);
      };
    }

    /**
     * Build handler to open/close a SideNav; when animation finishes
     * report completion in console
     */
    function buildDelayedToggler(navID) {
      return debounce(function() {
        // Component lookup should always be available since we are not using `ng-if`
        $mdSidenav(navID)
          .toggle()
          .then(function () {
            $log.debug("toggle " + navID + " is done");
          });
      }, 200);
    }

    function buildToggler(navID) {
      return function() {
        // Component lookup should always be available since we are not using `ng-if`
        $mdSidenav(navID)
          .toggle()
          .then(function () {
            $log.debug("toggle " + navID + " is done");
          });
      };
    }

    $scope.showSignInDialog = function(event) {
      $mdDialog.show({
        controller: 'AuthCtrl',
        controllerAs: 'vm',
        templateUrl: 'angular/auth/views/auth.view.html',
        parent: angular.element(document.body),
        targetEvent: event,
        clickOutsideToClose: true,
        locals: {

        }
      })
      .then(function(){

      }, function(){

      });
    };
  };
})();

(function () {
	'use strict';

	function routeConfig($routeProvider) {
		$routeProvider
			.when('/gameVersions', {
				templateUrl: 'dist/views/gameVersions/index.view.html',
				controller: 'IndexGameVersionsCtrl',
				controllerAs: 'vm'
			});
	}

	angular
		.module('artists')
		.config(routeConfig);

	routeConfig.$inject = ['$routeProvider'];

})();

(function (){
	'use strict';

	angular
		.module('gameVersions')
		.controller('IndexGameVersionsCtrl', IndexArtistsCtrl);

	IndexArtistsCtrl.$inject = ['GameVersionsService'];

	function IndexArtistsCtrl(ArtistsService) {
		var vm = this;
		vm.gameVersions = [];
    vm.isLoading = true;
    vm.query = {
      limit: 10,
      page: 1,
      total: 0
    };

		vm.init = function() {
			vm.getGameVersions();
		};

    vm.getGameVersions = function() {
      ArtistsService.get({page: vm.query.page}, function(response){
        vm.query.total = response.totalItems;
        vm.gameVersions = response.data;
        vm.isLoading = false;
      }, function(err){
        console.log(err);
      });
    };
	}

})();

(function(){
	'use strict';

	angular
		.module('gameVersions')
		.factory('GameVersionsService', GameVersionsService);

	GameVersionsService.$inject = ['$resource'];

	function GameVersionsService($resource){
		var GameVersion = $resource('/api/v1.0/gameVersions/:gameVersion_id', {
			'gameVersion_id': '@id'
		}, {
			update: {
				method: 'PUT'
			}
		});

		return GameVersion;
	}
})();

(function () {
	'use strict';

	function routeConfig($routeProvider) {
		$routeProvider
			.when('/levels', {
				templateUrl: 'dist/views/levels/index.view.html',
				controller: 'IndexLevelsCtrl',
				controllerAs: 'vm'
			});
	}

	angular
		.module('levels')
		.config(routeConfig);

	routeConfig.$inject = ['$routeProvider'];

})();

(function (){
	'use strict';

	angular
		.module('levels')
		.controller('IndexLevelsCtrl', IndexLevelsCtrl);

	IndexLevelsCtrl.$inject = ['LevelsService'];

	function IndexLevelsCtrl(LevelsService) {
		var vm = this;
		vm.levels = [];
    vm.isLoading = true;
    vm.query = {
      limit: 10,
      page: 1,
      total: 0
    };

		vm.init = function() {
			vm.getLevels();
		};

    vm.getLevels = function() {
      LevelsService.get({page: vm.query.page}, function(response){
        console.log(response.data);
        vm.query.total = response.totalItems;
        vm.levels = response.data;
        vm.isLoading = false;
      }, function(err){
        console.log(err);
      });
    };
	}

})();

(function(){
	'use strict';

	angular
		.module('levels')
		.factory('LevelsService', LevelsService);

	LevelsService.$inject = ['$resource'];

	function LevelsService($resource){
		var Level = $resource('/api/v1.0/levels/:level_id', {
			'level_id': '@id'
		}, {
			update: {
				method: 'PUT'
			}
		});

		return Level;
	}
})();

(function(){
	'use strict';

	function routeConfig($routeProvider) {
		$routeProvider
			.when('/', {
				templateUrl: 'dist/views/main/index.view.html',
				controller: 'MainCtrl',
				controllerAs: 'vm'
			});
	}

	angular
		.module('main')
		.config(routeConfig);

	routeConfig.$inject = ['$routeProvider'];
})();

(function(){
	'use strict';
	angular
		.module('main')
		.controller('MainCtrl', MainCtrl);

	MainCtrl.$inject = ['$http'];

	function MainCtrl($http){
		var vm = this;
		vm.apiSource = window.BASE_PATH + 'songs';
		vm.result;

		vm.init = function(){

		};

		vm.search = function() {
      $http.get(vm.apiSource).then(function(response){
        vm.result = response.data;
			}).catch(function(err){

			});
		};
	}

})();


(function(){
  'use strict';

  function routeConfig($routeProvider) {
    $routeProvider
      .when('/songs', {
        templateUrl: 'dist/views/songs/index.view.html',
        controller: 'IndexSongsCtrl',
        controllerAs: 'vm'
      })
      .when('/songs/:songId', {
        templateUrl: 'dist/views/songs/show.view.html',
        controller: 'ShowSongCtrl',
        controllerAs: 'vm',
        resolve: {
          song: getSong
        }
      });
  }

  angular
    .module('songs')
    .config(routeConfig);

  routeConfig.$inject = ['$routeProvider'];

  getSong.$inject = ['$route', 'SongsService'];

  function getSong($route, SongsService) {
    console.log($route.current.params.songId);
    return SongsService.get({song_id: $route.current.params.songId}).$promise;
  }

})();

(function(){
  'use strict';

  angular
    .module('songs')
    .controller('IndexSongsCtrl', IndexSongsCtrl);

    IndexSongsCtrl.$inject = ['SongsService'];

    function IndexSongsCtrl(SongsService) {
      var vm = this;
      vm.songs = [];
      vm.isLoading = true;
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
          console.log(response);
          console.log(vm.query);
          vm.query.total = response.totalItems;
          vm.songs = response.data;
          vm.isLoading = false;
        }, function(err){
          console.log(err);
        });
      };
    }
})();

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

(function(){
  'use strict';

  angular
    .module('songs')
    .factory('SongsService', SongsService);

  SongsService.$inject = ['$resource'];

  function SongsService($resource){
    var Song = $resource('/api/v1.0/songs/:song_id', {
      'song_id': '@id'
    }, {
      update: {
        methd: 'PUT'
      }
    });

    return Song;
  }
})();

(function () {
	'use strict';

	function routeConfig($routeProvider) {
		$routeProvider
			.when('/stepmakers', {
				templateUrl: 'dist/views/stepmakers/index.view.html',
				controller: 'IndexStepmakersCtrl',
				controllerAs: 'vm'
			});
	}

	angular
		.module('stepmakers')
		.config(routeConfig);

	routeConfig.$inject = ['$routeProvider'];

})();

(function (){
	'use strict';

	angular
		.module('stepmakers')
		.controller('IndexStepmakersCtrl', IndexStepmakersCtrl);

	IndexStepmakersCtrl.$inject = ['StepmakersService'];

	function IndexStepmakersCtrl(StepmakersService) {
		var vm = this;
		vm.stepmakers = [];
    vm.isLoading = true;
    vm.query = {
      limit: 10,
      page: 1,
      total: 0
    };

		vm.init = function() {
			vm.getStepmakers();
		};

    vm.getStepmakers = function() {
      StepmakersService.get({page: vm.query.page}, function(response){
        vm.query.total = response.totalItems;
        vm.stepmakers = response.data;
        vm.isLoading = false;
      }, function(err){
        console.log(err);
      });
    };
	}

})();

(function(){
	'use strict';

	angular
		.module('stepmakers')
		.factory('StepmakersService', StepmakersService);

	StepmakersService.$inject = ['$resource'];

	function StepmakersService($resource){
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

(function () {
	'use strict';

	function routeConfig($routeProvider) {
		$routeProvider
			.when('/styles', {
				templateUrl: 'dist/views/styles/index.view.html',
				controller: 'IndexStylesCtrl',
				controllerAs: 'vm'
			});
	}

	angular
		.module('styles')
		.config(routeConfig);

	routeConfig.$inject = ['$routeProvider'];

})();

(function (){
	'use strict';

	angular
		.module('styles')
		.controller('IndexStylesCtrl', IndexStylesCtrl);

	IndexStylesCtrl.$inject = ['StylesService'];

	function IndexStylesCtrl(StylesService) {
		var vm = this;
		vm.styles = [];
    vm.isLoading = true;
    vm.query = {
      limit: 10,
      page: 1,
      total: 0
    };

		vm.init = function() {
			vm.getStyles();
		};

    vm.getStyles = function() {
      StylesService.get({page: vm.query.page}, function(response){
        vm.query.total = response.totalItems;
        vm.styles = response.data;
        vm.isLoading = false;
      }, function(err){
        console.log(err);
      });
    };
	}

})();

(function(){
	'use strict';

	angular
		.module('styles')
		.factory('StylesService', StylesService);

	StylesService.$inject = ['$resource'];

	function StylesService($resource){
		var Style = $resource('/api/v1.0/styles/:style_id', {
			'style_id': '@id'
		}, {
			update: {
				method: 'PUT'
			}
		});

		return Style;
	}
})();

(function () {
	'use strict';

	function routeConfig($routeProvider) {
		$routeProvider
			.when('/types', {
				templateUrl: 'dist/views/types/index.view.html',
				controller: 'IndexTypesCtrl',
				controllerAs: 'vm'
			});
	}

	angular
		.module('types')
		.config(routeConfig);

	routeConfig.$inject = ['$routeProvider'];

})();

(function (){
	'use strict';

	angular
		.module('types')
		.controller('IndexTypesCtrl', IndexTypesCtrl);

	IndexTypesCtrl.$inject = ['TypesService'];

	function IndexTypesCtrl(TypesService) {
		var vm = this;
		vm.types = [];
    vm.isLoading = true;
    vm.query = {
      limit: 10,
      page: 1,
      total: 0
    };

		vm.init = function() {
			vm.getTypes();
		};

    vm.getTypes = function() {
      TypesService.get({page: vm.query.page}, function(response){
        vm.query.total = response.totalItems;
        vm.types = response.data;
        vm.isLoading = false;
      }, function(err){
        console.log(err);
      });
    };
	}

})();

(function(){
	'use strict';

	angular
		.module('types')
		.factory('TypesService', TypesService);

	TypesService.$inject = ['$resource'];

	function TypesService($resource){
		var Type = $resource('/api/v1.0/types/:type_id', {
			'type_id': '@id'
		}, {
			update: {
				method: 'PUT'
			}
		});

		return Type;
	}
})();
