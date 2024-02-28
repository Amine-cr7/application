<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class formController extends Controller
{
    //
    public function getData(Request $request){
        $data = $request->validate([
            'fname'=>'required|regex:/^[a-zA-Z]+ [a-zA-Z]+$/',
            'email' => 'required|email',
            'message' => 'required|max:500'
        ],[
            'fname.required'=>'required'
        ]);
        return view('readData',['data'=>$data]);
    }
}
