<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Installment;

class InstallmentController extends Controller
{
    public function edit($id,Request $request){
    	$edit=Installment::findorFail($id);
    	$edit->update($request->all());
    	return redirect()->route('payments.show',$edit->id);
    }
}
