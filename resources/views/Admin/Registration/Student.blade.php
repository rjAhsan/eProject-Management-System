@extends('Admin.Main')
@section('contents')
    @include('sweet::alert')


    <section class="content">

    <div class="box box-info">
        <div class="box-header with-border" style="background-color: #1498ff">
            <h3 class="text-center" ><b>Add New User</b></h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form class="form-horizontal" method="Post"  action="{{url('/creates')}}">
            {{csrf_field()}}
            <div class="box-body">
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">First Name:</label>
                    <span id="first_name"></span>
                    <div class="col-sm-6">
                        <input type="text" required class="form-control" id="fname" name="fname" placeholder="First Name">



                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Last Name:</label>
                    <span id="last_name"></span>
                    <div class="col-sm-6">
                        <input type="text" required class="form-control" id="lname" name="lname" placeholder="Last Name">

                    </div>
                </div>


                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Email:</label>
                    <span id="error_email"></span>
                    <div class="col-sm-6">
                        <input type="email" required class="form-control" id="email" name="Email" placeholder="Email">

                    </div>
                </div>


                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Department:</label>

                    <div class="col-sm-6">
                        <select class="form-control" id="Department" name="Department">
                            <option>BSCS</option>
                            <option>BSSE</option>
                            <option>BSCE</option>
                            <option>BSEE</option>
                        </select>

                    </div>
                </div>


               <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">User-Type:</label>

                    <div class="col-sm-6">
                        <select class="form-control" id="UserType" name="UserType" >
                            <option>Student</option>
                            <option >Faculty</option>
                            <option>Evaloator</option>
                            <option>Admin</option>
                        </select>


                        <div  id="ifYes" style="display: none;">


<BR>
                            <div class="col-sm-6">

                                <div class="form-group">

                                    <div class="col-sm-6">
                                        <select class="form-control" id="Desigination" name="Desigination">
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
                                    <select class="form-control" id="FacultyType" name="FacultyType">
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
                    <label for="inputEmail3" class="col-sm-2 control-label">Gender:</label>

                    <div class="col-sm-6">
                        <select class="form-control" id="Gender" name="Gender">
                            <option>Male</option>
                            <option>Female</option>

                        </select>

                    </div>
                </div>





                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">phone Number:</label>
                    <span id="Phone"></span>
                    <div class="col-sm-6">

                        <input type="number" required class="form-control" id="PhoneNumber" name="PhoneNumber" placeholder="phone-Number">


                    </div>
                </div>









                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Password:</label>
                    <span id="Password"></span>
                    <div class="col-sm-6">
                        <input type="password"  required class="form-control" id="Passwords" name="Password" placeholder="Password">

                    </div>
                </div>


            <!-- /.box-body -->
            <div class="box-footer">


                <button type="submit" id="register" class="btn btn-info pull-right">Submit</button>
            </div>
            <!-- /.box-footer -->
        </form>


    </div>

    </section>
    <script type="text/javascript">
        function yesnoCheck(that) {
            if (that.value == "other") {
                alert("Please make sure The User Is Faculty_Member");
                document.getElementById("ifYes").style.display = "block";
            } else {
                document.getElementById("ifYes").style.display = "none";
            }
        }
    </script>
    <script>
        $(document).ready(function(){

            $('#email').blur(function(){
                var error_email = '';
                var email = $('#email').val();

                var _token = $('input[name="_token"]').val();

                var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

                if(!filter.test(email))
                {
                    $('#error_email').html('<label class="text-danger">Invalid Email</label>');
                    $('#email').addClass('has-error');
                    $('#register').attr('disabled', 'disabled');
                }
                else
                {
                    $.ajax({
                        url:"{{ url('email_available/check') }}",
                        method:"POST",
                        data:{email:email, _token:_token},
                        success:function(result)
                        {
                            if(result == 'unique')
                            {
                                $('#error_email').html('<label class="text-success">Email Available</label>');
                                $('#email').removeClass('has-error');
                                $('#register').attr('disabled', false);
                            }
                            else
                            {
                                $('#error_email').html('<label class="text-danger">Email already Available</label>');
                                $('#email').addClass('has-error');
                                $('#register').attr('disabled', 'disabled');
                            }
                        }
                    })
                }
            });

        });
    </script>
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
