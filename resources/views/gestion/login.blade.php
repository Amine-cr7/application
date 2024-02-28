@extends('gestion.layout')
@section('content')
    <div class="d-flex flex-column  align-items-center">
        <h1>Login</h1>
        <form action="/login" class="w-50" method="post">
            <div class="form-group">
                <label for="" class="form-label">Email</label>
                <input type="text" class="form-control" name="email">
            </div>
            <div class="form-group">
                <label for="" class="form-label">password</label>
                <input type="password" class="form-control" name="password">
            </div>
            <button type="submit" class="mt-4 form-control btn btn-primary"  name="send">Login</button>
            @csrf
        </form>
    </div>
@endsection