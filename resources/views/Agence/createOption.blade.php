@include('Agence.Layout.navbar',['bienLink' => "Gerer Les Biens", 'optionLink' => "Gerer Les Options"])
@extends('Agence.Layout.app')
@section('content')
        
    <div class="w-100 d-flex flex-column align-items-center">
        <h1>Ajouter Un Option</h1>
        <form action="/option/store" class=" w-50" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="" class="form-label">Option</label>
                <input type="text" class="form-control" name="option">
            </div>
            <button class="btn btn-primary mt-2 form-control" type="submit">Ajouter</button>
            @csrf
        </form>
    </div>
@endsection