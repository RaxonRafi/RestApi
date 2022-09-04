<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function onselect(){

        $result =  Service::all();
        return $result;
    }
}
