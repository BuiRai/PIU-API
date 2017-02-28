<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
  // Name of the table on MySql
  protected $table = 'artists';

  // Fillable attributes
  protected $fillable = array('name');

  // Visible fields
  protected $visible = ['id', 'name','songs'];

  // Hidden fields
  protected $hidden = ['created_at','updated_at'];

  /*
   * Relations below here
   */

  /**
   * An artist belongs to a song
   * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
   */
  public function songs() {
    return $this->hasMany('App\Song');
  }
}
