<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Mylogin extends Controller
{
    //


    public function showpage(){
        return view('NEwLogin');

    }


    public function page(Request $request){

        $data = array(
            "Email"=>$request->get('email'),
            "password"=>$request->get('pwd')
        );


        print_r($data);
    }


}


