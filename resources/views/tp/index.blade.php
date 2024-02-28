
@extends('tp.app')
@section('content')
<div>
    <h1>Liste Groupes</h1>
    <a href={{ route('groupes.create') }}>Create Groupes</a>
</div>
    <table class="table table-striped">
        <tr>
            <td>id</td>
            <td>intitule</td>
            <td>actions</td>
        </tr>
        @foreach ($groupes as $groupe)
            <tr>
                <td>{{ $groupe->id }}</td>
                <td>{{ $groupe->intitule }}</td>
                <td class="d-flex" style="gap: 10px">
                    <a class="btn btn-primary" href={{ route('stagiaires.index' , ['groupe' => $groupe->id]) }}>Afficher</a>
                    <form action={{ route('groupes.destroy',['groupe' => $groupe->id]) }} method="post">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Delete" class="btn btn-danger">
                    </form>
                    <a class="btn btn-warning" href={{ route('groupes.edit',['groupe' => $groupe->id])}}>Editer</a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection