
@extends('tp.app')
@section('content')
    <form action={{ route('groupes.store') }} method="POST">
        @csrf
        <div class="mb-3">
            <label for="nom" class="form-label">Intitule</label>
            <input type="text" class="form-control" name="intitule" >
        </div>
        <button type="submit" class="btn form-control  btn-primary">Ajouter</button>
    </form>
@endsection