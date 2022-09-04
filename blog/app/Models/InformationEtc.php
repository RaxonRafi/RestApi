<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InformationEtc extends Model
{
    protected $table = 'information_etc';
    protected $primarykey = 'id';
    public $incrementing = true;
    protected $keyType = 'int';
    public $timestamps = false;
}
