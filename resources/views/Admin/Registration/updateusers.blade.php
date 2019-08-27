@extends('Admin.Main')
@section('contents')
    @include('sweet::alert')


    <section class="content">

    <div class="box box-info">
        <div class="box-header with-border" style="background-color: #1498ff">
            <h3 class="text-center" ><b>UPDATE USER INFORMATION</b></h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        @foreach($student as $students)
        <form class="form-horizontal" method="Post"  action="{{url('/updatedata/'.$students->id.'/save')}}">
            {{csrf_field()}}


            <div class="box-body">


            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">USER ID:</label>

                <div class="col-sm-6">
                    <input type="text" readonly class="form-control" required id="id" name="fname" value="{{$students->id}}">

                </div>
            </div>



            <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">FIRST NAME:</label>
                <span id="first_name"></span>
                    <div class="col-sm-6">
           <input type="text" class="form-control" required id="fname" name="fname" value="{{$students->Fname}}">

                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">LAST NAME:</label>
                    <span id="last_name"></span>
                    <div class="col-sm-6">
                        <input type="text" required class="form-control" id="lname" name="lname" value="{{$students->Lname}}">
                    </div>
                </div>


                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">EMAIL:</label>

                    <div class="col-sm-6">
                        <input type="email" required class="form-control" id="email" name="Email" value="{{$students->email}}">
                    </div>
                </div>


                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">DEPARTMENT:</label>

                    <div class="col-sm-6">
                        <select class="form-control" id="Department" name="Department" value="{{$students->Department}}">
                            <option>BSCS</option>
                            <option>BSSE</option>
                            <option>BSCE</option>
                            <option>BSEE</option>
                        </select>

                    </div>
                </div>


                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">USER-TYPE:</label>

                    <div class="col-sm-6">
        <select class="form-control" id="UserType" name="UserType" value="{{$students->usertype}}" >
                            <option>Student</option>
                            <option >Faculty</option>
                             <option>Admin</option>
                            <option>Evaloator</option>

                        </select>


                        <div  id="ifYes" style="display: none;">


                            <BR>
                            <div class="col-sm-6">

                                <div class="form-group">

                                    <div class="col-sm-6">
                                        <select class="form-control" id="Desigination" name="Desigination" value="{{$students->Designation}}">
                                            <option>Non</option>
                                            <option>Professor</option>
                                            <option>Associate Professo</option>
                                            <option>Assistant Professor</option>
                                            <option>Research Associate Professor</option>
                                            <option>Senior Lecturer</option>
                                        </select>



                                    </div>
                                </div>
                            </div>


                            <div class="col-sm-6">


                                <div class="col-sm-6">
                                    <select class="form-control" id="FacultyType" value="{{$students->Ftype}}" name="FacultyType">
                                        <option>Non</option>
                                        <option>Perment</option>
                                        <option>Visting</option>

                                    </select>



                                </div>
                            </div>
                        </div>

                    </div>
                </div>


                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">GENDER:</label>

                    <div class="col-sm-6">
                        <select class="form-control" id="Gender" name="Gender" value="{{$students->Gender}}">
                            <option>Male</option>
                            <option>Female</option>

                        </select>

                    </div>
                </div>





                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">PHONE NUMBER:</label>
                    <span id="Phone"></span>
                    <div class="col-sm-6">
                        <input type="number" required class="form-control" id="PhoneNumber" name="PhoneNumber" value="{{$students->Phone_Number}}">
                    </div>
                </div>









                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">PASSWORD:</label>
                    <span id="Password"></span>
                    <div class="col-sm-6">
                        <input type="password" required class="form-control" id="Passwords" name="Password" value="{{$students->password}}">
                    </div>
                </div>


                <!-- /.box-body -->
                <div class="box-footer">


                    <button type="submit" id="register" class="btn btn-info pull-right">SAVE</button>
                </div>
                <!-- /.box-footer -->
        </form>
@endforeach
    </div>
    </section>





    <script>
        $(document).ready(function(){

            $('#fname').blur(function(){
                var first_name = '';
                var fname = $('#fname').val();
                var _token = $('input[name="_token"]').val();

                var filter =/^[a-z ,.'-]+$/i;

                if(!filter.test(fname))
                {
                    $('#first_name').html('<label class="text-danger">Invalid name</label>');
                    $('#fname').addClass('has-error');
                    $('#register').attr('disabled', 'disabled');
                }
                else
                {

                    $('#first_name').html('<label class="text-success"><i class="fa fa-check"></i></label>');
                    $('#fname').removeClass('has-error');
                    $('#register').attr('disabled', false);

                }
            });

        });
    </script>

    <script>
        $(document).ready(function(){

            $('#lname').blur(function(){
                var last_name = '';
                var lname = $('#lname').val();
                var _token = $('input[name="_token"]').val();

                var filter =/^[a-z ,.'-]+$/i;

                if(!filter.test(lname))
                {
                    $('#last_name').html('<label class="text-danger">Invalid name</label>');
                    $('#lname').addClass('has-error');
                    $('#register').attr('disabled', 'disabled');
                }
                else
                {

                    $('#last_name').html('<label class="text-success"> <i class="fa fa-check"></i></label>');
                    $('#lname').removeClass('has-error');
                    $('#register').attr('disabled', false);

                }
            });

        });
    </script>



    <script>
        $(document).ready(function(){

            $('#PhoneNumber').blur(function(){
                var Phone = '';
                var PhoneNumber = $('#PhoneNumber').val();
                var _token = $('input[name="_token"]').val();

                var filter =/^((\+92)|(0092))-{0,1}\d{3}-{0,1}\d{7}$|^\d{11}$|^\d{4}-\d{7}$$/;

                if(!filter.test(PhoneNumber))
                {
                    $('#Phone').html('<label class="text-danger">Please Use This Format:0306739576</label>');
                    $('#PhoneNumber').addClass('has-error');
                    $('#register').attr('disabled', 'disabled');
                }
                else
                {

                    $('#Phone').html('<label class="text-success"><i class="fa fa-check"></i></label>');
                    $('#PhoneNumber').removeClass('has-error');
                    $('#register').attr('disabled', false);

                }
            });

        });
    </script>





    <script>
        $(document).ready(function(){

            $('#Passwords').blur(function(){
                var Password = '';
                var Passwords = $('#Passwords').val();
                var _token = $('input[name="_token"]').val();

                var filter =/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).{4,8}$/;

                if(!filter.test(Passwords))
                {
                    $('#Password').html('<label class="text-danger">6-13 upper/lower/digits</label>');
                    $('#Passwords').addClass('has-error');
                    $('#register').attr('disabled', 'disabled');
                }
                else
                {

                    $('#Password').html('<label class="text-success"><i class="fa fa-check"></i></label>');
                    $('#Passwords').removeClass('has-error');
                    $('#register').attr('disabled', false);

                }
            });

        });
    </script>





@endsection


