<?php

namespace App\Http\Controllers;

use App\Models\Tache;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class tacheController extends Controller
{
    //
    public function index(){
        $taches = Tache::all();
        return view('cc.index',['taches' => $taches]);
    }
    public function ajouter(Request $request){
        $tache = new Tache();
        $tache->auteur = $request['auteur'];
        $tache->titre = $request['titre'];
        $tache->date = $request['date'];
        $tache->save();
    return redirect('/');
    }
    public function edit($id){
        $tache = Tache::find($id);
        return view('cc.edit',['tache' => $tache]);
    }
    public function update(Request $request,$id){
        $tache = Tache::find($id);
        $tache->auteur = $request['auteur'];
        $tache->titre = $request['titre'];
        $tache->date = $request['date'];
        $tache->save();
    return redirect('/');
    }
    public function delete($id){
        $tache = Tache::find($id);
        $tache->delete();
        return redirect('/');
    }
}
