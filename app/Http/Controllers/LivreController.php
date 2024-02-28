<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LivreController extends Controller
{
    //
    public function show($id){
        $livres = [1 => ['title1','author1','2019','description1'],
        2 => ['title2','author2','2016','description2'],
        3 => ['title3','author3','2010','description3'],
    ];
    return view('livre',['livres'=>$livres[$id]]);
    }
}