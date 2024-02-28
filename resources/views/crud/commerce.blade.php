<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
</head>
<body style="height: 1000px">
    <div class="container">
        <h1 class="text-center mt-3">Liste des produit</h1>
        <a href="/create" class="btn btn-warning">Ajouter</a>
        <div class="row">
            @foreach ($produits as $produit)
                <div class="col-4 mt-5">
                    <div class="w-100">
                        <img class="w-100" src="{{ asset($produit->image) }}" alt="" srcset="">
                    </div>
                    <div class="text-center">
                        <h3>{{ $produit->title }}</h3>
                       <p>{{ $produit->price }}</p>
                       <a href="/produit/{{$produit->id}}" class="btn btn-danger">Show Details</a >
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>