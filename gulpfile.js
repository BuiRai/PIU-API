var elixir = require('laravel-elixir');

elixir(function(mix) {

    // Application Scripts
    mix.scripts([
        '../../../resources/scripts/app.js'
    ], 'public/js/app.js');

});