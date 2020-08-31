<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable =['status','method','number_of_installments','cash','account','agreement_attachment','receipt_attachment','size','plot','block','geo','tp','country','region','district','street','customer'];

    public function user(){
    	return $this->belongsTo(User::class);
    }
}
