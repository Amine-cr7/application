@include('Agence.Layout.navbar',['bienLink' => "Gerer Les Biens", 'optionLink' => "Gerer Les Options"])

@extends('Agence.Layout.app')
@section('content')
    
    <div class="w-100">
        
        <form action="{{ route('modifier',['id' => $bien->id,'image' => $bien->image ]) }}" method="post" enctype="multipart/form-data">
            <div class="d-flex justify-content-between">
                <h1>Ajouter Un Bien</h1>
                <div class="form-check form-switch">
                    <input class="form-check-input" name="vendu" type="checkbox" role="switch" id="flexSwitchCheckChecked" {{ $bien->active ? 'checked' : null  }}>
                    <label class="form-check-label" for="flexSwitchCheckChecked">Vendu ?</label>
                  </div>
            </div>
            <div class="row">
                <div class="col-9">
                    <div class="d-flex ">
                        <div class="form-group w-100 me-1">
                            <label for="" class="form-label">Titre</label>
                            <input type="text" name="titre" 
                            value={{ $bien->Titre }}
                            class="form-control">
                        </div>
                        <div class="form-group w-100 me-1">
                            <label for="" class="form-label">Surface</label>
                            <input type="text" name="surface" 
                            value={{ $bien->Surface }}
                            class="form-control">
                        </div>
                        <div class="form-group w-100">
                            <label for="" class="form-label">Prix</label>
                            <input type="text" name="prix"
                            value={{ $bien->Prix }}
                            class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="form-label">Description</label>
                        <textarea class="form-control"
                        
                        name="description" id="" cols="5" rows="5">{{ $bien->Description }}</textarea>
                    </div>
                    <div class="d-flex ">
                        <div class="form-group w-100 me-1">
                            <label for="" class="form-label">Pieces</label>
                            <input type="text" name="pieces"
                            value={{ $bien->Pieces }}
                            class="form-control">
                        </div>
                        <div class="form-group w-100 me-1">
                            <label for="" class="form-label">Chambres</label>
                            <input type="text" value="{{ $bien->Chambres }}" name="chambres" class="form-control">
                        </div>
                        <div class="form-group w-100">
                            <label for="" class="form-label">Etage</label>
                            <input type="text" name="etage"
                            value={{ $bien->Etage }}
                            class="form-control">
                        </div>

                    </div>
                    <div class="d-flex ">
                        <div class="form-group w-100 me-1">
                            <label for="" class="form-label">Adresse</label>
                            <input type="text" name="adresse" 
                            value={{ $bien->Adresse }}
                            class="form-control">
                        </div>
                        <div class="form-group w-100 me-1">
                            <label for="" class="form-label">Ville</label>
                            <input type="text" name="ville"
                            value={{ $bien->Ville }}
                            class="form-control">
                        </div>
                        <div class="form-group w-100">
                            <label for="" class="form-label">Code Postal</label>
                            <input type="number"
                            value={{ $bien->Code_Postal }}
                            name="code_postal" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="d-block">Options:</label>
                        @foreach ($options as $option)
                            <input type="checkbox" name="options[]" value="{{ $option }}" multiple  checked id="">{{ $option }}
                        @endforeach
                    </div>
                    <div class="form-group mt-2">
                        <button type="submit" name="modifier" class="btn btn-primary">Modifier</button>
                    </div>
            </div>
                <div class="col-3 ">
                    <div class="image text-center">

                        <img class="w-75" src={{ asset('/image/'. $bien->image) }} alt="" srcset="">
                        <button type="submit" name="delete_image"  class="btn btn-danger form-control mt-2 w-50">Supprimer</button >
                    </div>
                    <input type="file" class="form-control mt-5" name="image" >
                </div>
            </div>
            @csrf
        </form>
    </div>
@endsection