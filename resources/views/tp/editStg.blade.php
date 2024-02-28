@extends('tp.app')
@section('content')
    <form action={{ route('stagiaires.update',['stagiaire' => $stagiaire->id]) }} method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nom" class="form-label">Nom</label>
            <input type="text" value="{{ $stagiaire->nom }}" class="form-control" name="nom" >
        </div>
        <div class="mb-3">
            <label for="prenom" class="form-label">Prénom</label>
            <input type="text" value="{{ $stagiaire->prenom }}" class="form-control" id="prenom" name="prenom" >
        </div>
        <div class="mb-3">
            <label for="nomvoiture"   class="form-label">Groupe</label>
            <select name="groupe_id" class="form-select"  id="">
                @if (count($groupes) > 0 )
                    @foreach ($groupes as $groupe)
                        <option value="{{ $groupe->id }}"  
                            {{ $groupe->id == $stagiaire->groupe_id ? 'selected' : '' }} >
                            {{ $groupe->intitule }}
                        </option>
                    @endforeach
                    @else
                    <option value={{ $stagiaire->groupe->id }}>{{ $stagiaire->groupe->intitule }}</option>
                @endif
                
                
            </select>
        </div>
        
        <button type="submit" class="btn form-control  btn-primary">Ajouter</button>
    </form>
@endsection