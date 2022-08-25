<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreElevesRequest;
use App\Http\Requests\UpdateElevesRequest;
use App\Models\Eleves;

class ElevesController extends Controller
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
     * @param  \App\Http\Requests\StoreElevesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreElevesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Eleves  $eleves
     * @return \Illuminate\Http\Response
     */
    public function show(Eleves $eleves)
    {
        //
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
    public function update(UpdateElevesRequest $request, Eleves $eleves)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Eleves  $eleves
     * @return \Illuminate\Http\Response
     */
    public function destroy(Eleves $eleves)
    {
        //
    }
}
