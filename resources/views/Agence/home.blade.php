@include('Agence.Layout.navbar',['searchLink' => "Nos Biens"])

@extends('Agence.Layout.app')
@section('content')
    <div class="text-center" >
        <h1> Agence Lorem ipsum</h1>
         dolor sit amet consectetur adipisicing elit. Reiciendis velit, nostrum animi rem natus soluta labore nobis quae provident consequatur excepturi alias in voluptatibus inventore dolorem possimus quidem iusto eos?
    </div>
    @if (count($biens) != 0)
        <h1>Les Derniers Biens</h1>
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
    @else
        noooo
    @endif
@endsection