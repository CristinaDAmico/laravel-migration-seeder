<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel Migration e Seeder</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <!-- Styles -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    </head>

    <body>
        <div class="container p-5">
            <h1 class="text-center">AGENZIA VIAGGI</h1>

            @foreach ($packages as $package)
                <article class="m-5">
                    <div>Città: {{ $package->città }}</div>
                    <div>Trasporto: {{ $package->trasporto }}</div>
                    <div>Pernottamento: {{ $package->pernottamento }}</div>
                    <div>Ospiti: {{ $package->n_persone }}</div>
                    <div>{{ $package->prezzo }} €</div>
                </article>
            @endforeach
        </div>
    </body>
</html>
