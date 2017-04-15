(function(){
  'use strict';

  angular
    .module('auth')
    .controller('AuthCtrl', AuthCtrl);

  AuthCtrl.$inject = ['$mdDialog', '$auth', '$location'];

  function AuthCtrl($mdDialog, $auth, $location) {
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
        $auth.login(vm.user)
          .then(function(response){
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

}());
