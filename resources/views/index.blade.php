<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href='https://fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

        <!-- FontAwesome -->
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

        <!-- mdtable -->
        <!-- <link rel="stylesheet" href="{{ URL::asset('vendor/angular-material-data-table/dist/md-data-table.min.css') }}"> -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/angular-material-data-table/0.10.10/md-data-table.min.css">

        <!-- Styles -->
        <!-- <link rel="stylesheet" href="{{ asset('plugins/materialize/css/materialize.css')  }}"> -->
        <link rel="stylesheet" href="{{ URL::asset('css/app.css')  }}">
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/angular_material/1.1.0/angular-material.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    </head>
    <body ng-app="piuapp">

        <div ng-controller="SidenavCtrl" layout="column" ng-cloak>
            <section layout="row" flex>
                <md-sidenav
                    class="md-sidenav-left"
                    md-component-id="left"
                    md-is-locked-open="$mdMedia('gt-sm')"
                    md-whiteframe="4">
                    <md-toolbar class="md-theme-indigo green">
                        <h1 class="md-toolbar-tools">Sidenav Left</h1>
                    </md-toolbar>
                    <md-content>
                        <section>
                            <md-list>
                                <md-subheader class="md-no-sticky">Main resources</md-subheader>
                                <md-list-item ng-href="/#!/songs">
                                    <md-icon class="material-icon">music_note</md-icon>
                                    <p>Songs</p>
                                </md-list-item>
                                <md-list-item ng-href="/#!/levels">
                                    <md-icon class="material-icon">trending_up</md-icon>
                                    <p>Levels</p>
                                </md-list-item>
                                <md-divider></md-divider>
                                <md-subheader class="md-no-sticky">Secondary resources</md-subheader>
                                <md-list-item ng-href="/#!/artists">
                                    <md-icon class="material-icon">account_circle</md-icon>
                                    <p>Artists</p>
                                </md-list-item>
                                <md-list-item ng-href="/#!/stepmakers">
                                    <md-icon class="material-icon">account_box</md-icon>
                                    <p>Stepmakers</p>
                                </md-list-item>
                                <md-list-item ng-href="/#!/gameVersions">
                                    <md-icon class="material-icon">zoom_out_map</md-icon>
                                    <p>Game Versions</p>
                                </md-list-item>
                                <md-list-item ng-href="/#!/channels">
                                    <md-icon class="material-icon">video_label</md-icon>
                                    <p>Channels</p>
                                </md-list-item>
                                <md-divider></md-divider>
                                <md-subheader class="md-no-sticky">Extras</md-subheader>
                                <md-list-item ng-href="/#!/types">
                                    <md-icon class="material-icon">apps</md-icon>
                                    <p>Song Types</p>
                                </md-list-item>
                                <md-list-item ng-href="/#!/chartTypes">
                                    <md-icon class="material-icon">apps</md-icon>
                                    <p>Chart Types</p>
                                </md-list-item>
                                <md-list-item ng-href="/#!/styles">
                                    <md-icon class="material-icon">apps</md-icon>
                                    <p>Styles</p>
                                </md-list-item>
                            </md-list>
                        </section>
                    </md-content>
                </md-sidenav>
                <md-content flex>
                    <md-toolbar class="green">
                        <div class="md-toolbar-tools">
                            <md-button ng-click="toggleLeft()" hide-gt-sm>
                                <md-icon class="material-icon">menu</md-icon>
                            </md-button>
                            <h2 md-truncate flex>PIU</h2>
                            <md-menu>
                                <md-button class="md-icon-button" aria-label="Favorite" ng-click="$mdOpenMenu()">
                                    <md-icon class="material-icon">more_vert</md-icon>
                                </md-button>
                                <md-menu-content>
                                    <md-menu-item>
                                        <md-button class="md-raised">
                                            <i class="fa fa-sign-in fa-2x" aria-hidden="true"></i>
                                            <span style="margin-left:1.5em;margin-right: 1.5em;">Sign Up</span>
                                        </md-button>
                                    </md-menu-item>
                                    <md-menu-item>
                                        <md-button class="md-raised" ng-click="showSignInDialog($event)">
                                            <i class="fa fa-sign-in fa-2x" aria-hidden="true"></i>
                                            <span style="margin-left:1.5em;margin-right: 1.5em;">Sign In</span>
                                        </md-button>
                                    </md-menu-item>
                                    <md-menu-item>
                                        <md-button class="md-raised" ng-click="logout()">
                                            <i class="fa fa-sign-out fa-2x" aria-hidden="true"></i>
                                            <span style="margin-left:1.5em;margin-right: 1.5em;">Sign Out</span>
                                        </md-button>
                                    </md-menu-item>
                                </md-menu-content>
                            </md-menu>
                        </div>
                    </md-toolbar>
                    <header class="header">
                        <h1>PIU - API</h1>
                        <h2>The RESTful Pump It Up API</h2>
                        <p>Version Alpha.</p>
                    </header>
                    <div layout-padding ng-view=""></div>
              </md-content>
            </section>
        </div>

        <!-- Scripts -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.6.3/angular.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.6.3/angular-animate.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.6.3/angular-aria.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.6.3/angular-cookies.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.6.3/angular-messages.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.6.3/angular-resource.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.6.3/angular-route.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.6.3/angular-sanitize.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.6.3/angular-touch.min.js"></script>
        <!-- Angular Material Library -->
        <script src="https://ajax.googleapis.com/ajax/libs/angular_material/1.1.0/angular-material.min.js"></script>

        <!-- Bower components -->
        <!-- <script src="{{ URL::asset('vendor/angular-material-data-table/dist/md-data-table.min.js') }}"></script> -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/angular-material-data-table/0.10.10/md-data-table.min.js"></script>
        <script src="https://cdn.jsdelivr.net/satellizer/0.15.5/satellizer.min.js"></script>
        <script src="https://cdn.jsdelivr.net/satellizer/0.15.5/satellizer.min.js"></script>

        <!-- Main -->
        <script src="{{ URL::asset('angular/app.js') }}"></script>
        <script src="{{ URL::asset('angular/main/main.module.js') }}"></script>
        <script src="{{ URL::asset('angular/main/config/main.config.js') }}"></script>
        <script src="{{ URL::asset('angular/main/controllers/main.controller.js') }}"></script>
        <!-- Core -->
        <script src="{{ URL::asset('angular/core/controllers/sidebar.controller.js') }}"></script>
        <!-- Artists -->
        <script src="{{ URL::asset('angular/artists/artists.module.js') }}"></script>
        <script src="{{ URL::asset('angular/artists/config/artists.routes.js') }}"></script>
        <script src="{{ URL::asset('angular/artists/services/artists.service.js') }}"></script>
        <script src="{{ URL::asset('angular/artists/controllers/index.controller.js') }}"></script>
        <!-- Auth -->
        <script src="{{ URL::asset('angular/auth/auth.module.js') }}"></script>
        <script src="{{ URL::asset('angular/auth/config/auth.config.js') }}"></script>
        <script src="{{ URL::asset('angular/auth/config/auth.routes.js') }}"></script>
        <script src="{{ URL::asset('angular/auth/controllers/auth.controller.js') }}"></script>
        <!-- Channels -->
        <script src="{{ URL::asset('angular/channels/channels.module.js') }}"></script>
        <script src="{{ URL::asset('angular/channels/config/channels.routes.js') }}"></script>
        <script src="{{ URL::asset('angular/channels/services/channels.service.js') }}"></script>
        <script src="{{ URL::asset('angular/channels/controllers/index.controller.js') }}"></script>
        <!-- Chart Types -->
        <script src="{{ URL::asset('angular/chartTypes/chartTypes.module.js') }}"></script>
        <script src="{{ URL::asset('angular/chartTypes/config/chartTypes.routes.js') }}"></script>
        <script src="{{ URL::asset('angular/chartTypes/services/chartTypes.service.js') }}"></script>
        <script src="{{ URL::asset('angular/chartTypes/controllers/index.controller.js') }}"></script>
        <!-- Game Versions -->
        <script src="{{ URL::asset('angular/gameVersions/gameVersions.module.js') }}"></script>
        <script src="{{ URL::asset('angular/gameVersions/config/gameVersions.routes.js') }}"></script>
        <script src="{{ URL::asset('angular/gameVersions/services/gameVersions.service.js') }}"></script>
        <script src="{{ URL::asset('angular/gameVersions/controllers/index.controller.js') }}"></script>
        <!-- Levels -->
        <script src="{{ URL::asset('angular/levels/levels.module.js') }}"></script>
        <script src="{{ URL::asset('angular/levels/config/levels.routes.js') }}"></script>
        <script src="{{ URL::asset('angular/levels/services/levels.service.js') }}"></script>
        <script src="{{ URL::asset('angular/levels/controllers/index.controller.js') }}"></script>
        <!-- Songs -->
        <script src="{{ URL::asset('angular/songs/songs.module.js') }}"></script>
        <script src="{{ URL::asset('angular/songs/config/songs.routes.js') }}"></script>
        <script src="{{ URL::asset('angular/songs/services/songs.service.js') }}"></script>
        <script src="{{ URL::asset('angular/songs/controllers/index.controller.js') }}"></script>
        <script src="{{ URL::asset('angular/songs/controllers/show.controller.js') }}"></script>
        <!-- Stepmakers -->
        <script src="{{ URL::asset('angular/stepmakers/stepmakers.module.js') }}"></script>
        <script src="{{ URL::asset('angular/stepmakers/config/stepmakers.routes.js') }}"></script>
        <script src="{{ URL::asset('angular/stepmakers/services/stepmakers.service.js') }}"></script>
        <script src="{{ URL::asset('angular/stepmakers/controllers/index.controller.js') }}"></script>
        <!-- Styles -->
        <script src="{{ URL::asset('angular/styles/styles.module.js') }}"></script>
        <script src="{{ URL::asset('angular/styles/config/styles.routes.js') }}"></script>
        <script src="{{ URL::asset('angular/styles/services/styles.service.js') }}"></script>
        <script src="{{ URL::asset('angular/styles/controllers/index.controller.js') }}"></script>
        <!-- Types -->
        <script src="{{ URL::asset('angular/types/types.module.js') }}"></script>
        <script src="{{ URL::asset('angular/types/config/types.routes.js') }}"></script>
        <script src="{{ URL::asset('angular/types/services/types.service.js') }}"></script>
        <script src="{{ URL::asset('angular/types/controllers/index.controller.js') }}"></script>

    </body>
</html>
