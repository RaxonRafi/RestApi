<?php

namespace App\Http\Controllers;

use App\Models\HomeEtc;
use Illuminate\Http\Request;

class HomeTopController extends Controller
{
    public function onselect()
    {

        $result = HomeEtc::select('home_title', 'home_subtitle')->get();
        return $result;
    }
}
