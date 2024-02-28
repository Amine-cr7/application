@include('Agence.Layout.navbar',['bienLink' => "Gerer Les Biens", 'optionLink' => "Gerer Les Options"])

@extends('Agence.Layout.app')
@section('content')
    
        <h1>Ajouter Un Bien</h1>
    <div class="w-100">
        <form action="/admin/store" method="post" enctype="multipart/form-data">
            <div class="d-flex ">
                <div class="form-group w-100 me-1">
                    <label for="" class="form-label">Titre</label>
                    <input type="text" name="titre" class="form-control">
                </div>
                <div class="form-group w-100 me-1">
                    <label for="" class="form-label">Surface</label>
                    <input type="text" name="surface" class="form-control">
                </div>
                <div class="form-group w-100">
                    <label for="" class="form-label">Prix</label>
                    <input type="text" name="prix" class="form-control">
                </div>

            </div>
            <div class="form-group">
                <label for="" class="form-label">Description</label>
                <textarea class="form-control" name="description" id="" cols="5" rows="5"></textarea>
            </div>
            <div class="d-flex ">
                <div class="form-group w-100 me-1">
                    <label for="" class="form-label">Pieces</label>
                    <input type="text" name="pieces" class="form-control">
                </div>
                <div class="form-group w-100 me-1">
                    <label for="" class="form-label">Chambres</label>
                    <input type="text" name="chambres" class="form-control">
                </div>
                <div class="form-group w-100">
                    <label for="" class="form-label">Etage</label>
                    <input type="text" name="etage" class="form-control">
                </div>

            </div>
            <div class="d-flex ">
                <div class="form-group w-100 me-1">
                    <label for="" class="form-label">Adresse</label>
                    <input type="text" name="adresse" class="form-control">
                </div>
                <div class="form-group w-100 me-1">
                    <label for="" class="form-label">Ville</label>
                    <input type="text" name="ville" class="form-control">
                </div>
                <div class="form-group w-100">
                    <label for="" class="form-label">Code Postal</label>
                    <input type="number" name="code_postal" class="form-control">
                </div>
            </div>
            <div class="d-flex">
                <div class="form-group w-100 me-2">
                    <label for="" class="form-label">Options</label>
                    <select name="options[]" class="form-select" multiple>
                        @foreach ($options as $option)
                            <option value={{ $option->Nom }}>{{ $option->Nom }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group w-100">
                    <label for="" class="form-label">Images</label>
                    <input type="file" class="form-control" name="image">
                </div>
            </div>  
            <div class="form-group mt-2">
                <button type="submit" class="btn btn-primary">Ajouter</button>
            </div>
            @csrf
        </form>
    </div>
@endsection