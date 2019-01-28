<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jobs extends Model
{
    protected $fillable = array(
        'created_by_user_id',
        'update_by_user_id'
    );
}
