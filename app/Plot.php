<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plot extends Model
{
    protected $fillable=['plot_number','customer','description','plot_size','block_number','country','region','district','street','tanroad_distance','tt_drawing','survey_number','north_width','west_width','south_width','east_width','attachment','positions','map','status','diligencef','photof','historicalf','purchasesf'];

        public function user(){
    	return $this->belongsTo(User::class);
    }

    public function installment(){
    	return $this->hasMany(Installment::class);
    }

    public function plot(){
    	return $this->hasMany(Plot::class);
    }
}
