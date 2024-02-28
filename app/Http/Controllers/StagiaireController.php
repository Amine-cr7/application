<?php

namespace App\Http\Controllers;

use App\Models\Groupe;
use App\Models\Stagiaire;
use Illuminate\Http\Request;

class StagiaireController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {        
        $groupe = Groupe::find($request['groupe']) ;
        $stagiaires = $groupe ? $groupe->stagiaires : Stagiaire::all();
        return view('tp.accueil', ['stagiaires' => $stagiaires,'groupe' => $groupe ? $groupe->id : null ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $groupes =  Groupe::all();
        return view('tp.createStg',['groupes' => $groupes]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $groupe = Groupe::find($request['groupe_id']);
        $stagiaire = new Stagiaire;
        $stagiaire->nom = $request['nom'];
        $stagiaire->prenom = $request['prenom'];
        $groupe->stagiaires()->save($stagiaire);
        return redirect('/stagiaires');
    }

    /**
     * Display the specified resource.
     */
    public function show(Stagiaire $stagiaire)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Stagiaire $stagiaire,Request $request)
    {
        $groupes = !$request['groupe'] ? Groupe::all() : [];
        return view('tp.editStg',['stagiaire' => $stagiaire,'groupes' => $groupes]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Stagiaire $stagiaire)
    {
        $stagiaire->nom = $request['nom'];
        $stagiaire->prenom = $request['prenom'];
        $nv_groupe = Groupe::find($request['groupe_id']);
        if(!$nv_groupe->is($stagiaire->groupe)){
            $stagiaire->groupe()->associate($nv_groupe);
        }
        $stagiaire->save();
        return redirect('/stagiaires');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Stagiaire $stagiaire)
    {
        $stagiaire->groupe()->disassociate();
        $stagiaire->delete();
        return redirect('/stagiaires');
    }
}