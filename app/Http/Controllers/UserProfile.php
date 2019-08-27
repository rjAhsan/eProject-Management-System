<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Alert;
use session;
class UserProfile extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $info=array(
            "Email"=>$request->get('email'),
            "password"=>$request->get('password')
        );

        $dbinfo=DB::table('users')->where($info)->first();
     

        if($dbinfo){
            $data=array(
                "user_email"=>$dbinfo->email,
                "user_password"=>$dbinfo->password,
                "user_id"=>$dbinfo->id,
                "UserType"=>$dbinfo->usertype,
                "User_Name"=>$dbinfo->Fname


            );
        //dd($data);die();
            $request->session()->put($data);

            $request->session()->get('user_email');

           if( ($userType=$request->session()->get('UserType'))=="Admin")
           //echo $val=$request->session()->get('user_id');die;
            //  print_r($data);die;
           {
            return redirect('/user-Profile');
           }
        elseif(($userType=$request->session()->get('UserType'))=="Faculty")
        {
            return redirect('/user-Faculty');
        }

           elseif(($userType=$request->session()->get('UserType'))=="Student")
           {
               return redirect('/Dashboard');
           }

           elseif(($userType=$request->session()->get('UserType'))=="Evaloator")
           {
               return redirect('/Edashboard');
           }

        }

        else{

           // Alert::error('Opps  Please Enter valid Email Or Password')->persistent("Close");
            alert()->error('please Enter Valid Email&Password', 'Oppss cant Login')->persistent("Close");
            return redirect('/login');
            }

            }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public  function logout(){

        session()->forget('user_email');
        session()->flush();
        return redirect('/login');


    }
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
