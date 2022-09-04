<?php

namespace App\Http\Controllers;

use App\Models\Footer;
use Illuminate\Http\Request;

class FooterController extends Controller
{
    public function onselect(){
      $result =  Footer::all();
      return $result;
    }
}
