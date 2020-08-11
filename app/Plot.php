<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plot extends Model
{
    protected $fillable=['plot_number','description','plot_size','block_number','country','region','district','street','tanroad_distance','tt_drawing','survey_number','north_width','west_width','south_width','east_width','attachment','positions','map','status'];
}
