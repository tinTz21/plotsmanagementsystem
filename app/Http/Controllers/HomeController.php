<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use App\Installment;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $payments=\App\Payment::latest()->simplePaginate(5);
        $customer=User::all();
        $dashboard=Installment::latest()->simplePaginate(5);
        return view('dashboard')->with(compact(['dashboard',$dashboard, 'customer',$customer,'payments',$payments]));
    }

    public function create(){
        // dd('error');
        return view('auth.customer');
    }

    public function store(Request $request){
         
    }
}
