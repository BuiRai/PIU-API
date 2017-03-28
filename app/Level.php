<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    // Name of the table on MySql
    protected $table = 'levels';

    // Fillable attributes
    protected $fillable = array('song_id', 'stepmaker_id', 'value', 'style_id', 'chart_type_id', 'players');

    // Visible fields
    protected $visible = ['id', 'value', 'song_id', 'stepmaker_id', 'style_id', 'song', 'stepmaker', 'style', 'chart_type_id', 'players'];

    // Hidden fields
    protected $hidden = ['created_at','updated_at'];

    /*
    * Relations below here
    */

    public function song() {
    	return $this->belongsTo('App\Song');
    }

    public function stepmaker() {
    	return $this->belongsTo('App\Stepmaker');
    }

    public function style() {
        return $this->belongsTo('App\Style');
    }

    public function chartType() {
        return $this->belongsTo('App\ChartType');
    }
}
