<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'contacts';
    protected $primarykey = 'id';
    public $incrementing = true;
    protected $keyType = 'int';
    public $timestamps = false;
}
