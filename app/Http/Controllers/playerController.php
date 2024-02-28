<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class playerController extends Controller
{
    public function index(){
        $players = DB::select('select * from players');
        return view('test1.index',['players'=>$players]);
    }
    public function ajouter(Request $request){
        DB::insert('insert into players (`Name`,`Club`,`Value`) Values(?,?,?)',
        [$request['name'],$request['club'],$request['value']]);
        return redirect('/');
    }
    public function edit($id){
        $player = DB::select('select * from players where id = ?',[$id]);
        return view('test1.edit',['player' => $player[0]]);
    }
    public function update(Request $request,$id){
        DB::update('update players set Name = ? , Club = ? ,Value = ?   Where id = ?',
        [$request['name'],$request['club'],$request['value'],$id]);
        return redirect('/');
    }
    public function delete($id){
        DB::delete('delete from players where id = ? ',[$id]);
        return redirect('/');
    }
}
