<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Installment;

class ReminderController extends Controller
{
    public function index(){
    	$reminder=Installment::all();
    	return view('reminder.index',compact('reminder'));
    }

    public function show($id){
    	$reminder=Installment::find($id);
    	return view('reminder.show',compact('reminder'));
    }
}
