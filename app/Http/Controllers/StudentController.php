<?php

namespace App\Http\Controllers;

use App\Notifications\ePMS;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use Session;
use Illuminate\Http\Request;
//use Illuminate\Notifications\Notification;
use Validator;
use Illuminate\Support\Facades\Notification;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Collection;
use DB;
use Image;
use Alert;
use App\Notifications\Faculty;
use App\Notifications\Student;
use App\Users;
//use App\Deadlines;
class StudentController extends Controller
{
    use Notifiable;
    private $user_id;




    public function showpage(){
        return view('NEwLogin');

    }


    public function page(Request $request){

        $data = array(
            "Email"=>$request->get('email'),
            "password"=>$request->get('pwd')
        );


        dd($data);die;
    }





    public function test()
    {
        $users = DB::table('students')->count();

        return view('user1', ['students' => $users]);
    }

    public function HomePageLink()
    {
        $student = DB::table('links')->paginate(10);
        return view('Admin.HomePage.Links', ['student' => $student]);


    }

    public function HomePageLinkAdd(Request $request)
    {

        $data = array(
            "Name" => $request->get('Lname'),
            "Category" => $request->get('Category'),
            "Link" => $request->get('Link')

        );

        DB::table('links')->insert($data);

        // Alert::success('Submitted', 'The User is Registerd Successfuly');

        Alert::success('User Addded Seccessfully!');
        return redirect('/AdminHomeLink');


    }

    public function AdminHomePageLinkDelete($id)
    {

        DB::table('links')->whereid($id)->delete();
        //Alert::error('  Delete Sccessfully')->persistent("Close");
        return redirect('/AdminHomeLink');

    }


    public function HomePagePostionHolders(Request $request)
    {
        $data = array(
            "Session" => $request->get('Session'),
            "Title" => $request->get('Title'),
            "Postion" => $request->get('Postion'),
            "Supervisor" => $request->get('Supervisor'),
            "StudentS" => $request->get('Student')

        );

        DB::table('postion_holders')->insert($data);

         Alert::success('Submitted', 'The Data is Add to Main Page Successfuly');

        // Alert::success('User Addded Seccessfully!');
        return redirect('/AdminHomePostionHolder');


    }

    public function HomePagePostionHolder()
    {

        $student = DB::table('postion_holders')->paginate(5);


        return view('Admin.HomePage.PostionHolder', ['student' => $student]);


    }

    public function PostionHolders()
    {
        $student = DB::table('postion_holders')->paginate(5);

        return view('Admin.Home.PostionHolders', ['student' => $student]);


    }


    public function AddProjectsHome(){




    }

    public function AddProjectsHomePage(){


        return view('Admin.Homepage.Links');

    }

    public  function HomeMainNews(){
        $News=DB::table('add_news_links')->get();
        $postions=DB::table('postion_holders')->paginate(3);
        return view('Admin.Home.HomeMain',['News'=>$News,'postions'=> $postions]);


    }


