<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LoaiDien extends Model
{
    protected $table = 'loaidien';
    protected $primaryKey = 'id';
    public $timestamps = false;
}
