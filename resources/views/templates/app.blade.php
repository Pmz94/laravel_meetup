<!--  resources/views/templates/app.blade.php -->
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>CRUD en Laravel</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <h1 class="page-header text-center"><strong>Meetup de QuantumBit</strong></h1>
            </div>
            @yield('content')
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>