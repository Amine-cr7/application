<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OptionController extends Controller
{
    //
    public function index(){
        $options = DB::select('select * from options');
        return view('agence.optionIndex',['options' => $options]);
    }
    public function store(Request $request){
        DB::insert('insert into options (`Nom`) values (?)',[$request['option']]);
        return redirect('/option');
    }
    public function edit($option){
        $option = DB::select('select * from options where Nom = ?', [$option]);
        return view('agence.editOption',['option' => $option[0]]);
    }
    public function update(Request $request,$option){
        
        DB::update('update options set Nom = ? where Nom = ?', [$request['option'],$option]);
        return redirect('/option');
        
    }
    public function delete($option){
        DB::delete('delete from options where Nom = ?', [$option]);
        return redirect('/option');
    }
}
