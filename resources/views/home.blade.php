<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
        <title>Nuevos Estrenos</title>
    </head>
    <body>
        <header>
            <h2>peliculas</h2>
        </header>
        <nav>
            <ul>
            <li><a href="/">Home</a></li>
            <li><a href="{{ asset('/newpost') }}">New Movie</a></li>
            </ul>
        </nav>    
        <section>
            @if ($peliculas->isEmpty())
                <div class="errores">
                    <p>No hay peliculas cargadas</p>
                </div>
            @else
                @foreach($peliculas as $pelicula)
                    <div class="pelicula">
                        <div class="cover">
                            <a href="post/{!! $pelicula->id !!}">
                                <img src="storage/public/covers/{!! $pelicula->cover_name !!}" alt="{!! $pelicula->title !!}">
                            </a>
                        </div>
                        <div class="titulo">
                            <p>{!! $pelicula->title !!}</p>
                        </div>
                    </div>
                @endforeach
            @endif
        </section>
    </body>
</html>