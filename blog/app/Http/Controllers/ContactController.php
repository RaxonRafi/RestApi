<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
     public function contactsend(Request $request){

        $name =$request-> input('name');
        $email =$request->input('email');
        $message = $request->input('message');
      //  ContactDB::insert('insert into contacts (id, name,email,message) values (?, ?)', [1, 'Dayle'])
         $data_send = Contact::insert([
            'name'=>$name,
            'email'=>$email,
            'message'=>$message

         ]);

         if($data_send == true){

            echo"message sent successfully";
         }else{

            echo "somthing wents wrong";
         }


         }


     }

