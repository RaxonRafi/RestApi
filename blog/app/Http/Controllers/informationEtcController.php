<?php

namespace App\Http\Controllers;

use App\Models\InformationEtc;
use Illuminate\Http\Request;

class informationEtcController extends Controller
{
    public function onselect(){

       $result = InformationEtc::all();
       return $result;
    }
}
