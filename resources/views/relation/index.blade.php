@extends('relation.app')
@section('content')
<div class="d-flex justify-content-between mb-4">
    <h1>List personnes</h1>
    <div>
    <a href={{ route('personnes.create') }} class=" btn btn-primary">Ajouter</a>
    </div>
</div>
    <table class="table table-striped table-hovred">

        <tr>
            <td>Nom</td>
            <td>Prenom</td>
            <td>Nom Voiture</td>
            <td>Module Voiture</td>
            <td>Actions</td>
        </tr>
        @foreach ($personnes as $personne)
            <tr>
                <td>{{  $personne->nom }}</td>
                <td>{{  $personne->prenom }}</td>
                <td>{{ $personne->voiture->nomVoiture }}</td>
                <td>{{ $personne->voiture->module }}</td>
                
                <td class="d-flex" style="gap: 10px">
                    <a href={{ route('personnes.edit' , ['personne' => $personne->id]) }} class="btn btn-warning">edit</a>
                    <form action={{ route('personnes.destroy',['personne' => $personne->id]) }} method="post">
                        @method('DELETE')
                        <button type="submit" class=  "btn btn-danger">Delete</button>
                        @csrf
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection