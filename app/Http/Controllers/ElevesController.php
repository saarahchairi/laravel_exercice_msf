<?php

namespace App\Http\Controllers;

use App\Models\Eleves;
use Illuminate\Http\Request;

class ElevesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allEleve = Eleves::all();
        return view('pages.eleve', compact('allEleve'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreElevesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $store = new Eleves;
        $store->nom = $request->nom;
        $store->prenom = $request->prenom;
        $store->age = $request->age;
        $store->etat = $request->etat;
        $store->save();
        return redirect(route('eleve'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Eleves  $eleves
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $id_show = Eleves::find($id);
        return view('pages.editEleve', compact('id_show'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Eleves  $eleves
     * @return \Illuminate\Http\Response
     */
    public function edit(Eleves $eleves)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateElevesRequest  $request
     * @param  \App\Models\Eleves  $eleves
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $editable = Eleves::find($id);
        $editable->nom = $request->nom;
        $editable->prenom = $request->prenom;
        $editable->age = $request->age;
        $editable->etat = $request->etat;
        $editable->save();
        return redirect(route('eleve'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Eleves  $eleves
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy = Eleves::find($id);
        $destroy->delete();
        return redirect()->back();
    }
}
