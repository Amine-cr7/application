<?php

namespace App\Http\Controllers;

use App\Models\Groupe;
use Illuminate\Http\Request;

class GroupeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $groupes = Groupe::all();
        return view('tp.index',['groupes' => $groupes]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tp.createGp');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $groupe = new Groupe;
        $groupe->intitule = $request['intitule'];
        $groupe->save();
        return redirect('/groupes');
    }

    /**
     * Display the specified resource.
     */
    public function show(Groupe $groupe)
    {
        // return view('tp.show',['groupe' => $groupe]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Groupe $groupe)
    {
        return view('tp.editGp',['groupe' => $groupe]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Groupe $groupe)
    {
        $groupe->intitule = $request['intitule'];
        $groupe->save();
       return redirect('/groupes');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Groupe $groupe)
    {
        $groupe->delete();
        return redirect('/groupes');
    }
}
