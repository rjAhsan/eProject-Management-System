<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use DB;
use Image;
use Alert;
use DateTime;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Storage;

class ProjectCotroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function  userprofile(Request $request){


        $userid = $request->session()->get('user_email');


        $student = DB::table('users')->whereemail($userid)->get();



        return view('student.Profile',['student'=>$student]);

    }


    public function Ideas(Request $request){



        $student=DB::table('project_ideas')->get();

        return view('Student.Projectidea',['student' => $student]);






    }


    public function search()
    {

        return view('Student.Projectidea');

    }

//
//    public function index()
//    {
//        return view(index);
//
//    }

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



    public function SDashBoard(Request $request){

        $userid = $request->session()->get('user_email');

        $ProjectTitle=DB::table('registered_projects')->where('Member_1_email','like','%'.$userid.'%')
            ->orwhere('Member_2_email', 'like', '%'.$userid.'%')
            ->orwhere('Member_3_email', 'like', '%'.$userid.'%')->value('Status');

//dd($ProjectTitle);die;

        return view('Student.Dashboard',['Status'=>$ProjectTitle]);




    }
    public function destroy($id)
    {
        //
    }



    public function Dashboard()
    {
        return view(Student.Dashboard);
    }

    public function upload(Request $request)
    {
       $data_upload=array(
           "pro_id"=>$request->get('pro_id'),
           "pro_title"=>$request->get('pro_title'),
           "file_type"=>$request->get('file_type'),

           "File"=>$request->get('File'));

       DB::table('file_uploads')->insert($data_upload);
       echo "Sucess!!!";
    }


    public function profile()
    {

        return view($this->profile());


    }

    public function ideasearch(Request $request){

        $search=$request->get('search');

        $student=DB::table('project_ideas')->where('Ideas_Title','like','%'.$search.'%')
            ->orwhere('Faculty_Name', 'like', '%'.$search.'%')
            ->orwhere('ideas_Domain', 'like', '%'.$search.'%')->get();

        //dd($student);
      return view('Student.Projectidea',['student' => $student]);



    }

    public  function  download($Filepath){

        //$file= DB::table('project_files_storeds')->where('Filepath',$Filepath)->first();
        return response()->download(storage_path('app/upload_file/ProjectFiles/' .$Filepath));

    }


    public  function  uplodeed(Request $request){

//        dd("sssss");die;
//
        if ($request->hasFile('File')) {


            $file = $request->file('File');
        $todayDate = date("Y-m-d");

//            $now = new DateTime();
            // generate a new filename. getClientOriginalExtension() for the file extension
            $filename = $request->get('projectTitle').$todayDate.'+'.time().$request->get('FileType'). '.' . $file->getClientOriginalExtension();
//            dd($filename);die;

            $path = $file->storeAs('upload_file\ProjectFiles', $filename);

            $data_upload = array(
                "projectTitle" => $request->get('projectTitle'),
                "useremail" => $request->get('useremail'),
                "FileType" => $request->get('FileType'),
                "Filepath" => $filename,
            );
//
//dd($data_upload);die;
//
            DB::table('project_files_storeds')->insert($data_upload);


            Alert::success('File UPLODED  !');
             return redirect('uploadProjectFile');

        }
else
    Alert::error('File NOT UPLODED  !');
        return redirect('uploadProjectFile');



    }

    public  function uploadprojectfile(Request $request){

        $userid = $request->session()->get('user_email');


        $ProjectTitle=DB::table('registered_projects')->where('Member_1_email','like','%'.$userid.'%')
            ->orwhere('Member_2_email', 'like', '%'.$userid.'%')
            ->orwhere('Member_3_email', 'like', '%'.$userid.'%')->get();


        $ProjectName=DB::table('registered_projects')->where('Member_1_email','like','%'.$userid.'%')
            ->orwhere('Member_2_email', 'like', '%'.$userid.'%')
            ->orwhere('Member_3_email', 'like', '%'.$userid.'%')->value('Project_Title');


        $list = DB::table('project_files_storeds')->where('projectTitle',$ProjectName)->paginate(10);


       return view('Student.upload',['ProjectTitle' => $ProjectTitle,'userer_email'=>$userid,'lists'=> $list]);

    }


public function deadlines(){

    $student = DB::table('deadlines')->paginate(10);

    return view ('Student.Dealines',['student' => $student]);





}


