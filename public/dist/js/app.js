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
      'satellizer',
      'ngStorage'
  	],
  	mainApplicationModuleName: mainApplicationModuleName,
  	registerModule: registerModule
  };
  window.ApplicationConfiguration = service;

  window.BASE_PATH = 'https://pumpitup.herokuapp.com/api/v1.0/';
  // window.BASE_PATH = 'http://localhost:8000/api/v1.0/';

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

	app.registerModule('types');
})(ApplicationConfiguration);

(function(app){
	'use strict';

	app.registerModule('styles');
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

	IndexArtistsCtrl.$inject = ['Artist'];

	function IndexArtistsCtrl(Artist) {
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
      Artist.get({page: vm.query.page}, function(response){
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

(function(){
  'use strict';

  function routeConfig($authProvider){
    $authProvider.loginUrl = 'api/v1.0/authenticate';
    $authProvider.signupUrl = '/api/v1.0/signup';
    $authProvider.tokenPrefix = 'PIU';

    // If need some provider, add below please
    // More info on: https://github.com/sahat/satellizer
  }

  angular
    .module('auth')
    .config(routeConfig);

  routeConfig.$inject = ['$authProvider'];
}());

(function(){
  'use strict';

  function routeConfig($routeProvider){

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

  AuthCtrl.$inject = ['$mdDialog', '$auth', '$location', '$rootScope', '$localStorage'];

  function AuthCtrl($mdDialog, $auth, $location, $rootScope, $localStorage) {
    var vm = this;
    vm.user = {};

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
        $auth.login(vm.user)
          .then(function(response){
            console.log(response.data.user);
            $localStorage.user = response.data.user;
            $rootScope.user = response.data.user;
            console.log('root:', $rootScope.user);
            vm.cancel();
            $location.path('/songs');
          })
          .catch(function(response){
            console.error('Error papu: ', response.data);
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

	IndexChannelsCtrl.$inject = ['Channel'];

	function IndexChannelsCtrl(Channel) {
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
      Channel.get({page: vm.query.page}, function(response){
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

(function(){
  'use strict';

  angular
    .module('main')
    .controller('SidenavCtrl', SidenavCtrl);

  SidenavCtrl.$inject = [
    '$scope',
    '$timeout',
    '$mdSidenav',
    '$log',
    '$location',
    '$auth',
    '$mdDialog',
    '$rootScope',
    '$localStorage'
  ];

  function SidenavCtrl($scope, $timeout, $mdSidenav, $log, $location, $auth, $mdDialog, $rootScope, $localStorage) {
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
        templateUrl: 'dist/views/auth/auth.view.html',
        parent: angular.element(document.body),
        targetEvent: event,
        clickOutsideToClose: true,
        locals: {}
      })
      .then(function(){

      }, function(){

      });
    };

    $scope.logout = function() {
      console.info('Logout!!');
      $auth.logout().then(function(){
        delete $localStorage.user;
        $rootScope.user = null;
        $location.path('/');
      });
    };
  };
})();

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

	IndexChartTypesCtrl.$inject = ['ChartType'];

	function IndexChartTypesCtrl(ChartType) {
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
      ChartType.get({page: vm.query.page}, function(response){
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
		.factory('ChartType', ChartType);

	ChartType.$inject = ['$resource'];

	function ChartType($resource){
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

	IndexArtistsCtrl.$inject = ['GameVersion'];

	function IndexArtistsCtrl(GameVersion) {
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
      GameVersion.get({page: vm.query.page}, function(response){
        vm.query.total = response.totalItems;
        vm.gameVersions = response.data;
        vm.isLoading = false;
      }, function(err){
        console.log(err);
      });
    };
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

(function(){
	'use strict';

	angular
		.module('gameVersions')
		.factory('GameVersion', GameVersion);

	GameVersion.$inject = ['$resource'];

	function GameVersion($resource){
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

(function (){
	'use strict';

	angular
		.module('levels')
		.controller('IndexLevelsCtrl', IndexLevelsCtrl);

	IndexLevelsCtrl.$inject = ['Level'];

	function IndexLevelsCtrl(Level) {
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
      Level.get({page: vm.query.page}, function(response){
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
		.factory('Level', Level);

	Level.$inject = ['$resource'];

	function Level($resource){
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

  getSong.$inject = ['$route', 'Song'];

  function getSong($route, Song) {
    console.log($route.current.params.songId);
    return Song.get({song_id: $route.current.params.songId}).$promise;
  }

})();

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

(function(){
  'use strict';

  angular
    .module('songs')
    .controller('ShowSongCtrl', ShowSongCtrl);

    ShowSongCtrl.$inject = ['Song', 'ChartType',  'Stepmaker', 'Style', '$routeParams', 'Level', 'song', '$q', '$mdToast'];

    function ShowSongCtrl(Song, ChartType, Stepmaker, Style, $routeParams, Level, song, $q, $mdToast) {
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
        Stepmaker.get(function(response){
          deferred.resolve(response.data);
        }, function(err){
          deferred.reject(err);
        });
        return deferred.promise;
      };

      vm.getStyles = function(){
        var deferred = $q.defer();
        Style.get(function(response){
          deferred.resolve(response.data);
        }, function(err){
          deferred.reject(err);
        });
        return deferred.promise;
      };

      vm.getChartTypes = function(){
        var deferred = $q.defer();
        ChartType.get(function(response){
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
          Level.save(vm.level, function(response){
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
    .factory('Song', Song);

  Song.$inject = ['$resource'];

  function Song($resource){
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

	IndexStepmakersCtrl.$inject = ['Stepmaker'];

	function IndexStepmakersCtrl(Stepmaker) {
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
      Stepmaker.get({page: vm.query.page}, function(response){
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

	IndexTypesCtrl.$inject = ['TypeSong'];

	function IndexTypesCtrl(TypeSong) {
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
      TypeSong.get({page: vm.query.page}, function(response){
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
		.factory('TypeSong', TypeSong);

	TypeSong.$inject = ['$resource'];

	function TypeSong($resource){
		var Type = $resource('/api/v1.0/typesSongs/:type_id', {
			'type_id': '@id'
		}, {
			update: {
				method: 'PUT'
			}
		});

		return Type;
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

	IndexStylesCtrl.$inject = ['Style'];

	function IndexStylesCtrl(Style) {
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
      Style.get({page: vm.query.page}, function(response){
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
		.factory('Style', Style);

	Style.$inject = ['$resource'];

	function Style($resource){
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
