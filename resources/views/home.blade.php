<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <title>Nuevos Estrenos</title>
    </head>
    <body>
    <div class="jumbotron">
        <header>
            <h1>peliculas</h1>
        </header>
    </div>
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
                                <img src="storage/app/public/covers/{{ $pelicula->cover_name }}" alt="{!! $pelicula->title !!}">
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
