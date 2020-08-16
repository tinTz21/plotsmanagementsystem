<?php

namespace App\Http\Controllers;

use App\Payment;
use Illuminate\Http\Request;

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
        $plot=\App\Plot::find($id);
        $customer=\App\User::latest()->get();
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
        $customer=new Payment([
            'status' => $request->get('status'), 
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
         ]);
        $customer->save();

        return redirect()->route('payments.index')->withStatus(__('customer successfully updated.'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function show(Payment $payment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function edit(Payment $payment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Payment $payment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Payment $payment)
    {
        //
    }
}
