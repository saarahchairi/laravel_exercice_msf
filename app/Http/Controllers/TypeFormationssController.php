<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TypeFormationss;

class TypeFormationssController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allTypeFormation = TypeFormationss::all();
        return view('pages.typeFormation', compact('allTypeFormation'));
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
     * @param  \App\Http\Requests\StoreTypeFormationssRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $store = new TypeFormationss;
        $store->nom = $request->nom;
        $store->save();
        return redirect(route('typeFormation'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TypeFormationss  $typeFormationss
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $id_show = TypeFormationss::find($id);
        return view('pages.editTypeFormation', compact('id_show'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TypeFormationss  $typeFormationss
     * @return \Illuminate\Http\Response
     */
    public function edit(TypeFormationss $typeFormationss)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTypeFormationssRequest  $request
     * @param  \App\Models\TypeFormationss  $typeFormationss
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $editable = TypeFormationss::find($id);
        $editable->nom = $request->nom;
        $editable->save();
        return redirect(route('typeFormation'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TypeFormationss  $typeFormationss
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy = TypeFormationss::find($id);
        $destroy->delete();
        return redirect()->back();
    }
}
