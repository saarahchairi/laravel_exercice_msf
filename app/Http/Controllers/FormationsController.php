<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFormationsRequest;
use App\Http\Requests\UpdateFormationsRequest;
use App\Models\Formations;

class FormationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function store(StoreFormationsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Formations  $formations
     * @return \Illuminate\Http\Response
     */
    public function show(Formations $formations)
    {
        //
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
    public function update(UpdateFormationsRequest $request, Formations $formations)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Formations  $formations
     * @return \Illuminate\Http\Response
     */
    public function destroy(Formations $formations)
    {
        //
    }
}
