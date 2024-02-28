@include('Agence.Layout.navbar',['searchLink' => "Nos Biens"])

@extends('Agence.Layout.app')
@section('content')
    <div class="d-flex justify-content-center">
        <form action="/user/search" method="post">
            <div class="d-flex" style="gap: 10px">
                <input type="text" name="surface" placeholder="Surface minimium" class="form-control">
                <input type="number" name="pieces" placeholder="Nombre de pieces min"  class="form-control">
                <input type="text" name="prix" placeholder="100000" class="form-control">
                <input type="text" name="cle" placeholder="Mot cle" class="form-control">
                <input type="submit" value="chercher" class="form-control w-75 btn btn-primary">
            </div>
            @csrf
        </form>
    </div>
    @if (!empty($biens))
    <div class="row">
        @foreach ($biens as $bien)
            <div class="col-3 ">
                <div class="image" style="max-width: 100%;" >
                    <img  style="height: 250px;max-width: 100%" style="" src="{{ asset('/image/'. $bien->image) }}">
                </div>
                <a href="" class="h4">{{ $bien->Titre }}</a>
                <p>{{ $bien->Surface }} m<sup>2</sup> {{ $bien->Ville }} ({{$bien->Surface}})</p>
                <h1>{{ $bien->Prix }}</h1>
            </div>
        @endforeach
    </div>
@endif
@endsection