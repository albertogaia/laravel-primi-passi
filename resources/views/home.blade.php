<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Primi passi</title>
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
                <a href="https://laracasts.com">Chi siamo</a>
                <a href="https://laravel-news.com">Contatti</a>
                <a href="https://blog.laravel.com">Blog</a>
            </div>
        </div>
        <main>
            <h1>Ciao booleani!</h1>
            <p>I linguaggi di markup studiati in Boolean sono:</p>
            <ul>
                @foreach ($linguaggi as $item)
                    <li>{{ $item }}</li>
                @endforeach
            </ul>
            <p>I linguaggi di programmazione studiati in Boolean sono:</p>
            <ul>
                @foreach ($programmazione as $item)
                    <li>{{ $item }}</li>
                @endforeach
            </ul>
            <p>I frameworks studiati in Boolean sono:</p>
            <ul>
                @foreach ($frameworks as $item)
                    <li>{{ $item }}</li>
                @endforeach
            </ul>
        </main>
    </body>

</html>
