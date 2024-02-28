
@extends('tp.app')
@section('content')
    <form action={{ route('groupes.update',['groupe' => $groupe->id]) }} method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nom" class="form-label">Intitule</label>
            <input type="text" value="{{ $groupe->intitule }}" class="form-control" name="intitule" >
        </div>
        <button type="submit" class="btn form-control  btn-primary">Edit</button>
    </form>
@endsection