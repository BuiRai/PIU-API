<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stepmaker extends Model
{
	// Name of the table on MySql
    protected $table = 'stepmakers';

	// Fillable attributes
    protected $fillable = array('username');

    // Visible fields
    protected $visible = ['username', 'levels'];

    // Hidden fields
    protected $hidden = ['created_at','updated_at'];

    /*
     * Relations below here
     */
    
    public function levels(){
    	return $this->hasMany('App\Level');
    }
    
}
