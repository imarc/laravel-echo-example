<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <title>Echo Example</title>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                width: 100vw;
                margin: 0;
            }

            body {
                padding: 100px 0;
            }

            .container {
                width: 500px;
                margin: 0 auto;
            }

            .container > * {
                text-align: center;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <h1>Laravel Echo</h1>

            <div id="app">
                <button @click="broadcast">Trigger An Echo Event</button>

                <p v-for="message in messages" v-text="message"></p>
            </div>
        </div>



        <script>
            window.echoConfig = {
                host: {!! json_encode(env('ECHO_HOST')) !!},
                port: {!! json_encode(env('ECHO_PORT')) !!}
            };
        </script>

        <!-- Scripts -->
        <script src="//{{ env('ECHO_HOST') }}/socket.io/socket.io.js"></script>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
