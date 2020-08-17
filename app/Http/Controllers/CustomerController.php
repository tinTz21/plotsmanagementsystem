<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customer=User::latest()->get();
        return view('customers.index',compact('customer'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('auth.customer');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
public function store(Request $request){
         $store=new User([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'country' => $request->get('country'),
            'region'=>$request->get('region'),
            'district' => $request->get('district'),
            'street' => $request->get('street'),
            'sex' => $request->get('sex'),
            'yob' => $request->get('yob'),
            'type' => $request->get('type'),
            'customer' =>$request->get('customer'),
            'phone' => $request->get('phone'),
            'identification' => $request->get('identification'),
            'identification_number' => $request->get('identification_number'),
         ]);
        $store->save();

        return redirect()->route('customer.index')->withStatus(__('customer successfully updated.'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $customer=User::find($id);
        return view('customers.show',compact('customer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $customer=User::find($id);
        $customer->delete();
        return redirect()->route('customer.index')->with('success','Customer Deleted Successfully');
    }
}
