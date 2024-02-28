@extends('relation.app')
@section('content')
    <form action={{ route('personnes.update',['personne' => $personne->id]) }} method="POST">
        @method('PUT')
        @csrf
        <div class="mb-3">
            <label for="nom" class="form-label">Nom</label>
            <input type="text" value={{ $personne->nom }} class="form-control" id="nom" name="nom" >
        </div>
        <div class="mb-3">
            <label for="prenom" class="form-label">Prénom</label>
            <input type="text" value="{{ $personne->prenom }}" class="form-control" id="prenom" name="prenom" >
        </div>
        <div class="mb-3">
            <label for="nomvoiture" class="form-label">Nom Voiture</label>
            <input type="text" value="{{ $personne->voiture->nomVoiture }}" class="form-control" id="nomvoiture" name="nomvoiture" >
        </div>
        <div class="mb-3">
            <label for="module" class="form-label">Module</label>
            <input type="text" value="{{ $personne->voiture->module }}" class="form-control" id="module" name="module" >
        </div>
        <button type="submit" class="btn form-control  btn-primary">Edit</button>
    </form>
@endsection