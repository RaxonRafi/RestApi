<?php

namespace App\Http\Controllers;

use App\Models\HomeEtc;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function onselect()
    {

        $result = HomeEtc::select('video_desc', 'video_url')->get();
        return $result;
    }
}
