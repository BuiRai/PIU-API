<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GameVersion extends Model
{
  // Name of the table on MySql
  protected $table = 'gameVersions';

  protected $fillable = array('id', 'name', 'launch_year', 'banner_image');

  // Visible fields
  protected $visible = ['id','name', 'launch_year', 'songs', 'banner_image'];

  // Hidden fields
  protected $hidden = ['created_at','updated_at'];

  public function songs() {
    return $this->hasMany('App\Song');
  }
}
