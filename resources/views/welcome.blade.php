<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

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
