<?php

namespace App\Http\Controllers;

use App\Models\Batiments;
use Illuminate\Http\Request;

class BatimentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allBatiment = Batiments::all();
        return view('pages.batiment', compact('allBatiment'));
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
     * @param  \App\Http\Requests\StoreBatimentsRequest  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $store = new Batiments;
        $store->nom = $request->nom;
        $store->description = $request->description;
        $store->save();
        return redirect(route('/batiment'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Batiments  $batiments
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $id_show = Batiments::find($id);
        return view('pages.editBatiment', compact('id_show'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Batiments  $batiments
     * @return \Illuminate\Http\Response
     */
    public function edit(Batiments $batiments)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBatimentsRequest  $request
     * @param  \App\Models\Batiments  $batiments
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $editable = Batiments::find($id);
        $editable->nom = $request->nom;
        $editable->description = $request->description;
        $editable->save();
        return redirect(route('batiment'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Batiments  $batiments
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy = Batiments::find($id);
        $destroy->delete();
        return redirect()->back();
    }
}