    function check(Request $request)
    {
        if($request->get('email'))
        {
            $email = $request->get('email');
            $data = DB::table("users")
                ->where('email', $email)
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

    public function AdminHomePageDeletePostions($id){

        DB::table('postion_holders')->whereid($id)->delete();
        Alert::error('  Delete Sccessfully');

        return redirect('/AdminHomePostionHolder');



    }

    public function AdminHomePageNewsDelete($id)
    {

        DB::table('add_news_links')->whereid($id)->delete();
        //Alert::error('  Delete Sccessfully')->persistent("Close");

        return redirect('/AdminHomeNews');


    }

    public function AdminHomePageNews()
    {
        $student=DB::table('add_news_links')->paginate(10);

        return view('Admin.HomePage.News', ['student' => $student]);


    }



    public function AdminHomePageNewsAdd(Request $request)
    {

        $data = array(
            "Title" => $request->get('Title'),
            "Date" => $request->get('Date'),
            "Description" => $request->get('Description'),
            "URL"=>$request->get('Link')

        );


//
        DB::table('add_news_links')->insert($data);

        // Alert::success('Submitted', 'The User is Registerd Successfuly');


        Alert::success('Newes Add  Seccessfully!');
        return redirect('AdminHomeNews');

    }

    public function News()
    {
        $student = DB::table('news')->get();


        return view('Admin.Home.News', ['student' => $student]);


    }

    public function Links()
    {

        $student = DB::table('links')->paginate(18);
        return view('Admin.Home.importantLinks', ['student' => $student]);

    }


    public  function  SearchUsers (Request $request){


        //        $search=$request->get('search');
//
//        if($request->search)
//        {
//            $products=DB::table('users')->where('email','LIKE','%'.$request->search."%")->get();
//
//
//
//
//        if($products){
//            foreach ($products as $key => $product){
//
//         echo   '<tr><td>'.$product->id.'</td><td>'.$product->Fname.'</td><td>'.$product->Lname.'</td><td>'.$product->email .'</td><td>'.$product->usertype .'</td><td>'. $product->Department.'</td><td>'. $product->Phone_Number.'</td><td>'. $product->password.'</td><td>'. $product->Gender. '</td></tr>';
//            }
//        }
//
//        }
//
            $search=$request->get('search');
            if($request->ajax())

            {

                $output="";

                $products=DB::table('users')->where('email','LIKE','%'.$request->search."%")->get();

                if($products)

                {

                    foreach ($products as  $product) {

                        $output.='<tr>'.

                            '<td>'.$product->id.'</td>'.

                            '<td>'.$product->Fname.'</td>'.

                            '<td>'.$product->Lname.'</td>'.

                            '<td>'.$product->email.'</td>'.

                            '<td>'.$product->Department.'</td>'.

                            '<td>'.$product->usertype.'</td>'.

                            '<td>'.$product->Gender.'</td>'.


                            '<td>'.$product->Phone_Number.'</td>'.

                            '<td>'.$product->password.'</td>'.

         '<td><a href="/DeleteUser/'.$product->id.'/delete"><button type="button" class="btn btn-danger pull-right"> Delete </button></a>
<a href="/updateUsers/'.$product->id.'/edit"><button type="button" class="btn btn-info pull-right"> Edit </button></a>
         
         </td>'.



                            '</tr>';

                    }



                    return Response($output);



                }



            }



        }





    public function insert(Request $request)
    {



        $validator = Validator::make($request->all(), [
            'fname' =>  ['required',
                'regex:/^[a-z ,.\'-]+$/i'],

           'lname' => ['required',
           'regex:/^[a-z ,.\'-]+$/i'],

            'Email' =>  [  'required',
            'unique:users,email',
            'regex:/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/'],
            'PhoneNumber' =>[ 'required',
            'regex:/^((\+92)|(0092))-{0,1}\d{3}-{0,1}\d{7}$|^\d{11}$|^\d{4}-\d{7}$$/'],
           'Password' => ['required',
           'regex:/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).{4,8}$/'],


        ]);

        if ($validator->fails()) {
            Alert::error('Please Enter The Data Correctley!!..')->persistent('Close');
            return redirect('StudentReg');

        } else {

            $data = array(
                "Fname" => $request->get('fname'),
                "Lname" => $request->get('lname'),
                "email" => $request->get('Email'),
                "Department" => $request->get('Department'),
                "usertype" => $request->get('UserType'),
                "Designation" => $request->get('Desigination'),
                "Gender" => $request->get('Gender'),
                "Phone_Number" => $request->get('PhoneNumber'),
                "password" => $request->get('Password'),
                "Ftype" => $request->get('FacultyType'),


            );


            DB::table('users')->insert($data);

            Alert::success('User Addded Seccessfully!');

            return redirect('/StudentReg');

        }
    }
    public function studentNotifications(Request $request)
    {

        $data = array(
            "Title" => $request->get('NTitle'),
            "Description" => $request->get('descriptioin'),
        );
        DB::table('student__notifications')->insert($data);
        $student = DB::table('student__notifications')->get();


        // Alert::success('Submitted', 'The User is Registerd Successfuly');

        Alert::success('Notofocation Added Seccfully');
        return redirect('/SNotification');


    }

    public function fNotificationdelete($id)
    {


        DB::table('faculty__notifications')->whereid($id)->delete();
        Alert::error('Delete ')->persistent("Close");
        return redirect('/FNotification');


    }

    public function dashboardshow()
    {

        return view('Admin.DashBoard.DashBoard');

    }

    public function updatefacNotisave($id, Request $request)
    {

        $data = array(
            "Title" => $request->get('NTitle'),
            "Description" => $request->get('descriptioin'),


        );
        DB::table('faculty__notifications')->whereid($id)->update($data);
        Alert::success('Data Updated !');
        return redirect('/FNotification');


    }


    public function fNotificationedit($id)
    {

        $student = DB::table('faculty__notifications')->whereId($id)->get();
        return view('Admin.Notification.editfnori', ['student' => $student]);

    }


    public function SNotificationdelete($id)
    {


        DB::table('student__notifications')->whereid($id)->delete();
        Alert::error('Student Notificatioin Delete   Sccessfully')->persistent("Close");
        return redirect('/SNotification');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function FacultyNotifications(Request $request)
    {


        $validator = Validator::make($request->all(), [

            'NTitle' =>  ['required',
                'regex:/^(?!\d+$)(?:[a-zA-Z0-9][a-zA-Z0-9 @&$]*)?$/i',

                'unique:users_notifications,Title',

            ],

            'descriptioin' => ['required',

                'min:`15'

            ],
        ]);

        if ($validator->fails()) {
            Alert::error('Please Enter The Data Correctley!!..')->persistent('Close');

            return redirect('/FNotification');
        }
        else {
                    $data = array(
                "Title" => $request->get('NTitle'),
                "Description" => $request->get('descriptioin'),

            );

            $Notificationdata = array(
                "Title" => $request->get('NTitle'),
                "Description" => $request->get('descriptioin'),
                "UserType" => $request->get('UserTypes'),

                "NotiicationType" => $request->get('NotifficationType'),

            );


            if($request->get('NotifficationType')=="BY_EMAIL"){

                DB::table('users_notifications')->insert($Notificationdata);

                $usertype = $request->get('UserTypes');
                //dd($usertype);die();
                if ($usertype == "Student") {

                    $user = users::whereusertype($request->get('UserTypes'))->get();

                    foreach ($user as $users) {
                        //$users->notify(new Faculty($data));
                        $users->notify(new ePMS($data));
                    }

                } elseif ($usertype == "Faculty") {
                    $user = users::whereusertype($request->get('UserTypes'))->get();
                    foreach ($user as $users) {
                        //$users->notify(new Faculty($data));
                        $users->notify(new ePMS($data));
                    }


                } else {

                    //$user=Users::all();
                    //  $user = users::whereusertype("Faculty"||"Student")->get();
                    //dd($user);die();

                    $userF = users::whereusertype("Faculty")->get();
                    $userS = users::whereusertype("Student")->get();
                    foreach ($userF as $users) {
                        //$users->notify(new Faculty($data));
                        $users->notify(new ePMS($data));
                    }

                    foreach ($userS as $users) {
                        //$users->notify(new Faculty($data));
                        $users->notify(new ePMS($data));
                    }
                }

            }

            elseif ($request->get('NotifficationType')=="BY_DASHBOARD")

            {


                DB::table('users_notifications')->insert($Notificationdata);
                Alert::success('Notification Added !');
                return redirect('/FNotification');
            }

            else{


                Alert::error(" NOTIFICATION NOT SENT");
            }

            Alert::success('Notification Added !');
            return redirect('/FNotification');
        }




        //
//       $user =DB::table('users')->whereusertype("Faculty")->get();
        // foreach($users as $user){
        //  DB::insert("insert into notifications(notifiable_id)values('".$user->id."')");
        // }

        //dd($users);
        //$sendNotificatoin =DB::table('faculty__notifications')->get();

        // $users->notify(new Faculty($data));
        //dd($users);

        //$letter=collect(['title' => 'Yes this is ttile', 'body'=>'This is Body of Notification']);


        //$user = users::whereusertype($request->get('NTitle'))->get();


        //foreach ($user as $users){
        //$users->notify(new Faculty($data));
        //  $users->notify(new Student);
//}

        //    $Object = new Users;
        // $user = $Object->FindFaculty();
        //dd($user);
//        Notification::send($user,new Faculty($data));


    }


    public function ShowDeadnlinsPage(){
        $Deadlines = DB::table('deadlines')->paginate(10);

        return view('Admin.Deadlines.Proposal', ['Deadline' => $Deadlines]);




    }



    public function AddNewDeadlines(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'Title' =>  ['required',
                'regex:/^[a-z ,.\'-]+$/i',

                'unique:deadlines,Title',

            ],

            'descriptioin' => ['required',

                'min:`15'

            ],


        ]);

        if ($validator->fails()) {

            Alert::error('NOTADD', 'PLEASE MAKE SURE THE 1)TITLE Must be UNIQUE.  2)SHORT DESCRIPTION Must be Added  ')->persistent('Close');
            return redirect('/Adddeadlin');


        } else {

            $data = array(
                "Title" => $request->get('Title'),
                "LastDate" => $request->get('LastDate'),
                "UserTypes" => $request->get('UserTypes'),
                "DeadlineTypes" => $request->get('DeadlineTypes'),
                "descriptioin" => $request->get('descriptioin')
            );

            DB::table('deadlines')->insert($data);

            Alert::success('Submitted', 'Deadlines send Successfuly');


            return redirect('/Adddeadlin');

        }







    }

    public function ListDeadlines()
    {
        $Deadlines = DB::table('deadlines')->paginate(10);

        return view('Admin.Deadlines.report1', ['Deadline' => $Deadlines]);

    }

    public function deletedeadline($id)
    {
        DB::table('deadlines')->delete($id);
        Alert::success('DELETED', 'Deadlines DELETE Successfuly');

        return redirect('/Adddeadlin');

    }

    public function FNotificationView()
    {


        $student = DB::table('users_notifications')->paginate(10);


       return view('Admin.Notification.FacultyNoti', ['student' => $student]);

    }

    public function SNotificationView()
    {

        $student = DB::table('student__notifications')->get();

        return view('Admin.Notification.StudentNoti', ['student' => $student]);


    }

    public function updatestdnotifi($id)
    {

        $student = DB::table('student__notifications')->whereId($id)->get();
        return view('Admin.Notification.editsnori', ['student' => $student]);

    }

    public function updatestdNotisave($id, Request $request)
    {


        $data = array(
            "Title" => $request->get('NTitle'),
            "Description" => $request->get('descriptioin'),


        );
        DB::table('student__notifications')->whereid($id)->update($data);
        Alert::success('Data Updated !');
        return redirect('/SNotification');


    }


    //

    public function useralert()
    {


        return view('Admin.Sweetlerts');
    }


    public function janog()
    {
        $student=DB::table('users')->where('usertype','Student')->count();
        $Faculty=DB::table('users')->where('usertype','Faculty')->count();
        $Evaluator=DB::table('users')->where('usertype','Evaloator')->count();
        $regProject=DB::table('registered_projects')->count();
        $totalUsers=DB::table('users')->count();

//dd($student);

       return view('Admin.DashBoard.DashBoard',['student'=>$student,'Faculty'=>$Faculty,'Evaluator'=>$Evaluator,'regProject'=>$regProject,'totalUsers'=>$totalUsers]);


    }

    public function SupervisorRules()
    {

        return view('Admin.Home.SupervisorSOP');

    }

    public function EvaluationRules()
    {

        return view('Admin.Home.EvaluationSOP');

    }

    public function StudentRules()
    {

        return view('Admin.Home.StudentsSOP');

    }


    public  function ACLerror(){
        Alert::error('Please Login  to Another User or May be Enter Correct URL')->persistent("Close");
        return view('Admin.errors.ACLError');



    }


    public function index()
    {

        return view('Admin.login');
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


    public function model()
    {

        echo " thsi is conteroler model ";

    }


    public function store(Request $request)
    {

        $info = array(
            "Email" => $request->get('email'),
            "password" => $request->get('password')
        );

        //print_r($info);die;
        $info = DB::table('students')->where($info)->first();

        //dd($info);die;


        if ($info) {

            $userdata = array(
                "user_email" => $info->Email,
                "user_password" => $info->password

            );

            $request->session()->put($userdata);
            $request->session()->get('user_email');
            return redirect("/student-profile");
        } else {
            echo " not aOk";
        }
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

    }

    public function shows()
    {
        $student = DB::table('users')->paginate(8);

        return view('Admin.Registration.ListUser', ['student' => $student]);

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




    public function RegisterdProjectList(){


        $projects=DB::table('registered_projects')->paginate(10);


        return view('Admin.mpg.ProjectsList',['projects'=>$projects]);

    }

    public function updateusers($id)
    {
        $student = DB::table('users')->whereId($id)->get();
        return view('Admin.Registration.updateusers', ['student' => $student]);


    }

    public function updateuserssave($id, Request $request)
    {

        $validator = Validator::make($request->all(), [
            'fname' =>  ['required',
                'regex:/^[a-z ,.\'-]+$/i'],

            'lname' => ['required',
                'regex:/^[a-z ,.\'-]+$/i'],


            'PhoneNumber' =>[ 'required',
                'regex:/^((\+92)|(0092))-{0,1}\d{3}-{0,1}\d{7}$|^\d{11}$|^\d{4}-\d{7}$$/'],

            'Password' => ['required',
                'regex:/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).{4,8}$/'],


        ]);

        if ($validator->fails()) {
            Alert::error('Please Enter The Data Correctley!!..')->persistent('Close');
            return redirect('/List-user');
        } else {

            $data = array(
                "Fname" => $request->get('fname'),
                "Lname" => $request->get('lname'),
                "email" => $request->get('Email'),
                "Department" => $request->get('Department'),
                "usertype" => $request->get('UserType'),
                "Designation" => $request->get('Desigination'),
                "Gender" => $request->get('Gender'),
                "Phone_Number" => $request->get('PhoneNumber'),
                "password" => $request->get('Password'),
                "Ftype" => $request->get('FacultyType'),


            );

            DB::table('users')->whereid($id)->update($data);
            Alert::success('Data Updated !');
            return redirect('/List-user');


        }












    }

    public function userprofile(Request $request)
    {

        $userid = $request->session()->get('user_email');


        $student = DB::table('users')->whereemail($userid)->get();

        return view('Admin.profile.profile', ['student' => $student]);


    }

    public function userdelete($id)
    {
        DB::table('users')->whereid($id)->delete();


        Alert::error('User Delete Sccessfully')->persistent("Close");


        return redirect('/List-user');


    }


    public function userprofilepictur(Request $request)
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

            $UserId=$request->session()->get('user_id');

           DB::table('users')->whereid($UserId)->update(['picture' => $filename]);
            return redirect('/AdminUserPro');

        }

    }


public  function  Requestedprojectlist(){

    $student = DB::table('request_projects')->paginate(10);
    return view('Admin.mpg.Addpro', ['student' => $student]);



}


public  function  ProRejection($id){

       $student = DB::table('request_projects')->whereid($id)->get();

        return view('Admin.mpg.Rejection', ['student' => $student]);


}



public  function  rejesctionreason(Request $request){

    $updatedata = array(
        "Title" => $request->get('fname'),
        "Supervisor_email" => $request->get('lname'),
        "descriptioin" => $request->get('descriptioin'),

    );



    DB::table('req_rejections')->insert($updatedata);

    DB::table('request_projects')->whereTitle($request->get('fname'))->delete();



    Alert::success('Rejected  !');
    return redirect('AddnewGrop');


}

public function DeleteProjectRequest($id){

    $student = DB::table('request_projects')->whereid($id)->delete();

    Alert::error('Deleted Seccessfully!');
    return redirect('AddnewGrop');

}

public  function  AcceptProject($id){

    $student = DB::table('request_projects')->whereid($id)->get();


        return view('Admin.mpg.AcceptRequest', ['student' => $student]);


}

public function Addprojects(Request $request){

    $projectdata = array(
        "Project_Title" => $request->get('Title'),
        "Session" => $request->get('session'),
        "Domain" => $request->get('Domain'),
        "Project_Type" => $request->get('ProjectType'),
        "Supervisor_email" => $request->get('Supervisor_email'),
        "Member_1_email" => $request->get('reg_no'),
        "Member_2_email" => $request->get('reg_no1'),
        "Member_3_email" => $request->get('reg_no2'),
        "Status" => $request->get('status')

    );

    DB::table('registered_projects')->insert($projectdata);

    DB::table('request_projects')->whereTitle($request->get('Title'))->delete();



    Alert::success('Project Addded Seccessfully!');
    return redirect('/AddnewGrop');
}


}