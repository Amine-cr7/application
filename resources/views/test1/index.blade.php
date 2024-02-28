<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>List Players</h1>
    <a href="/ajouter">Ajouter</a>
    <table>
        <tr>
            <th>id</th>
            <th>Name</th>
            <th>Club</th>
            <th>Value</th>
            <th>Modifier</th>
            <th>Supprimer</th>
        </tr>
        @foreach ($players as $player)
            <tr>
                <td>{{ $player->id }}</td>
                <td>{{ $player->Name }}</td>
                <td>{{ $player->Club }}</td>
                <td>{{ $player->Value }}</td>
                <td><a href="/edit/{{ $player->id }}">Edit</a></td>
                <td><a href="/delete/{{ $player->id }}">Supprimer</a></td>
            </tr>
        @endforeach
    </table>
</body>
</html>