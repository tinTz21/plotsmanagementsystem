<?php

namespace App\Http\Controllers;

use App\Payment;
use App\Installment;
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


                $customer=new Payment;
                $customer->status = $request->get('status');
                $customer->date=$request->get('date');
                $customer->method = $request->get('method');
                $customer->number_of_installments = $request->get('number_of_installments');
                $customer->cash=$request->get('cash'); 
                $customer->unpayed = $request->get('unpayed');
                $customer->size = $request->get('size'); 
                $customer->plot = $request->get('plot');
                $customer->block =$request->get('block');
                $customer->geo =$request->get('geo');
                $customer->tp =$request->get('tp');
                $customer->country =$request->get('country');
                $customer->region =$request->get('region');
                $customer->district =$request->get('district');
                $customer->street =$request->get('street');
                $customer->customer=$request->get('customer'); 
                $customer->agreed = $request->get('agreed');
                $customer->user_id = $user->id;
                $customer->plot_id=$request->get('plot_id');
                $file = $request->file('agreement_attachment');
                if ($file) {
                    $path = 'files/';
                    $filename = uniqid(date('Hmdysi')) . '_' . $file->getClientOriginalName();
                    $upload = $request->file('agreement_attachment')->move($path, $filename);
                    if ($upload) {
                        $customer->agreement_attachment = $path . $filename;
                    }
                }     
                $customer->save();
  

                $payment=new Installment();
                $payment->plot_id=$request->get('plot_id');
                $payment->user_id = $user->id;
                $payment->payment_id=$customer->id;
                $payment->next_date=$request->get('next_date');
                $payment->next_amount=$request->get('next_amount');
                $payment->payment_status=$request->get('payment_status');
                $payment->account=$request->get('account');

                $file = $request->file('receipt');
                    if ($file) {
                        $path = 'files/';
                        $filename = uniqid(date('Hmdysi')) . '_' . $file->getClientOriginalName();
                        $upload = $request->file('receipt')->move($path, $filename);
                        if ($upload) {
                            $payment->receipt = $path . $filename;
                        }
                    } 
                $payment->save();
       
            
            return redirect()->route('payments.index')->withStatus(__('customer successfully updated.'));
    }


    public function installment(Request $request,$id){
        
        $payment=new Installment();
               
                $payment->user_id = \Auth::user()->id;
                $payment->payment_id=$id;
                $payment->plot_id=$request->get('plot_id');
                $payment->next_date=$request->get('next_date');
                $payment->next_amount=$request->get('next_amount');
                $payment->payment_status=$request->get('payment_status');
                $payment->account=$request->get('account');

                $file = $request->file('receipt');
                    if ($file) {
                        $path = 'files/';
                        $filename = uniqid(date('Hmdysi')) . '_' . $file->getClientOriginalName();
                        $upload = $request->file('receipt')->move($path, $filename);
                        if ($upload) {
                            $payment->receipt = $path . $filename;
                        }
                    } 
                $payment->save();
       
            
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
        $installment=Installment::all();
        $payments=Payment::find($id);
        return view('payments.show')->with(compact(['payments',$payments,'installment',$installment]));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function edit($id,Request $request){
        $id=Installment::findorFail($id);
        $id->update($request->all());
        return $this->update($edit);
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
