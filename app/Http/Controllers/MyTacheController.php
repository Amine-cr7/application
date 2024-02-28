<?php

namespace App\Http\Controllers;

use App\Models\Tache;
use Illuminate\Http\Request;

class MyTacheController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $taches = Tache::all();
        return view('cc.index',['taches' => $taches]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $tache = new Tache();
        $tache->auteur = $request['auteur'];
        $tache->titre = $request['titre'];
        $tache->date = $request['date'];
        $tache->save();
        return redirect('/taches');
    }

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        $tache = Tache::find($id);
        return view('cc.edit',['tache' => $tache]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        $tache = Tache::find($id);
        $tache->auteur = $request['auteur'];
        $tache->titre = $request['titre'];
        $tache->date = $request['date'];
        $tache->save();
    return redirect('/taches');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $tache = Tache::find($id);
        $tache->delete();
        return redirect('/taches');
    }
}
