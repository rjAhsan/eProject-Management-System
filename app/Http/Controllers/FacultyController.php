<?php

namespace App\Http\Controllers;
use DB;
use Validator;

use Illuminate\Http\Request;
use Image;
use Alert;
class FacultyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */



    public function chcekmem3(Request $request){

        if($request->get('reg_no2'))
        {
            $email = $request->get('reg_no2');
            $data = DB::table('registered_projects')
                ->orwhere('Member_1_email', $email)
                ->orwhere('Member_2_email', $email)
                ->orwhere('Member_3_email', $email)
                ->count();
            if($data > 0)
            {
                echo 'not_unique';
            }
            else
            {
                echo 'unique';
            }
        }


    }




    public function chcekmem2(Request $request){

        if($request->get('reg_no1'))
        {
            $email = $request->get('reg_no1');
            $data = DB::table('registered_projects')
                ->orwhere('Member_1_email', $email)
                ->orwhere('Member_2_email', $email)
                ->orwhere('Member_3_email', $email)
                ->count();
            if($data > 0)
            {
                echo 'not_unique';
            }
            else
            {
                echo 'unique';
            }
        }


    }


    public function chcekmem1(Request $request){

        if($request->get('reg_no'))
        {
            $email = $request->get('reg_no');
            $data = DB::table('registered_projects')
                ->orwhere('Member_1_email', $email)
                ->orwhere('Member_2_email', $email)
                ->orwhere('Member_3_email', $email)
                ->count();
            if($data > 0)
            {
                echo 'not_unique';
            }
            else
            {
                echo 'unique';
            }
        }


    }



    public function chcekPTitle(Request $request){

        if($request->get('Title'))
        {
            $email = $request->get('Title');
            $data = DB::table('registered_projects')
                ->where('Project_Title', $email)
                ->count();
            if($data > 0)
            {
                echo 'not_unique';
            }
            else
            {
                echo 'unique';
            }
        }


    }


