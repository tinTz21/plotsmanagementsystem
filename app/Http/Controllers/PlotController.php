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
        $plot=Plot::latest()->simplePaginate(4);
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

            $plot=new Plot();
            $plot->user_id=\Auth::user()->id;
            $plot->plot_number=$request->get('plot_number');
            $plot->text=$request->get('text');
            $plot->block_number=$request->get('block_number');
            $plot->plot_size=$request->get('plot_size');
            $plot->description=$request->get('description');
            $plot->country=$request->get('country');
            $plot->region=$request->get('region');
            $plot->district=$request->get('district');
            $plot->street=$request->get('street');
            $plot->tanroad_distance=$request->get('tanroad_distance');
            $plot->tt_drawing=$request->get('tt_drawing');
            $plot->survey_number=$request->get('survey_number');
            $plot->north_width=$request->get('north_width');
            $plot->west_width=$request->get('west_width');
            $plot->south_width=$request->get('south_width');
            $plot->east_width=$request->get('east_width');
            $plot->positions=$request->get('positions');
            $plot->map=$request->get('map');
            $plot->status=$request->get('status');

            $file = $request->file('attachment');
            if ($file) {
                $path = 'files/';
                $filename = uniqid(date('Hmdysi')) . '_' . $file->getClientOriginalName();
                $upload = $request->file('attachment')->move($path, $filename);
                if ($upload) {
                    $plot->attachment = $path . $filename;
                }
            } 
            
             $file = $request->file('diligencef');
            if ($file) {
                $path = 'files/';
                $filename = uniqid(date('Hmdysi')) . '_' . $file->getClientOriginalName();
                $upload = $request->file('diligencef')->move($path, $filename);
                if ($upload) {
                    $plot->diligencef = $path . $filename;
                }
            } 

             $file = $request->file('photof');
            if ($file) {
                $path = 'files/';
                $filename = uniqid(date('Hmdysi')) . '_' . $file->getClientOriginalName();
                $upload = $request->file('photof')->move($path, $filename);
                if ($upload) {
                    $plot->photof = $path . $filename;
                }
            } 

             $file = $request->file('historicalf');
            if ($file) {
                $path = 'files/';
                $filename = uniqid(date('Hmdysi')) . '_' . $file->getClientOriginalName();
                $upload = $request->file('historicalf')->move($path, $filename);
                if ($upload) {
                    $plot->historicalf = $path . $filename;
                }
            } 

            $file = $request->file('purchasesf');
            if ($file) {
                $path = 'files/';
                $filename = uniqid(date('Hmdysi')) . '_' . $file->getClientOriginalName();
                $upload = $request->file('purchasesf')->move($path, $filename);
                if ($upload) {
                    $plot->purchasesf = $path . $filename;
                }
            } 
            $plot->save();
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
        $customer=\App\User::latest()->get();
        $plot=Plot::find($id);
        return view('plot/show',compact(array('customer','plot')));
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
    public function destroy($id)
    {
        $plot=Plot::find($id);
        $plot->delete();
        return redirect()->route('plot')->with('success','Plot Deleted Successfully');
    }
}
