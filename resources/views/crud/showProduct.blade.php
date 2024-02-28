<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
</head>
<body class="d-flex flex-column align-items-center mt-5">
    
    @foreach ($produit as $produit)
                <div class="col-4">
                    <div class="w-100">
                        <img class="w-100" src="{{ asset($produit->image) }}" alt="" srcset="">
                    </div>
                    <div class="text-center">
                        <h3>{{ $produit->title }}</h3>
                       <p>{{ $produit->price }}</p>
                       <p>{{ $produit->description }}</p>
                       <a href="/delete/{{ $produit->id }}" class="btn btn-danger">delete</a>
                       <a href="/produit/{{ $produit->id }}/edit" class="btn btn-danger">edit</a>
                    </div>
                </div>
    @endforeach
</body>
</html>