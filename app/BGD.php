<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BGD extends Model
{
    protected $table = 'banggiadien';
    protected $primaryKey = 'id';
    public $timestamps = false;
}
