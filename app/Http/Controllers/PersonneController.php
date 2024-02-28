<?php

namespace App\Http\Controllers;

use App\Models\Personne;
use App\Models\Voiture;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PersonneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $personnes = Personne::all();
        return view('relation.index',['personnes' => $personnes]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('relation.ajouter');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $personne = new Personne;
        $personne->nom = $request['nom'];
        $personne->prenom = $request['prenom'];
        $personne->save();
        $voiture = new Voiture;
        $voiture->nomVoiture = $request['nomvoiture'];
        $voiture->module = $request['module'];
        $personne->voiture()->save($voiture);
        // $personne = Personne::create([
        //     'nom' => $request['nom'],
        //     'prenom' => $request['prenom']
        // ]);
        // $personne->voiture()->create([
        //     'nomVoiture' => $request['nomvoiture'],
        //     'module' => $request['module']
        // ]);
        return redirect('/personnes');
    }

    /**
     * Display the specified resource.
     */
    public function show(Personne $personne)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Personne $personne)
    {
        return view('relation.edit',['personne' => $personne]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Personne $personne)
    {
        $personne->nom = $request['nom'];
        $personne->prenom = $request['prenom'];
        $personne->voiture->nomVoiture = $request['nomvoiture'];
        $personne->voiture->module = $request['module'];
        $personne->voiture->save();

        
        // $personne->update([
        //     'nom' => $request['nom'],
        //     'prenom' => $request['prenom']
        // ]);
        // $personne->voiture()->update([
        //     'nomVoiture' => $request['nomvoiture'],
        //     'module' => $request['module']
        // ]);
        return redirect('/personnes');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Personne $personne)
    {
        $personne->voiture->delete();
        $personne->delete();
       return redirect('/personnes');
    }
    
}
