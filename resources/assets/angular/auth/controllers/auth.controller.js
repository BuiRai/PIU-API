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
