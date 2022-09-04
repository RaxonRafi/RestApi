<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table = 'service';
    protected $primarykey = 'id';
    public $incrementing = true;
    protected $keyType = 'int';
    public $timestamps = false;
}
