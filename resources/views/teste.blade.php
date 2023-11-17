<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-sacale=1.0" />
        <title>Teste</title>
    </head>
    <body>
       <h1>Olá {{ $nome }}</h1>
       @if ($adulto)
       <p>
            Você é adulto!
       </p>
       @else
       <p>Você não é adulto! </p>
       @endif
    </body>

</html>