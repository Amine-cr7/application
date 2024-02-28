@extends('gestion.layout')
@section('content')
<a href="/module/create" class="btn btn-primary">Ajouter</a>

@if ($modules == false )
        <h1 class="text-center">Aucun Module</h1>
@else
    <h1>Liste Modules</h1>
    <div class="d-flex justify-content-center">
        <form action="/module"  method="post" class="d-flex  w-50 " style="gap: 10px">
            <input type="text" placeholder="cherche par horaire" name="cherche" class="form-control w-75" >
            <button type="submit" name="send" class=" btn btn-primary form-control w-25">Cherche</button>
            @csrf
        </form>
    </div>
    
    <table class="table table-hovred mt-2">
        <tr>
            <th>code module</th>
            <th>titre</th>
            <th>Masse Horaire</th>
            <th>Actions</th>
        </tr>
            @foreach ($modules as $module)
                <tr>
                    <td>{{ $module->code_module }}</td>
                    <td>{{ $module->titre }}</td>
                    <td>{{ $module->masse_horaire }}</td>
                    <td>
                        <a href="/module/{{ $module->code_module }}/edit" class="btn btn-danger">Modifier</a>
                        <a href="/module/delete/{{ $module->code_module }}" class="btn btn-warning">Supprimer</a>
                    </td>
                </tr>
            @endforeach
    </table>
@endif

@endsection