<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class loginController extends Controller
{
    //
    public function __construct()
    {
       return  $this->middleware('login');
    }
    public function login(Request $request){
        if($request->get('auth')){
           
          return  redirect('module');
        }
    }
}
