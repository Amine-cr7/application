@extends('tp.app')
@section('content')
    <div>
        <h1>Liste Stagiaires</h1>
        <a href={{ route('stagiaires.create') }}>Ajouter Stagiaire</a>
    </div>
    <table class="table table-dark table-striped">
        <tr>
            <td>id</td>
            <td>nom</td>
            <td>prenom</td>
            <td>groupe</td>
            <td>action</td>
        </tr>
        @foreach ($stagiaires as $stagiaire)
            <tr>
                <td>{{ $stagiaire->id }}</td>
                <td>{{ $stagiaire->nom }}</td>
                <td>{{ $stagiaire->prenom }}</td>
                <td>{{ $stagiaire->groupe->intitule }}</td>
                <td class="d-flex" style="gap: 10px">
                    <a class="btn btn-warning" href={{ route('stagiaires.edit',['stagiaire' => $stagiaire->id,'groupe' => $groupe]) }}  >Modifier</a>
                    <form action={{ route('stagiaires.destroy',['stagiaire' => $stagiaire->id]) }} method="post">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Delete"  class="btn btn-danger">
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection