<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Style extends Model
{
    // Name of the table on MySql
    protected $table = 'styles';

    // Fillable attributes
    protected $fillable = array('style');

    // Visible fields
    protected $visible = ['id', 'style','levels'];

    // Hidden fields
    protected $hidden = ['created_at','updated_at'];

    /*
     * Relations below here
     */
    
    public function levels() {
    	return $this->hasMany('App\Level');
    }

}
