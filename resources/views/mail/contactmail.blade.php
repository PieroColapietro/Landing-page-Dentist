<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Ciao {{$contact['user']}} \, ti confermiamo che abbiamo ricevuto la tua richiesta di contatto e verrai pertanto ricontattato al più presto al numero da te fornitoci.</h1>
    <p>Grazie per averci scelto</p>
    <p>Il Team di Studio Colapietro</p>

    <div>
        <ul>
           <p>Riepilogo Dati</p>
            <li>
                Nome Utente: {{$contact['user']}}
            </li>
            <li>
                Cellulare: {{$contact['phone']}}
            </li>
        </ul>
    </div>
</body>
</html>