public  function registrationProject(){


    return view('Faculty.projectRegistration.projectreg');

}





    public function Addprojectidea(Request $request)

    {

        $validator = Validator::make($request->all(), [
            'Title' => 'required',


        ]);

        if ($validator->fails()) {
            alert::error('error');
            return redirect('addnewideas');

        }
else {
    $data = array(
        "ideas_Title" => $request->get('Title'),
        "ideas_Domain" => $request->get('Domain'),
        "project_type" => $request->get('ProjectType'),
        "ideas_Description" => $request->get('descriptioin'),
        "Faculty_Name" => $request->session()->get('user_email'),
        "Faculty_id" => $request->session()->get('user_id')


    );
    //dd($data);


    DB::table('project_ideas')->insert($data);

    Alert::success('Added  !');
    return view('Faculty.ideas.addnewidea');
}


    }

    public function IdeasList(Request $request)
    {
        $data = $request->session()->get('user_id');


        $student = DB::table('project_ideas')->whereFaculty_id($data)->get();


        return view('Faculty.ideas.showidea', ['student' => $student]);

    }


    public function index(Request $request)
    {
        $Fid=$request->session()->get('user_email');

        $totalreg_projects=DB::table('registered_projects')->where('Supervisor_email',$Fid)->count();
        $project_ideas=DB::table('project_ideas')->where('Faculty_Name',$Fid)->count();
        $comleted=DB::table('registered_projects')->where('Supervisor_email',$Fid)
            ->where('Status','Completed')->count();

//        dd($totalreg_projects);die;

        return view('Faculty.dashboard.Fdashboard',['totalproject'=>$totalreg_projects,'completed'=>$comleted,'ideas'=>$project_ideas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function Logout()
    {

        session()->forget('user_email');
        session()->flush();
        return redirect('/login');


    }

    public function Profile(Request $request)
    {

        $data = $request->session()->get('user_id');


        $student = DB::table('users')->whereid($data)->get();


        return view('Faculty.profile.profile', ['student' => $student]);


    }

    public function Deadlines()
    {
        $student = DB::table('deadlines')->paginate(10);

        return view('Faculty.Dealines.Dealines', ['student' => $student]);


    }


    public function Profilepicture(Request $request)
    {

        if ($request->hasFile('picture')) {
            $avatar = $request->file('picture');
            $filename = $request->session()->get('user_id') . '.' . $avatar->getClientOriginalExtension();
            // dd($avatar);die();

            Image::make($avatar)->resize(300, 300)->save(public_path('/uploads/pictures/' . $filename));
//        $user = Auth::user();
//        $user->avatar = $filename;
//        $user->save();
//         dd($filename);die();

            $UserId = $request->session()->get('user_id');

            DB::table('users')->whereid($UserId)->update(['picture' => $filename]);

            return redirect('facultyUserPro');


        }

    }

    public function ProTask($id){


        $Projects=DB::table('registered_projects')->whereid($id)->get();

        return view('Faculty.task.addtasks', ['Project' => $Projects]);


    }



    public function  Meetings($id){

        $Projects=DB::table('registered_projects')->whereid($id)->get();

        return view('Faculty.meeting.addmeeting', ['Project' => $Projects]);



    }


public  function  AddNewMeeting(Request $request){

    $data = array(
        "Title" => $request->get('Title'),
        "Date" => $request->get('Date'),
        "description" => $request->get('descriptioin')

    );

    DB::table('meetings')->insert($data);

    Alert::success('Task Added  !');
    return redirect('/ProjectsSupervision');


}


public  function Addprojectmarks($id){

    $Projects=DB::table('registered_projects')->whereid($id)->get();

    return view('Faculty.feedback.addfeedback', ['Project' => $Projects]);


}

public  function AddMarks(Request $request){


$project=$request->get('Title');
      $evaType=$request->get('Evluation_type');
      if($evaType=='Report_1'){


    $var1=$request->get('Importance');
    $var2=$request->get('existing');
    $var3=$request->get('objectives');
    $var4=$request->get('architecture');
    $var5=$request->get('presentation');
    $var6=$var1+$var2+$var3+$var4+$var5;
    $result=$var6/6;

          $report1 = array(
              "Report_1"=>$result,
              "Title"=>$request->get('Title'),
              "Comments"=>$request->get('descriptioin')

          );


          DB::table('project_marks_addeds')->where('Title',$project)->update($report1);

          Alert::success('Marks Added  ');
          return redirect('/ProjectsSupervision');



      }
elseif($evaType=='Report_2')
{

    $var1=$request->get('Importance');
    $var2=$request->get('existing');
    $var3=$request->get('objectives');
    $var4=$request->get('architecture');
    $var5=$request->get('presentation');
    $var6=$var1+$var2+$var3+$var4+$var5;
    $result=$var6/6;


    $report1 = array(
        "Report_2"=>$result,
        "Title"=>$request->get('Title'),
        "Comments"=>$request->get('descriptioin')

    );


    DB::table('project_marks_addeds')->where('Title',$project)->update($report1);

    Alert::success('Marks Added  ');
    return redirect('/ProjectsSupervision');




}

      elseif($evaType=='Supervisor_Internal')
      {

          $var1=$request->get('Importance');
          $var2=$request->get('existing');
          $var3=$request->get('objectives');
          $var4=$request->get('architecture');
          $var5=$request->get('presentation');
          $var6=$var1+$var2+$var3+$var4+$var5;
          $result=$var6/2;


          $report1 = array(
              "Supervisor_Internal"=>$result,
              "Title"=>$request->get('Title'),
              "Comments"=>$request->get('descriptioin')

          );


          DB::table('project_marks_addeds')->where('Title',$project)->update($report1);

          Alert::success('Marks Added  ');
          return redirect('/ProjectsSupervision');



      }



      elseif($evaType=='Supervisor_exxternal')
      {

          $var1=$request->get('Importance');
          $var2=$request->get('existing');
          $var3=$request->get('objectives');
          $var4=$request->get('architecture');
          $var5=$request->get('presentation');
          $var6=$var1+$var2+$var3+$var4+$var5;
          $result=$var6/2;





          $report1 = array(
              "Supervisor_exxternal"=>$result,
              "Title"=>$request->get('Title'),
              "Comments"=>$request->get('descriptioin')

          );


          DB::table('project_marks_addeds')->where('Title',$project)->update($report1);

          Alert::success('Marks Added  ');
          return redirect('/ProjectsSupervision');

      }






}


public function AddExternalGrades($Project_Title){


    return view('Faculty.projects.ExternalsgradesAdd',['Title'=>$Project_Title]);

}

public  function  addgradesInternals($Project_Title){

        return view('Faculty.projects.AddinternalsGrades',['Title'=>$Project_Title]);


}


public function addeternalsgrades(Request $request){

    $project=$request->get('Title');
    $var1=$request->get('Importance');
    $var2=$request->get('existing');
    $var3=$request->get('objectives');
    $var4=$request->get('architecture');
    $var5=$request->get('presentation');

    $var6=$var1+$var2+$var3+$var4+$var5;
    $internals=$var6/2;


    $data_1=array(
        "INTERNAL_Grades"=>$internals,
        "INTERNAL_Comments"=>$request->get('descriptioin'),

    );
    $data_2=array(
        "internal_2"=>$internals
    );

    DB::table('project_marks_addeds')->where('Title',$project)->update($data_2);

    DB::table('assgin_externals')->where('Project_Title',$project)->update($data_1);

    return redirect('FacultyEvaluation');



}

public function submitinternalsgradeone(Request $request){

    $project=$request->get('Title');
    $var1=$request->get('Importance');
    $var2=$request->get('existing');
    $var3=$request->get('objectives');
    $var4=$request->get('architecture');
    $var5=$request->get('presentation');

    $var6=$var1+$var2+$var3+$var4+$var5;
    $internals=$var6/2;

    $data_1=array(
        "Grades"=>$internals,
        "Comments"=>$request->get('descriptioin'),

    );
    $data_2=array(
        "internal_1"=>$internals,
        "Title"=>$request->get('Title'),
    );

    DB::table('project_marks_addeds')->insert($data_2);

    DB::table('assgin_internals')->where('Project_Title',$project)->update($data_1);
    Alert::success('Marks Added');
    return redirect('FacultyEvaluation');

}



public function EvaluationProjects(Request $request){


    $Fid=$request->session()->get('user_email');

    $Proposal=DB::table('proposal_review_assgins')->where('SelectFaculty',$Fid)->get();
    $Internal=DB::table('assgin_internals')->where('INTERNAL',$Fid)->get();
    $External=DB::table('assgin_externals')->where('INTERNAL',$Fid)->get();
    //dd($Eternal);die;

    return view('Faculty.projects.Evaluation',['Proposal'=>$Proposal,'Internal'=>$Internal,'External'=>$External]);

}


public function  submittoCommite(Request $request){


    if ($request->hasFile('File')) {
        $file = $request->file('File');
        $filename = $request->get('ProjectTitle'). time() . '.' . $file->getClientOriginalExtension();

        $path = $file->storeAs('upload_file\FacultyUpload\files', $filename);
        $data = array(
            "ProjectTitle" => $request->get('ProjectTitle'),
            "Supervisoremail" => $request->get('superviseremail'),
            "FileType" => $request->get('FileType'),
            "Date" => $request->get('Date'),
            "path" => $filename


        );

        DB::table('uploadsfaculties')->insert($data);
        Alert::success('Uploded');
        return redirect('FFoploadProFiles');

        }


         Alert::error('Please Attached File Correctly..');
         return redirect('FFoploadProFiles');





}


public function deleteideafac($id){

   $data=DB::table('project_ideas')->where('id',$id)->delete();
   Alert::error('Idea Delated Successfully');
   return  redirect('listidea');


// dd($data);die;

   }

public  function ffileupload(Request $request){


    $Fid=$request->session()->get('user_email');


    $Projects=DB::table('registered_projects')->whereSupervisor_email($Fid)->get();
    $uploedfiles=DB::table('uploadsfaculties')->where('Supervisoremail',$Fid)->get();

    return view('Faculty.projects.fileupload', ['Project' => $Projects,'fid'=>$Fid,'files'=>$uploedfiles]);




}




    public  function  AddTask(Request $request){

        $data = array(
            "Title" => $request->get('Title'),
            "Date" => $request->get('LastDate'),
            "Type" => $request->get('TaskTypes'),
            "description" => $request->get('descriptioin'),
            "Status" => $request->get('subitted')
        );

        DB::table('tasks')->insert($data);

        Alert::success('Task Added  !');
        return redirect('/ProjectsSupervision');

    }

    public function SubmitproposalReview(Request $request){

        $review=array(
          "Comments"=>$request->get('Comments'),

        );

        $Reviw =DB::table('proposal_review_assgins')->where('projecttitle',$request->get('Title'))
        ->where('Supervisoremail',$request->get('supervisor'))
         ->where('SelectFaculty',$request->get('selectfaculty'))
        ->update($review);

    return redirect('FacultyEvaluation');


    }


    public function proposalReviwAdd($projecttitle){

            $propsal=DB::table('proposal_review_assgins')->where('projecttitle',$projecttitle)->first();



//dd($propsal);die;

        return view('Faculty.projects.AddproposalReview',['propsal'=>$propsal]);



    }






    public  function  ProjectAction($Project_Title){

        $Project=DB::table('registered_projects')->where('Project_Title',$Project_Title)->get();
        return view('Faculty.projects.projectstatus', ['Project' => $Project]);

    }


    public function downloadproposal($Status){
        return response()->download(storage_path('app/upload_file/FacultyUpload/files/' .$Status));


    }

    public function  downloadfile($TaskFile){
        return response()->download(storage_path('app/upload_file/' .$TaskFile));



    }
    public function filedownloads($Filepath){
        return response()->download(storage_path('app/upload_file/ProjectFiles/' .$Filepath));





    }

public  function  fdownloadfiles($path){
    return response()->download(storage_path('app/upload_file/FacultyUpload/files/' .$path));



}

    public  function Actionss($Project_Title){

        $list=DB::table('registered_projects')->where('Project_Title',$Project_Title)->get();

        $files = DB::table('project_files_storeds')->where('projectTitle',$Project_Title)->get();

        $tasks = DB::table('submit_tasks')->Where('Task_Title',$Project_Title)->get();

        $reviews=DB::table('proposal_review_assgins')->where('projecttitle',$Project_Title)->get();
//dd($reviews);die;

        return view('Faculty.projects.Projects',['Project'=>$list,'files'=>$files,'Tasks'=>$tasks,'Reviews'=>$reviews]);

    }



    public function RegisterdProjects(Request $request)

    {


        $Fid=$request->session()->get('user_email');


        $Projects=DB::table('registered_projects')->whereSupervisor_email($Fid)->get();



        return view('Faculty.projects.ProjectAction', ['Project' => $Projects]);



    }
    public function ProjectLists (Request $request){

        $Fid=$request->session()->get('user_email');


        $Projects=DB::table('registered_projects')->whereSupervisor_email($Fid)->get();


        return view('Faculty.projects.projectstatus', ['Project' => $Projects]);



    }




public  function  RequestedProjects(Request $request){


        $Fid=$request->session()->get('user_email');

        $data=DB::table('make_groups')->Where('Faculty_id','=', $Fid)->first();

        $data2=DB::table('members')->Where('make_group_id','=',$data->Project_id)->first();

        return view('Faculty.projects.acceptproject', ['data'=>$data,'data2'=>$data2]);


    }


    public function fpswchange(){

        return view('Faculty.fpswchange');


    }


    public function changepswf(Request $request){

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
                return redirect('fpswChange');
            }


            else{
                Alert::error('MisMatch Old Newpassword You type')->persistent("Close");
                return redirect('fpswChange');
            }

        }
        else{

            Alert::error(' Oldpassword You type is wrong')->persistent("Close");
            return redirect('fpswChange');

        }



    }


    public  function requestforrgproject(Request $request){

        $updatedata = array(
            "Title" => $request->get('Title'),
            "Domain" => $request->get('Domain'),
            "Project_Type" => $request->get('ProjectType'),
            "Supervisor_email" => $request->session()->get('user_email'),
            "member_email_1" => $request->get('reg_no'),
            "member_email_2" => $request->get('reg_no1'),
            "member_email_3" => $request->get('reg_no2'),
            "descriptioin" => $request->get('descriptioin'),

        );
//
//dd($updatedata);

        DB::table('request_projects')->insert($updatedata);
        Alert::success(' Request Send To Admin!');
        return redirect('facultyprojectRegestration');

    }


    public  function RejectionList(Request $request){

        $email= $request->session()->get('user_email');


        $student=DB::table('req_rejections')->Where('Supervisor_email','=',$email)->get();

        return view('Faculty.projects.projectList', ['student'=>$student]);




    }


}