<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Zizaco\Entrust\EntrustPermission;

class Permission extends EntrustPermission
{
    // Name of the table on MySql
    protected $table = 'permissions';

    // Fillable attributes
    protected $fillable = array('name', 'guard_name', 'description');
}
