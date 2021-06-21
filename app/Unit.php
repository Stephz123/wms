<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Unit extends Model
{
    use SoftDeletes;
    protected $dates = ['delete_at'];

    protected $fillable = ['name','create_by','update_by','delete_by'];
}
