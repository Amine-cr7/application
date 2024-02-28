<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
</head>
<body>
    <div class="container mt-5 d-flex flex-column align-items-center">
        
        <div class="w-75">
            <form action="/" method="post">
                <div class="d-flex " style="gap: 10px">
                    <div class="form-group w-100">
                        <label for="" class="form-label">Prenom & Nom:</label>
                        <input type="text" name="fname" class="form-control ">
                    </div>
                    <div class="form-group w-100">
                        <label for="" class="form-label">Email:</label>
                        <input type="text" name="email" class="form-control ">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="form-label">Message:</label>
                    <textarea name="message" id="" cols="30" class="form-control" rows="10"></textarea>
                </div>
                <button class="form-control mt-2 btn btn-primary">Submit</button>
                @csrf
            </form>
        </div>
    </div>
</body>
</html>