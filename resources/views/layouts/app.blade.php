    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Cooking Talks - Comparte tu amor por la cocina</title>

        <!-- Styles -->
        <!--<link href="/css/app.css" rel="stylesheet">-->
        <link href="/css/loginEstilo.css" rel="stylesheet">


        <!-- Scripts -->
        <script src="https://unpkg.com/vue/dist/vue.js"></script>
        <script>
            window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
            ]); ?>
        </script>
    </head>
    <body>
        <div id="app">
            @yield('content')
        </div>

        <!-- Scripts -->
        <script src="/js/app.js"></script>
    </body>
    </html>
