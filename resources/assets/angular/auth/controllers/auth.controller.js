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
