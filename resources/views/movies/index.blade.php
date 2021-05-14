<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
    </head>
    <body>
        <ul>
            
            @foreach ($movies as $movie)
            <li>
                {{-- mi stampa il nome del film --}}
                {{-- {{$movie->name}} --}}
                {{-- mi stampa il nome del film, cliccando il link mi indirizza alla pagina corrispondente all'id del film --}}
                {{-- la funzione che andiamo a definire dentro controller e show, vorrà il parametro id --}}
                <a href="{{route('movies.show', ['movie'=>$movie->id])}}">{{$movie->name}}</a>
            </li>
            @endforeach
    
        </ul>

    </body>
</html>
