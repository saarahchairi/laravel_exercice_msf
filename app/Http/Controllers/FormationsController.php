<?php

namespace App\Http\Controllers;

use App\Models\Formations;
use Illuminate\Http\Request;

class FormationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allFormation = Formations::all();
        return view('pages.formation', compact("allFormation"));
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
     * @param  \App\Http\Requests\StoreFormationsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $store = new Formations;
        $store->nom = $request->nom;
        $store->description = $request->description;
        $store->save();
        return redirect(route('formation'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Formations  $formations
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $id_show = Formations::find($id);
        return view('pages.editFormation', compact('id_show'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Formations  $formations
     * @return \Illuminate\Http\Response
     */
    public function edit(Formations $formations)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFormationsRequest  $request
     * @param  \App\Models\Formations  $formations
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $editable = Formations::find($id);
        $editable->nom = $request->nom;
        $editable->description = $request->description;
        $editable->save();
        return redirect(route('formation'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Formations  $formations
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy = Formations::find($id);
        $destroy->delete();
        return redirect()->back();
    }
}
