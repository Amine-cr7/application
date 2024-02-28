<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
</head>
<body>
    <div class="container mt-5 d-flex flex-column align-items-center">
        
        <div class="w-75">
            <form action="/store" method="post" enctype="multipart/form-data">
                
                    <div class="form-group w-100">
                        <label for="" class="form-label">Title:</label>
                        <input type="text" name="title" class="form-control ">
                    </div>
                    <div class="form-group w-100">
                        <label for="" class="form-label">Price</label>
                        <input type="text" name="price" class="form-control ">
                    </div>
                    <div class="form-group w-100">
                        <label for="" class="form-label">Image</label>
                        <input type="file" name="image" class="form-control ">
                    </div>
                
                <div class="form-group">
                    <label for="" class="form-label">description:</label>
                    <textarea name="description" id="" cols="20" class="form-control" rows="10"></textarea>
                </div>
                <button class="form-control mt-2 btn btn-primary">Submit</button>
                @csrf
            </form>
        </div>
    </div>
</body>
</html>