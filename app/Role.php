<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Zizaco\Entrust\EntrustRole;

class Role extends EntrustRole
{
    // Name of the table on MySql
    protected $table = 'roles';

    // Fillable attributes
    protected $fillable = array('name', 'guard_name', 'description');
}
