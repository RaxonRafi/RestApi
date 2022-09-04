<?php

namespace App\Http\Controllers;

use App\Models\HomeEtc;
use Illuminate\Http\Request;

class TotalController extends Controller
{
    public function onselect()
    {

        $result = HomeEtc::select('total_project', 'total_clents')->get();
        return $result;
    }
}
