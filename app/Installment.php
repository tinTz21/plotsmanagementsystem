<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Installment extends Model
{
 protected $fillable=['payment_id','next_date','next_amount','payment_status','receipt','account'];
    public function payment(){
    	return $this->belongsTo(Payment::class);
    }
}