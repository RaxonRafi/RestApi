<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ChartData extends Model
{
    protected $table = 'chart_data';
    protected $primarykey = 'id';
    public $incrementing = true;
    protected $keyType ='int' ;
    public $timestamps =false;

}
