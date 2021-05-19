<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Migration & Seeder</title>
    </head>
    <body>
       <div>
       <div class="showcase">
        @foreach ($travels as $travel)
            <div class="info">
                <span class="title"> {{$travel->destination}} </span>
                <span class="originalTitle"> {{$travel->price}} </span>
                <span class="nationality"> {{$travel->n_people}} </span>
                <span class="date"> {{ date('M j, Y', strtotime($travel->date))}} </span>
                <span class="vote"> {{$travel->days}} </span>
            </div>
        @endforeach
    </div>
       </div>
    </body>
</html>
