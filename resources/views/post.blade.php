<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
        <title>Detalles del Estreno</title>
    </head>
    <body>
        <header>
            <h2>detalles</h2>
        </header>
        <nav>
            <ul>
            <li><a href="/">Home</a></li>
            <li><a href="{{ asset('/newpost') }}">New Movie</a></li>
            </ul>
        </nav>    
        <section>
            <div class="pelicula">
                <div id="cover" class="pelicula">
                    <img src="../storage/public/covers/{!! $pelicula->cover_name !!}" alt="{!! $pelicula->title !!}">
                </div>
                <div id="titulo" class="pelicula">
                    <p>{!! $pelicula->title !!}</p>
                </div>
                <div id="descripcion" class="pelicula">
                    <p>{!! $pelicula->description !!}</p>
                </div>
            </div>
        </section>
    </body>
</html>