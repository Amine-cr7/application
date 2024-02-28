@include('Agence.Layout.navbar',['bienLink' => "Gerer Les Biens", 'optionLink' => "Gerer Les Options"])

@extends('Agence.Layout.app')
@section('content')
<div class="d-flex justify-content-between mb-5">
    <h1>Les Options</h1>
    <a href="/option/create" class="btn btn-primary p-3 fs-5">Ajouter un bien</a>
</div>
<table class="table table-striped">
    <tr>
        <th class="col-9" >Nom</th>
        <th>Actions</th>
    </tr>
    @foreach ($options as $option)
        <tr>
            <td>{{ $option->Nom }}</td>
            <td>
                <a href="/option/edit/{{$option->Nom}}" class="btn btn-primary">Editer</a>
                <a href="/option/delete/{{$option->Nom}}" onclick="return confirm('are you sure')" class="btn btn-danger">Supprimer</a>
            </td>
        </tr>
    @endforeach
</table>
@endsection