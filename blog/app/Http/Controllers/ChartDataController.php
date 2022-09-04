<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ChartData;

class ChartDataController extends Controller
{
    public function allselect(){
       $data = ChartData::all();
       return $data;

    }
}
