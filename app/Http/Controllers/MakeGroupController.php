<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class MakeGroupController extends Controller
{

    public function insertMember(Request $request){
        $data_group=array(
          "Project_id"=>$request->get('Project_id'),
          "Faculty_id"=>$request->get('Faculty_id'),
         "Project_title"=>$request->get('Project_title'),
         "Description"=>$request->get('Description'),
         "Comments"=>$request->get('Comments'),


        );

        $data_Membrs=array(
            "Mem"=>$request->get('Mem'),
            "reg_no"=>$request->get('reg_no'),
            "Mem1"=>$request->get('Mem1'),
            "reg_no1"=>$request->get('reg_no1'),
            "Mem2"=>$request->get('Mem2'),
            "reg_no2"=>$request->get('reg_no2'),
            "make_group_id"=>$request->get('Project_id'),

        );

        DB::table('make_groups')->insert($data_group);

        DB::table('members')->insert($data_Membrs);


      return  redirect('/makegroupss');

    }


}
