<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Nuestra Polla</title>
        <link rel="stylesheet" href="css/app.mat.css"> 
        <link rel="stylesheet" href="css/fuentes.css">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
        <!-- Styles -->
    </head>
    <body>
    <div id="app">
        <app></app>
    </div> 

    <script src="js/app.js"></script>

@if(config('app.env') == 'local')
  <script src="http://jaime.co:35729/livereload.js"></script>
@endif
    
    </body>
</html>
