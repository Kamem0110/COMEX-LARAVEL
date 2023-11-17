<!DOCTYPE html>
<html lange="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formulário</title>

    </head>
    <body>
        <h1>Verificador maior de idade</h1>
        <form action="{{ route('VerificaMaioridade') }}">

            <input type="text" name="nome" placeholder="Nome" />
            <input type="number" name="idade" placeholder="Idade" />
            <button type="submit">Verificar</button>

        </form>
    </body>
</html> 