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
    	return redirect()->back()->with('success','Record Updated Successful');
    }

    public function show($id){

    	$installment=Installment::all();
        $payments=Payment::find($id);
        return view('payments.show')->with(compact(['payments',$payments,'installment',$installment]));
    }

    public function edit($id){
    	$installment=Installment::find($id);
    	return view('payments.edit',compact('installment'));
    }

    public function delete($id){
    	$installment=Installment::findorFail($id);
    	return view('payments.delete_installment',compact('installment'));
    }

    public function destroy($id){
    	$installment=Installment::findorFail($id);
    	$installment->delete();
    	return redirect()->route('payments.index');
    }
}
