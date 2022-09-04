<?php

namespace App\Http\Controllers;

use App\Models\HomeEtc;
use Illuminate\Http\Request;

class TechDescController extends Controller
{
       public function onselect(){

    $result = HomeEtc::select('tech_desc')->get();
    return $result;
}
}
