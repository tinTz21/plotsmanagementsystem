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
        $dashboard=Installment::paginate(3);
        return view('dashboard',compact('dashboard'));
    }

    public function create(){
        // dd('error');
        return view('auth.customer');
    }

    public function store(Request $request){
         
    }
}
