<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Users;
class LassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index2(){

        return view('user1');

    }


    public function index()
    {

     //   $name=$_POST['name'];
       // $id=$_POST['id'];
     //   $department=$_POST['dep'];
     ///   $email=$_POST['email'];
       // $password=$_POST['pass'];

        //      DB::insert("insert into users(name,id, department,email,password)
        //      values ('$name','$id', '$department','$email','$password')");

      //  DB::table('users')->insert([
        //    'name' => 'User1',
          //  'id' => '123',
            //'department' => '123',
          //  'email' => 'user@gmail.com',

            //'password' => bcrypt('password'),
      //  ]);


         $name=$_POST['name'];

         $id=$_POST['id'];

         $email=$_POST['email'];
         $password=$_POST['pass'];

              DB::insert("insert into users( name ,id , department,email,password)
              values ('$name','$id', '$department','$email','$password')");




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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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

public function login(){


        return view('login');
}

public function loginprocess(Request $request)
{
    $Email=$request->get('Email');
    $password=$request->get('password');

    $checkuser = Users::selectRaw("count(*) as Total")->where('Email','=',$Email)->first();

    if(intval($checkuser->Total) > 0){


        $getpassword=Users::selectRaw("password")->where('Email','=',$Email)->first();

        if(password_verify($password,$getpassword->password)){
            $request->session()->set('Email',$Email);
            return redirect('/user1');
            }else{
                return redirect('/login');
        }




    }else{
        return redirect('/login');

    }




}







}
