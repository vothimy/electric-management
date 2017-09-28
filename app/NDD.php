<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NDD extends Model
{
    protected $table = 'dangkydien';
    protected $primaryKey = 'id';
    public $timestamps = false;
}
