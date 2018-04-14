<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

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
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            h1{

                text-align: center;
            }

            .tabla-productos{
                border: 1px solid #000;
                border-collapse: collapse;
            }

            .tabla-productos td, th{
                border: 1px solid #000;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <h1>{{ $name }}</h1>
        <br>
        <h2>Buscador:</h2>
        <form action="" method="GET">
            <label>Nombre: </label><input type="text" name="nombre" placeholder="Nombre"><br>
            <label>Precio mayor a: </label><input type="text" name="pMayor"><br>
            <input type="submit" value="Buscar">
        </form>
        <a href="/listado"><button>Restablecer busqueda</button></a>
        <br>
        <br>

        <table class="tabla-productos">
            <tr>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Stock</th>
            </tr>
            @foreach ($productos as $cuenta)
                <tr>
                    <td>{{ $cuenta->nombre }}</td>
                    <td>{{ $cuenta->precio }}</td>
                    <td>{{ $cuenta->stock }}</td>
                </tr>
            @endforeach
        </table>

    </body>
</html>
