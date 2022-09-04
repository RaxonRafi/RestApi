<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClientReview;

class ClientReviewController extends Controller
{
 public function allselect(){
     $data = ClientReview::all();
     return $data;
 }

}
