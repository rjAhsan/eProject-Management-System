<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use DB;
class Users extends Model
{
    //
    use Notifiable;

    public $timestamps = false;



public function FindFaculty(){

    $user =DB::table('users')->whereusertype("Faculty")->get();

    return $user;



}

}