<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

use function Laravel\Prompts\table;

class AdminController extends Controller
{
    
    public function index(){
        $biens = DB::select('select * from les_biens ');
        
        return view('agence.index_admin',['biens' => $biens]);
    }
    public function ajouter(){
        $options = DB::select('select * from options ');
        return view('agence.form',['options'=>$options]);
    }
    public function store(Request $request){
        $img = null;
        
        if($request->hasFile('image')){
            $image = $request->file('image');
            $img = $image->getClientOriginalName();
            $image->move('image/', $img);        
        }

        $options = implode(',',$request['options']);

        DB::insert('insert into les_biens  
        (`Titre`, `Surface`, `Prix`, `Ville`, `Description`, `Pieces`,
         `Chambres`, `Etage`, `Adresse`, `Code_Postal`, `Options`, `image`)
        values (?,?,?,?,?,?,?,?,?,?,?,?)'
        , [$request['titre'],$request['surface'],$request['prix'],$request['ville'], $request['description'],$request['pieces'],$request['chambres'],$request['etage'],$request['adresse'],$request['code_postal'],$options,$img
        ]);

        return redirect('/admin');
    }
    public function edit($id){
        $bien = DB::select('select * from les_biens where id = ?',[$id]);
        
        $options = explode(',',$bien[0]->Options);
        
        return view('agence.edit',['bien' => $bien[0],'options' => $options]);
    }
    public function update(Request $request,$id){
        dd($request['image']);
        $active = $request['vendu'] ? 1 : 0;
        $img = null;
        if($request->hasFile('image')){
            $image = $request->file('image');
            $img =  $image->getClientOriginalName();
            $image->move('image/', $img);        
        }
        if($img == null){
            $img = $request['image'];
        }
        if(isset($request['delete_image'])){
            File::delete(public_path('/image/'.$request['image']));
            return back();
        }
        DB::update('UPDATE `les_biens` SET 
        `Titre`= ? ,`Surface`= ? ,`Prix`= ? ,
        `Ville`= ? ,`Description`= ? ,`Pieces`= ? ,
        `Chambres`= ?,`Etage`= ?,`Adresse`= ?,
        `Code_Postal`= ?,`image`= ?,`active` = ? WHERE id = ?',
        [$request['titre'],$request['surface'],$request['prix'],$request['ville'], $request['description'],$request['pieces'],$request['chambres'],$request['etage'],$request['adresse'],$request['code_postal'],$img,$active,$id
        ]
    );
    return redirect('admin');
    }
    public function delete($id){
        DB::delete('delete from les_biens where id = ? ',[$id]);
        return redirect('admin');
    }
}
