<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> {{ $title }} - Controle de Series </title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <div class="container">
        
        <h1> {{ $title }} </h1>
            

        {{ $slot }} <!-- Componente que contem o conteudo para cada view em especifica -->

    </div>
</body>
</html>