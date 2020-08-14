<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

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
        return view('dashboard');
    }

    public function create(){
        // dd('error');
        return view('auth.customer');
    }

    public function store(Request $request){
         $store=new User([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'country' => $request->get('country'),
            'district' => $request->get('district'),
            'street' => $request->get('street'),
            'sex' => $request->get('sex'),
            'yob' => $request->get('yob'),
            'type' => $request->get('type'),
         ]);
        $store->save();
        return redirect('table-list')->withStatus(__('customer successfully updated.'));
    }
}
