<?php

namespace App\Http\Controllers;

use App\Plot;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;

class PlotController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $plot=Plot::latest()->get();
        return view('plot.index',compact(array('plot')));
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
            // $plot = new Plot;
            // $plot->plot_number       = $request()->get('plot_number');
            // $plot->description       = $request()->get('description');
            // $plot->plot_size       = $request()->get('plot_size');
            // $plot->block_number       = $request()->get('block_number');
            // $plot->country       = $request()->get('country');
            // $plot->region       = $request()->get('region');
            // $plot->district       = $request()->get('district');
            // $plot->street       = $request()->get('street');
            // $plot->tanroad_distance       = $request()->get('tanroad_distance');
            // $plot->tt_drawing       = $request()->get('tt_drawing');
            // $plot->survey_number       = $request()->get('survey_number');
            // $plot->north_width       = $request()->get('north_width');
            // $plot->west_width       = $request()->get('west_width');
            // $plot->south_width       = $request()->get('south_width');
            // $plot->east_width       = $request()->get('east_width');
            // $plot->attachment       = $request()->get('attachment');
            // $plot->positions       = $request()->get('positions');
            // $plot->map       = $request()->get('map');
            // $plot->map =$request()->get('status');
            // $plot->save();
            Plot::create($request->all());
            return redirect('plot')->with('success','Plot Created Successfully!');
        }

    

    /**
     * Display the specified resource.
     *
     * @param  \App\Plot  $plot
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $plot=Plot::find($id);
        return view('plot/show',compact('plot'));
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
