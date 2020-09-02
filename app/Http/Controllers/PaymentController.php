<?php

namespace App\Http\Controllers;

use App\Payment;
use Illuminate\Http\Request;
use App\User;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $payments=\App\Payment::latest()->get();
        return view('payments.index',compact('payments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $customer=\App\User::latest()->get();


        $plot=\App\Plot::find($id);
        return view('payments.create',compact(array('plot','customer')));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

                $user=new User;
                $user->name=$request->get('name');
                $user->email=$request->get('email');
                $user->customer=$request->get('customer');
                $user->country = $request->get('country');
                $user->region =$request->get('region');
                $user->district =$request->get('district');
                $user->phone =$request->get('phone');
                $user->identification = $request->get('identification');
                $user->identification_number = $request->get('identification_number');
                $user->save();



        $customer=new Payment([
            'status' => $request->get('status'),
            'date'=>$request->get('date'),
            'method' => $request->get('method'), 
            'number_of_installments' => $request->get('number_of_installments'), 
            'cash'=>$request->get('cash'), 
            'account'=>$request->get('account'), 
            'unpayed' => $request->get('unpayed'),
            'agreement_attachment' => $request->get('agreement_attachment'), 
            'receipt_attachment' => $request->get('receipt_attachment'), 
            'size' => $request->get('size'), 
            'plot' => $request->get('plot'),
            'block' =>$request->get('block'),
            'geo' =>$request->get('geo'),
            'tp' =>$request->get('tp'),
            'country' =>$request->get('country'),
            'region' =>$request->get('region'),
            'district' =>$request->get('district'),
            'street' =>$request->get('street'),
            'customer'=>$request->get('customer'), 
            'agreed' => $request->get('agreed'),
            'paid' => $request->get('paid'),
            'next_pay' => $request->get('next_pay'),
         ]);
        $customer->user_id = $user->id;
        $customer->save();
        return redirect()->route('payments.index')->withStatus(__('customer successfully updated.'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $payments=Payment::find($id);
        return view('payments.show',compact('payments'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function edit(Payment $payment,$id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $payments=Payment::find($id);
        $payments->update($request->all());
        return redirect()->route('payments.show',$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $payments=Payment::find($id);
        $payments->delete();
        return redirect()->route('payments.index')->with('success', 'Payments Deleted Successfully');
    }
}
