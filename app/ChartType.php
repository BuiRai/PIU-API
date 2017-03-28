<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChartType extends Model
{
    // Name of the table on MySql
    protected $table = 'chart_types';

    // Fillable attributes
    protected $fillable = array('name', 'abbreviation');

    // Visible fields
    protected $visible = ['id', 'name', 'abbreviation', 'levels'];

    // Hidden fields
    protected $hidden = ['created_at','updated_at'];

    /*
    * Relations below here
    */

    public function levels()
    {
        return $this->hasMany('App\Level');
    }
}
