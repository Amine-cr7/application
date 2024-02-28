@extends('gestion.layout')
@section('content')

<div class="  d-flex flex-column align-items-center">
        <h1 class="text-center">Create Module</h1>
        @if ($errors->any())
    @foreach ($errors->all() as $err)
        <div class="alert w-50 alert-warning alert-dismissible fade show" role="alert">
            <strong>{{ $err }}</strong> 
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endforeach
@endif
    <div class="w-75">
        <form action="/module/store" method="post" >
            
                <div class="form-group w-100">
                    <label for="" class="form-label">code Module:</label>
                    <input type="text" name="code" class="form-control ">
                </div>
                <div class="form-group w-100">
                    <label for="" class="form-label">Titre Module</label>
                    <input type="text" name="titre" class="form-control ">
                </div>
                <div class="form-group w-100">
                    <label for="" class="form-label">Masse Horraire</label>
                    <input type="text" name="hour" class="form-control ">
                </div>
            <button class="form-control mt-2 btn btn-primary">Submit</button>
            @csrf
        </form>
    </div>
</div>
@endsection