public  function  proilePic(Request $request){


    if ($request->hasFile('picture')) {
        $avatar = $request->file('picture');
        $filename = $request->session()->get('user_id') . '.' . $avatar->getClientOriginalExtension();
        // dd($avatar);die();

        Image::make($avatar)->resize(300, 300)->save(public_path('/uploads/pictures/' . $filename));
//        $user = Auth::user();
//        $user->avatar = $filename;
//        $user->save();
//         dd($filename);die();


        $UserId=$request->session()->get('user_id');

        DB::table('users')->whereid($UserId)->update(['picture' => $filename]);
    return redirect('Profile');

    }

    }

    public  function  Submion(Request $request)
    {

        if ($request->hasFile('upload_file')) {


            $file = $request->file('upload_file');

            // generate a new filename. getClientOriginalExtension() for the file extension
            $filename = $request->get('PTitle'). time() . '.' . $file->getClientOriginalExtension();


            $path = $file->storeAs('upload_file', $filename);

            $data_upload = array(
                "task_id" => $request->get('Task_id'),
                "Task_Title" => $request->get('PTitle'),
                "LastDate" => $request->get('LastDate'),
                "TaskFile" => $filename,
            );

            $updateList=array(
                "Status" => 'Yes'
            );
//            dd($data_upload);die;
            $var=$request->get('Task_id');
//            dd($data_upload);die;
            DB::table('submit_tasks')->insert($data_upload);
            DB::table('tasks')->where('id',$var)->update($updateList);
            Alert::success('Task Uploded Successfully Thanks');
                    return redirect('UploadproTask');


        }
        else
            Alert::error('Please Attached Proper File');
        return redirect('UploadproTask');

    }


//
//    public function uploadFile(Request $request){
//
//        $uniqueFileName = uniqid() . $request->get('filename')->getClientOriginalName() . '.' . $request->get('filename')->getClientOriginalExtension();
//
//        $request->get('filename')->move(public_path('/uploads/files/') . $uniqueFileName);
//
//        return redirect()->back()->with('success', 'File uploaded successfully.');
//    }









    public function ProjectTask(Request $request){

        $userid = $request->session()->get('user_email');


        $ProjectTitle=DB::table('registered_projects')->where('Member_1_email','like','%'.$userid.'%')
            ->orwhere('Member_2_email', 'like', '%'.$userid.'%')
            ->orwhere('Member_3_email', 'like', '%'.$userid.'%')->value('Project_Title');


          $student=DB::table('tasks')->Where('Title',$ProjectTitle)->where('Status','No')->paginate(5);

          $student_1=DB::table('tasks')->Where('Title',$ProjectTitle)->where('Status','Yes')->paginate(5);






//        $total_Task=array();
//        $temp=array();
//        foreach ($student as $tasklist){
//
//            $to=DB::table('submit_tasks')->where('task_id',$tasklist->id)->value('id');
//            if($to==null){
//                $temp[]=$to;
//            }
//            else{
////                $too=DB::table('submit_tasks')->where('task_id',$to)->first();
//                $total_Task[]=$to;
//            }
//            }
//
//dd($total_Task);

//       $student_1=DB::table('tasks')->Where('Title',$ProjectTitle)->value('id');
//
//
//
//        $submitted=DB::table('submit_tasks')->where('task_id',$student)->get();
//
//

//dd($student);
   return view ('Student.ShowTasks',['student' => $student,'student_1' => $student_1]);



    }


        public function SubmitTask($id){

      $student=DB::table('tasks')->where('id',$id)->get();

      return view ('Student.SubmitTasks',['student' => $student]);





        }

        public function showMarks(Request $request){
            $userid = $request->session()->get('user_email');


            $ProjectTitle=DB::table('registered_projects')->where('Member_1_email','like','%'.$userid.'%')
                ->orwhere('Member_2_email', 'like', '%'.$userid.'%')
                ->orwhere('Member_3_email', 'like', '%'.$userid.'%')->first();

        $supervisor=$ProjectTitle->Supervisor_email;
        $projectname=$ProjectTitle->Project_Title;

        $propsalReview=DB::table('proposal_review_assgins')->where('projecttitle',$projectname)->get();

        $internal_1=DB::table('assgin_internals')->where('Project_Title',$projectname)->value('INTERNAL');

        $internal_2=DB::table('assgin_externals')->where('Project_Title',$projectname)->value('INTERNAL');

        $External=DB::table('assgin_externals')->where('Project_Title',$projectname)->value('External');

        $Marks=DB::table('project_marks_addeds')->where('Title',$projectname)->get();

            //// Add Internal And Extrernal Marks Also


//dd($propsalReview);die;

    return view('Student.viewmarks',[
        'supervisor'=>$supervisor,
        'propsalReview'=>$propsalReview,
        'internal_1'=>$internal_1,
        'internal_2'=>$internal_2,
        'External'=>$External,
        'Marks'=>$Marks,


    ]);

    }





       public  function spswchane(){

        return view('Student.Spswchange');

}
   public function pswchange(Request $request){
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
               return redirect('Spswchange');
           }


           else{
               Alert::error('NEw Password Not Match')->persistent("Close");
               return redirect('Spswchange');
           }

       }
       else{

           Alert::error(' Oldpassword You type is wrong')->persistent("Close");
           return redirect('Spswchange');

       }



   }



    }




