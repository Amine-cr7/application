<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function PHPUnit\Framework\returnSelf;

class moduleController extends Controller
{
    //
    
    public function index(){
        $results = DB::select('select * from module');
        return view('gestion.accueil',['modules' => $results]);
    }
    public function cherche(Request $request){
            $cherches = DB::select('select * from module where masse_horaire < ?',[$request['cherche']]);
            return view('gestion.accueil',['modules' => $cherches]);
    }
    public function store(Request $request){
       
        
            $data = $request->validate([
                'code' => 'required|integer',
                'titre' => 'required|string|max:10|min:2',
                'hour' => 'required|integer|max:150|min:10'
            ]);
            DB::insert('insert into module (`code_module`, `titre`, `masse_horaire`) values (?,?,?)',
            [$data['code'],$data['titre'],$data['hour']]);
           
            return redirect('module');
        
    }
    public function edit($id){
        $results = DB::select('select * from module where code_module = ?',[$id]);
        return view('gestion.modifier',['modules' => $results]);
    }
    public function update(Request $request ,$id){
        $data = $request->validate([
            'code' => 'required|integer',
            'titre' => 'required|string|max:150|min:2',
            'hour' => 'required|integer'
        ]);
        DB::update('UPDATE `module` SET `code_module`=?,`titre`=?,`masse_horaire`=? where code_module = ? ' ,
        [$data['code'],$data['titre'],$data['hour'],$id]);
        return redirect('module');
    }
    public function delete($id){
        DB::delete('delete from module where code_module = ? ',[$id]);
        return redirect('module');
    }
}
