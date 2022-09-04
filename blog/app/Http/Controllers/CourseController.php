<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
 public function onselectfour(){
     $result = Course::limit(4)->get();
     return $result;

 }
 public function onselectall(){
     $result = Course::all();
     return $result;
 }
 public function  selectdetails(Request $request){
   $id =  $request->input('id');
   $result = Course::where('id',$id)->get();
   return $result;

 }
}
