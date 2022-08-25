<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBatimentsRequest;
use App\Http\Requests\UpdateBatimentsRequest;
use App\Models\Batiments;

class BatimentsController extends Controller
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
     * @param  \App\Http\Requests\StoreBatimentsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBatimentsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Batiments  $batiments
     * @return \Illuminate\Http\Response
     */
    public function show(Batiments $batiments)
    {
        //
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
    public function update(UpdateBatimentsRequest $request, Batiments $batiments)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Batiments  $batiments
     * @return \Illuminate\Http\Response
     */
    public function destroy(Batiments $batiments)
    {
        //
    }
}
