<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable =['status','method','number_of_installments','cash','account','agreement_attachment','receipt_attachment','size','phone','plot','block','geo','tp','country','region','district','street','customer','agreed', 'paid','next_pay',];

    public function user(){
    	return $this->belongsTo(User::class);
    }

    public function installment(){
    	return $this->hasMany(Installment::class);
    }

    public function plot(){
    	return $this->belongsTo(Plot::class);
    }
}