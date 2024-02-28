@include('Agence.Layout.navbar',['bienLink' => "Gerer Les Biens", 'optionLink' => "Gerer Les Options"])

@extends('Agence.Layout.app')
@section('content')
    <div class="d-flex justify-content-between">
        <h1>Les Biens</h1>
        <a href="/admin/ajouter" class="btn btn-primary">Ajouter un bien</a>
    </div>
    <table class="table table-striped">
        <tr>
            <th>Titre</th>
            <th>Surface</th>
            <th>Prix</th>
            <th>Ville</th>
            <th>Actions</th>
        </tr>
        @foreach ($biens as $bien)
            <tr>
                <td>{{ $bien->Titre }}</td>
                <td>{{ $bien->Surface }} m <sup>2</sup></td>
                <td>{{ $bien->Prix  }}$</td>
                <td>{{ $bien->Ville }}</td>
                <td>
                    <a href="/admin/edit/{{ $bien->id }}" class="btn btn-primary">Editer</a>
                    <a href="/admin/delete/{{ $bien->id }}" onclick="return confirm('are you sure')" class="btn btn-danger">Supprimer</a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection 