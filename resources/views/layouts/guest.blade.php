<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700'>
        <link href='https://fonts.googleapis.com/css?family=Lato:400,300,300italic,400italic,700,700italic' rel='stylesheet'
            type='text/css'>
        <!-- Scripts -->
        <link rel="shortcut icon" href={{asset("public/assets/landingpage/pics/sec-logo.png")}} type="image/x-icon">

    <!-- -------------- CSS - theme -------------- -->
    <link rel="stylesheet" type="text/css" href={{asset('public/assets/skin/default_skin/css/theme.css')}}>

    <!-- -------------- CSS - allcp forms -------------- -->
    <link rel="stylesheet" type="text/css" href={{asset("public/assets/allcp/forms/css/forms.css")}}>



        {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
    </head>
    <body class="utility-page sb-l-c sb-r-c">

        <div id="main" class="animated fadeIn">
                {{ $slot }}
        </div>


        <script src={{asset("public/assets/js/jquery/jquery-1.11.3.min.js")}}></script>
        <script src={{asset("public/assets/js/jquery/jquery_ui/jquery-ui.min.js")}}></script>

        <!-- -------------- CanvasBG JS -------------- -->
        <script src={{asset("public/assets/js/plugins/canvasbg/canvasbg.js")}}></script>

        <!-- -------------- Theme Scripts -------------- -->
        <script src={{asset("public/assets/js/utility/utility.js")}}></script>
        <script src={{asset("public/assets/js/demo/demo.js")}}></script>
        <script src={{asset("public/assets/js/main.js")}}></script>

        <!-- -------------- Page JS -------------- -->
        <script type="text/javascript">
            jQuery(document).ready(function() {

                "use strict";

                // Init Theme Core
                Core.init();

                // Init Demo JS
                Demo.init();

                // Init CanvasBG
                CanvasBG.init({
                    Loc: {
                        x: window.innerWidth / 5,
                        y: window.innerHeight / 10
                    }
                });

            });
        </script>

        <!-- -------------- /Scripts -------------- -->

    </body>
</html>
