<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <legend>Ajouter Un exercice</legend>
        <form action="{{ route('taches.store') }}" method="post">
        <table>
            <tr>
                <td>Titre de l'exercice</td>
                <td><input type="text" name="titre"></td>
            </tr>
            <tr>
                <td>Auteur de l'exercice</td>
                <td><input type="text" name="auteur"></td>
            </tr>
            <tr>
                <td>Date de creation</td>
                <td><input type="date" name="date"></td>
            </tr>
            <tr>
                <th><button type="submit">Ajouter</button></th>
            </tr>
        </table>
        @csrf
    </form>
    </fieldset>
    @if (count($taches) != 0)
        <table>
            <tr>
                <td>id</td>
                <td>titre</td>
                <td>auteur</td>
                <td>date</td>
                <td>Actions</td>
            </tr>
            @foreach ($taches as $tache)
            <tr>
                <td>{{ $tache->id }}</td>
                <td>{{ $tache->titre }}</td>
                <td>{{ $tache->auteur }}</td>
                <td>{{ $tache->date }}</td>
                <td>
                    <a href="/taches/{{ $tache->id }}/edit">Editer</a>
                    <form action="/taches/{{ $tache->id }}" method="post">
                        @method('DELETE')
                        <input type="submit" value="Delete">
                        @csrf
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    @endif
</body>
</html>