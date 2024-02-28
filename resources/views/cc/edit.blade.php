<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/taches/{{ $tache->id }}" method="post">
        @method('PUT')
        <table>
            <tr>
                <td>Titre de l'exercice</td>
                <td><input type="text" 
                value="{{ $tache->titre }}"    
                name="titre"></td>
            </tr>
            <tr>
                <td>Auteur de l'exercice</td>
                <td><input type="text" 
                value="{{ $tache->auteur }}"    
                name="auteur"></td>
            </tr>
            <tr>
                <td>Date de creation</td>
                <td><input type="date" 
                value="{{ $tache->date }}"    
                name="date"></td>
            </tr>
            <tr>
                <th><button type="submit" >modifier</button></th>
            </tr>
        </table>
        @csrf
    </form>
</body>
</html>