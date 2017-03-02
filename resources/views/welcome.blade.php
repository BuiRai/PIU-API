<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        {{--<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">--}}
        <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('plugins/materialize/css/materialize.css')  }}">
        <link rel="stylesheet" href="{{ asset('css/styles.css')  }}">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    </head>
    <body ng-app="app">
        <nav>
            <div class="nav-wrapper green">
                <a href="#" class="brand-logo">Logo</a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="sass.html">Sass</a></li>
                    <li><a href="badges.html">Components</a></li>
                    <li><a href="collapsible.html">JavaScript</a></li>
                </ul>
            </div>
        </nav>
        <div class="row">
            <div class="col-s12 m6">
                <header class="header">
                    <h1>PIU - API</h1>
                    <h2 class="folw-text">The RESTful Pump It Up API</h2>
                    <p>Version Alpha.</p>
                </header>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <form class="input-field col s12">

                    <div class="row">
                        <div class="input-field col s5">
                            <input type="text" value="https://pumpitup.herokuapp.com/api/v1.0/">
                            {{--<span class="new badge" data-badge-caption="custom caption">https://pumpitup.herokuapp.com/api/v1.0</span>--}}
                        </div>
                        <div class="input-field col s4">
                            <input id="icon_prefix" type="text" class="validate">
                            <label for="icon_prefix">Resource</label>
                        </div>
                        <div class="input-field col s2">
                            <button class="waves-effect waves-light btn">Search</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>
