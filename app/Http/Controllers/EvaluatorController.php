<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Alert;
class EvaluatorController extends Controller
{

    public function profile(Request $request){


        $userid = $request->session()->get('user_email');


        $student = DB::table('users')->whereemail($userid)->get();

        return view('Evaluator.profile.profile', ['student' => $student]);



    }
public function EvaPropsalReview(){

    return view('Evaluator.FYP1.ReportReview');

}
public  function  EvaProjectList(){

    return view('Evaluator.FYP1.PendingProposals');

}

public  function  ExtrnalsEva(){


    return view('Evaluator.FYP2.Externalschedule');
}


public function toasingproposalfeedbac(Request $request){

        $data=array(
            "projecttitle"=>$request->get('projecttitle'),
            "Filetype"=>$request->get('Filetype'),
            "Supervisoremail"=>$request->get('Supervisoremail'),
            "SelectFaculty"=>$request->get('SelectFaculty'),
            "descriptioin"=>$request->get('descriptioin'),
            "Status"=>$request->get('path')

        );


            DB::table('proposal_review_assgins')->insert($data);
            Alert::success('Proposal Assgin Seccessfuly');
            return redirect('EvashowProjects');




}

public function Asginfeedbackpropsal($ProjectTitle,Request $request){

        $userid = $request->session()->get('user_email');

        $evaluator= DB::table('users')->where('email',$userid)->get();

        $project = DB::table('uploadsfaculties')->where('ProjectTitle',$ProjectTitle)->get();

        $faculty = DB::table('users')->where('usertype','Faculty')->get();

//        dd($project);die;

    return view('Evaluator.Projects.proposalfeedbcak',['project'=>$project,'faculty'=>$faculty,'evaluator'=>$evaluator]);



}



public function downloadstorefiles($path)
{

    return response()->download(storage_path('app/upload_file/FacultyUpload/files/' . $path));
}

public  function intelnalsEva(){

    return view('Evaluator.FYP2.Internalschedule');


}

public function deadlines(){





    return view('Evaluator.FYP2.Internalschedule');


}



public function projectstatuschange(Request $request){

        $changestatus=array(
        "Status"=>$request->get('changestatus')

        );
        $project=$request->get('projectTitle');


   DB::table('registered_projects')->where('Project_Title',$project)->update($changestatus);

    Alert::success('Status Changed !');
    return redirect('EvashowProjects');

}

public function AssginExternal(Request $request)
{


    $data=array(
        "Project_Title"=>$request->get('Project_Title'),
        "SupervisorEmail"=>$request->get('SupervisorEmail'),
        "Session"=>$request->get('Session'),
        "INTERNAL"=>$request->get('INTERNAL'),
        "External"=>$request->get('External')

    );



    DB::table('assgin_externals')->insert($data);
    Alert::success('SUCCESSFULLY ADD INTERLAN EVALUATIOn');
    return redirect('EvashowProjects');





}
public function AsssginInternals(Request $request){


        $data=array(
            "Project_Title"=>$request->get('Project_Title'),
            "SupervisorEmail"=>$request->get('SupervisorEmail'),
            "Session"=>$request->get('Session'),
            "INTERNAL"=>$request->get('INTERNAL')

        );


        DB::table('assgin_internals')->insert($data);
        Alert::success('SUCCESSFULLY ADD INTERLAN EVALUATIOn');
        return redirect('EvashowProjects');



}


public  function projectDeatils($Project_Title){


    $Projects=DB::table('registered_projects')->where('Project_Title',$Project_Title)->get();

    $Files= DB::table('uploadsfaculties')->where('ProjectTitle',$Project_Title)->get();

    $Faculty=DB::table('users')->where('usertype','Faculty')->get();

    $propsal=DB::table('proposal_review_assgins')->where('projecttitle',$Project_Title)->get();

    $Grades=DB::table('project_marks_addeds')->where('Title',$Project_Title)->get();

    //dd($Faculty);die;
        return view('Evaluator.Projects.ProjectDeatils',['Project'=>$Projects,'files'=>$Files,'Faculty'=>$Faculty,'propsal'=>$propsal,'Grades'=>$Grades]);


}


public  function  ProjectsList(){




    $Projects=DB::table('registered_projects')->get();


    return view('Evaluator.projects.projectList', ['Project' => $Projects]);

}





public  function Dashboard(){

    $Faculty=DB::table('users')->where('usertype','Faculty')->count();
    $Evaluator=DB::table('users')->where('usertype','Evaloator')->count();
    $regProject=DB::table('registered_projects')->count();
    $completed=DB::table('registered_projects')->where('Status','Externals')->count();


    return view('Evaluator.DashBoard');


}



public function Evachangepassword(){

    return view('Evaluator.Changepassword');

}


public function changepassword(Request $request){

    $userid = $request->session()->get('user_email');
//
//    $Evapsw = DB::table('users')->whereemail($userid)->first();


    $evPsw = DB::table('users')->where('email', $userid)->value('password');

    $oldpsw=$request->get('Oldpasssword');

    if($evPsw==$oldpsw)
    {
     if($request->get('Newpasssword')==$request->get('Retype'))
     {
         $updatedata = array(
         "password" => $request->get('Newpasssword'),
         );

         DB::table('users')->where('email', $userid)->update($updatedata);
         Alert::success('password Updated !');
         return redirect('Evachngepass');
     }


     else{
         Alert::error('MisMatch Old Newpassword You type')->persistent("Close");
         return redirect('Evachngepass');
         }

    }
    else{

        Alert::error(' Oldpassword You type is wrong')->persistent("Close");
        return redirect('Evachngepass');

    }

    }


}
