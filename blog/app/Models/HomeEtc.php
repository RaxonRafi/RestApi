<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HomeEtc extends Model
{
    protected $table = 'home_etc';
    protected $primarykey = 'id';
    public $incrementing = true;
    protected $keyType = 'int';
    public $timestamps = false;
}
