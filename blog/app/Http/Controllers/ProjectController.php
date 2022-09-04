<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
        public function Select3(){

            $result = Project::limit(3)->get();
            return $result;
        }
        public function SelectAll(){

            $result = Project::all();
            return $result;
        }
        public function SelectDetails(Request $request){
            $id = $request->input('id');
            $result = Project::where('id',$id)->get();
            return $result;
        }
}
