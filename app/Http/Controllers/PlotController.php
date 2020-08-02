<?php

namespace App\Http\Controllers;

use App\Plot;
use Illuminate\Http\Request;

class PlotController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('plot.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('plot.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Plot  $plot
     * @return \Illuminate\Http\Response
     */
    public function show(Plot $plot)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Plot  $plot
     * @return \Illuminate\Http\Response
     */
    public function edit(Plot $plot)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Plot  $plot
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Plot $plot)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Plot  $plot
     * @return \Illuminate\Http\Response
     */
    public function destroy(Plot $plot)
    {
        //
    }
}
