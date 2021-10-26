<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Contatti</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class="content">
            <div>
                <h3>Primi passi</h3>
            </div>

            <div>
                <a href="{{ route ('homepage')}}">Homepage</a>
                <a href="{{ route ('about')}}">Chi siamo</a>
                <a href="{{ route ('contact')}}">Contatti</a>
                <a href="{{ route ('blog')}}">Blog</a>
            </div>
        </div>
        <main>
            <h1>PAGINA CONTATTI</h1>
            <p>Insert content here -- CONTATTI --</p>
        </main>
    </body>

</html>
