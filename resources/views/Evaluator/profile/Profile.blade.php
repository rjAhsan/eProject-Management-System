@extends('Evaluator.EMain')
@section('contents')

    <div class="content">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                @foreach($student as $students)

                @endforeach

            </h1>

        </section>

        <!-- Main content -->

        <section class="content">
            <div class="box box-info">

                <div class="box-header" style="background-color: #0fb4ff">
                    <h3 class="text-left"><b>{{$students->Fname}}'s Profile</b></h3>
                </div>
                <div class="row">
                    <div class="col-md-12 col-md-offset-0">
                        <img src="/uploads/pictures/{{$students->picture}}" style="width:150px; height:150px; float:right; border-radius:50%; margin-right:25px;">

                        <form enctype="multipart/form-data" action="{{url('/userprofilepic')}}" method="POST">
                            <br>
                            <label>Update Profile Image</label>
                            <br>
                            <br>
                            <input type="file" name="picture">

                            <br>

                            <input type="hidden" name="_token" value="{{ csrf_token() }}">


                            <input type="submit" class="pull-left btn btn-sm btn-primary">

                        </form>
                    </div>
                    <div class="col-md-12">

                        <!-- /.box -->

                        <!-- About Me Box -->
                        <div class="box box-primary">

                            <!-- /.box-header -->

                            <div class="box-body">
                                @foreach($student as $students)
                                    <strong><i class="fa fa-male margin-r-5"></i>First Name</strong>

                                    <p class=" text-center">
                                        <b>    {{$students->Fname}}</b>
                                    </p>

                                    <hr>

                                    <strong><i class="fa fa-child margin-r-5"></i>Last Name</strong>

                                    <p class="text-center">
                                        <b>  {{$students->Lname}}</b>
                                    </p>

                                    <hr>
                                    <strong><i class="fa fa-envelope margin-r-5"></i>Email</strong>

                                    <p class=" text-center">
                                        <b>
                                            {{$students->email}}
                                        </b>
                                    </p>

                                    <hr>
                                    <strong><i class="fa fa-object-group margin-r-5"></i>User-Type</strong>

                                    <p class="text-center">
                                        <b>{{$students->usertype}}</b>
                                    </p>
                                    <hr>
                                    <strong><i class="fa fa-book margin-r-5"></i>Department</strong>

                                    <p class="text-center">
                                        <b>{{$students->Department}}</b>
                                    </p>
                                    <hr>
                                    <strong><i class="fa fa-group margin-r-5"></i>Gender</strong>

                                    <p class=" text-center">
                                        <b>{{$students->Gender}}</b>
                                    </p>


                                    <hr>

                                    <strong><i class="fa  fa-phone margin-r-5"></i>Phone Number</strong>

                                    <p class="text-center">
                                        <b>{{$students->Phone_Number}}</b>
                                    </p>


                                    <hr>


                                @endforeach
                            </div>
                            <!-- /.box-body -->

                        </div>

                        <!-- /.box -->
                    </div>
                    <!-- /.col -->

                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
        </section>
        <!-- /.content -->
    </div>



@endsection