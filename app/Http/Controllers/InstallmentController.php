<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Installment;
use App\Payment;
use App\Plot;

class InstallmentController extends Controller
{
    public function update($id,Request $request){
    	$id=Installment::findorFail($id);
    	$id->update($request->all());
    	return redirect()->back();
    }

    public function show($id){

    	$installment=Installment::all();
        $payments=Payment::find($id);
        return view('payments.show')->with(compact(['payments',$payments,'installment',$installment]));
    }
}
