@extends('relation.app')
@section('content')
    <form action={{ route('personnes.store') }} method="POST">
        @csrf
        <div class="mb-3">
            <label for="nom" class="form-label">Nom</label>
            <input type="text" class="form-control" id="nom" name="nom" >
        </div>
        <div class="mb-3">
            <label for="prenom" class="form-label">Prénom</label>
            <input type="text" class="form-control" id="prenom" name="prenom" >
        </div>
        <div class="mb-3">
            <label for="nomvoiture" class="form-label">Nom Voiture</label>
            <input type="text" class="form-control" id="nomvoiture" name="nomvoiture" >
        </div>
        <div class="mb-3">
            <label for="module" class="form-label">Module</label>
            <input type="text" class="form-control" id="module" name="module" >
        </div>
        <button type="submit" class="btn form-control  btn-primary">Ajouter</button>
    </form>
@endsection