<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        {{--<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">--}}
        <link href='https://fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

        <!-- FontAwesome -->
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

        <!-- mdtable -->
        <link rel="stylesheet" href="{{ URL::asset('vendor/angular-material-data-table/dist/md-data-table.min.css') }}">

        <!-- Styles -->
        <!-- <link rel="stylesheet" href="{{ asset('plugins/materialize/css/materialize.css')  }}"> -->
        <link rel="stylesheet" href="{{ URL::asset('css/app.css')  }}">
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/angular_material/1.1.0/angular-material.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    </head>
    <body ng-app="piuapp">
        <div layout="column">
            <md-toolbar class="green">
                <!-- <div layout="row"> -->
                   <!--  <md-toolbar-filler layout layout-align="center center">
                        <md-icon md-svg-icon="call:chat"></md-icon>
                    </md-toolbar-filler> -->
                    <div class="md-toolbar-tools">
                        <h2 md-truncate flex>PIU</h2>
                        <menu-bar>
                            <md-button ng-href="/#!" md-menu-origin>Home</md-button>
                            <md-button ng-href="/#!/songs" md-menu-origin>Songs</md-button>
                            <md-button ng-href="/#!/levels" md-menu-origin>Levels</md-button>
                            <md-menu>
                                <md-button md-menu-origin ng-click="$mdOpenMenu()">Extras</md-button>
                                <md-menu-content>
                                    <md-menu-item>
                                            <md-button ng-href="/#!/artists">Artists</md-button>
                                    </md-menu-item>
                                    <md-menu-item>
                                            <md-button ng-href="/#!/stepmakers">Stepmakers</md-button>
                                    </md-menu-item>
                                    <md-menu-item>
                                            <md-button ng-href="/#!/styles">Styles</md-button>
                                    </md-menu-item>
                                    <md-menu-item>
                                            <md-button ng-href="/#!/gameVersions">Game Versions</md-button>
                                    </md-menu-item>
                                </md-menu-content>
                            </md-menu>
                        </menu-bar>
                    </div>
                <!-- </div> -->
                <md-divider></md-divider>


            </md-toolbar>
        </div>

        <div>
                    <header class="header">
                        <h1>PIU - API</h1>
                        <h2>The RESTful Pump It Up API</h2>
                        <p>Version Alpha.</p>
                    </header>
                </div>
                <md-content flex layout-padding>
                    <div ng-view=""></div>
                </md-content>

        <footer class="green-dark footer">
            <div layout="row" layout-align="center center">
                <a href="https://github.com/BuiRai/PIU-API">
                  <i class="fa fa-github" aria-hidden="true"></i>
                  GitHub
                </a>
            </div>
        </footer>

        <!-- Scripts -->
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular-animate.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular-aria.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.6.2/angular-cookies.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular-messages.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.6.2/angular-resource.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.6.2/angular-route.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.6.2/angular-sanitize.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.6.2/angular-touch.js"></script>
        <!-- Angular Material Library -->
        <script src="https://ajax.googleapis.com/ajax/libs/angular_material/1.1.0/angular-material.min.js"></script>

        <!-- Bower components -->
        <script src="{{ URL::asset('vendor/angular-material-data-table/dist/md-data-table.min.js') }}"></script>

        <!-- Main -->
        <script src="{{ URL::asset('angular/app.js') }}"></script>
        <script src="{{ URL::asset('angular/main/main.module.js') }}"></script>
        <script src="{{ URL::asset('angular/main/config/main.config.js') }}"></script>
        <script src="{{ URL::asset('angular/main/controllers/main.controller.js') }}"></script>
        <!-- Artists -->
        <script src="{{ URL::asset('angular/artists/artists.module.js') }}"></script>
        <script src="{{ URL::asset('angular/artists/config/artists.routes.js') }}"></script>
        <script src="{{ URL::asset('angular/artists/services/artists.service.js') }}"></script>
        <script src="{{ URL::asset('angular/artists/controllers/index.controller.js') }}"></script>
        <!-- Songs -->
        <script src="{{ URL::asset('angular/songs/songs.module.js') }}"></script>
        <script src="{{ URL::asset('angular/songs/config/songs.routes.js') }}"></script>
        <script src="{{ URL::asset('angular/songs/services/songs.service.js') }}"></script>
        <script src="{{ URL::asset('angular/songs/controllers/index.controller.js') }}"></script>

    </body>
</html>
