@extends('Faculty.FMain')
@section('contents')

        @include('sweet::alert')
        <section class="content">

                <div class="box box-info">
                        <div class="box-header with-border" style="background-color: #0fb4ff">
                                <h3 class="text-center">Project Registration</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form class="form-horizontal" method="Post"  action="{{url('/requesttoregproject')}}">
                                {{csrf_field()}}
                                <div class="box-body">
                                        <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-2 control-label">Project Title :</label>

                                                <div class="col-sm-6">
                                                        <input type="text"  required class="form-control" id="Title" name="Title" placeholder=" Title">
                                                        <span id="error_email"></span>
                                                </div>
                                        </div>





                                        <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-2 control-label">Project Domain:</label>

                                                <div class="col-sm-6">
                                                        <select class="form-control" id="Domain" name="Domain">
                                                                <option>AI</option>
                                                                <option>Communication Networks</option>
                                                                <option>Software Engineering</option>
                                                                <option>Vision,image&Graphics</option>
                                                                <option>Web Devlopment</option>
                                                                <option>Android</option>
                                                                <option>Cyber Security</option>
                                                        </select>

                                                </div>
                                        </div>



                                        <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-2 control-label">Project Type:</label>

                                                <div class="col-sm-6">
                                                        <select class="form-control" id="ProjectType" name="ProjectType">
                                                                <option>Research </option>

                                                                <option>Devlopment</option>

                                                                <option>Research & Devlopment</option>
                                                        </select>

                                                </div>
                                        </div>






                                        <div class="form-group">
                                                <label for="inputPassword3" class="col-sm-2 control-label">GroupLeader Email:</label>

                                                <div class="col-sm-6">
                                                        <input type="email" required class="form-control" id="reg_no"    name="reg_no" >
                                                    <span id="error_mem1"></span>
                                                </div>
                                        </div>
                                        <div class="btn btn-primary float-right" onclick="showMember()">Add Member+</div>
                                        <div id="mem1" class="hidden">

                                                <div class="form-group">
                                                        <label for="inputPassword3" class="col-sm-2 control-label">Second Member Email:</label>

                                                        <div class="col-sm-6">
                                                                <input type="email"  class="form-control"  id="reg_no1"  name="reg_no1" >
                                                            <span id="error_mem2"></span>
                                                        </div>
                                                </div>
                                        </div>
                                        <div id="mem2" class="hidden">

                                                <div class="form-group">
                                                        <label for="inputPassword3" class="col-sm-2 control-label">3rd Member Email:</label>

                                                        <div class="col-sm-6">
                                                                <input type="email"  class="form-control"  id="reg_no2"  name="reg_no2" >
                                                            <span id="error_mem3"></span>
                                                        </div>
                                                </div>
                                        </div>

                                        <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-2 control-label">Description</label>

                                                <div class="col-sm-6">

                <textarea id="descriptioin" required name="descriptioin" rows="20" cols="20" >
                                            Please Shortly Describe Yoour Project Objctives And Scope
                    </textarea>

                                                </div>
                                        </div>







                                        <!-- /.box-body -->
                                        <div class="box-footer">


                                                <button type="submit" id="register" class="btn btn-info pull-right">Add</button>
                                        </div>
                                        <!-- /.box-footer -->
                        </form>
                </div>

        </section>
        <script>
            $(function () {
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace('descriptioin')
                //bootstrap WYSIHTML5 - text editor

            })
        </script>

        <script type="text/javascript">
            function showMember(){
                if(document.getElementById("mem1").classList.contains("hidden")){
                    document.getElementById("mem1").classList.remove("hidden");

                }
                else if(document.getElementById("mem2").classList.contains("hidden")){
                    document.getElementById("mem2").classList.remove("hidden");
                }
                // alert("show member");


            }

        </script>

        <script>
            $(document).ready(function(){

                $('#Title').blur(function(){
                    var error_email = '';
                    var Title = $('#Title').val();
                    var _token = $('input[name="_token"]').val();

                     var filter = /^[a-z ,.'-]+$/i;

                    if(!filter.test(Title))
                    {
                        $('#error_email').html('<label class="text-danger">Invalid Name</label>');
                        $('#Title').addClass('has-error');
                        $('#register').attr('disabled', 'disabled');
                    }
                    else
                    {
                        $.ajax({
                            url:"{{ url('project_available/check') }}",
                            method:"POST",
                            data:{Title:Title, _token:_token},
                            success:function(result)
                            {
                                if(result == 'unique')
                                {
                                    $('#error_email').html('<label class="text-success">Project Title Available</label>');
                                    $('#Title').removeClass('has-error');
                                    $('#register').attr('disabled', false);
                                }
                                else
                                {
                                    $('#error_email').html('<label class="text-danger">Project Title not Available</label>');
                                    $('#Title').addClass('has-error');
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

                $('#reg_no').blur(function(){
                    var error_mem1 = '';
                    var reg_no = $('#reg_no').val();
                    var _token = $('input[name="_token"]').val();

                    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

                    if(!filter.test(reg_no))
                    {
                        $('#error_mem1').html('<label class="text-danger">Invalid Email</label>');
                        $('#reg_no').addClass('has-error');
                        $('#register').attr('disabled', 'disabled');
                    }
                    else
                    {
                        $.ajax({
                            url:"{{ url('projectMembers_available/check') }}",
                            method:"POST",
                            data:{reg_no:reg_no, _token:_token},
                            success:function(result)
                            {
                                if(result == 'unique')
                                {
                                    $('#error_mem1').html('<label class="text-success">you can Add this User </label>');
                                    $('#reg_no').removeClass('has-error');
                                    $('#register').attr('disabled', false);
                                }
                                else
                                {
                                    $('#error_mem1').html('<label class="text-danger">you can not Add this User </label>');
                                    $('#reg_no').addClass('has-error');
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

                $('#reg_no1').blur(function(){
                    var error_mem2 = '';
                    var reg_no1 = $('#reg_no1').val();
                    var _token = $('input[name="_token"]').val();

                    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

                    if(!filter.test(reg_no1))
                    {
                        $('#error_mem2').html('<label class="text-danger">Invalid Email</label>');
                        $('#reg_no1').addClass('has-error');
                        $('#register').attr('disabled', 'disabled');
                    }
                    else
                    {
                        $.ajax({
                            url:"{{ url('projectMembers2_available/check') }}",
                            method:"POST",
                            data:{reg_no1:reg_no1, _token:_token},
                            success:function(result)
                            {
                                if(result == 'unique')
                                {
                                    $('#error_mem2').html('<label class="text-success">you can Add this User </label>');
                                    $('#reg_no1').removeClass('has-error');
                                    $('#register').attr('disabled', false);
                                }
                                else
                                {
                                    $('#error_mem2').html('<label class="text-danger">you can not Add this User </label>');
                                    $('#reg_no1').addClass('has-error');
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

                $('#reg_no2').blur(function(){
                    var error_mem3 = '';
                    var reg_no2 = $('#reg_no2').val();
                    var _token = $('input[name="_token"]').val();

                    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

                    if(!filter.test(reg_no2))
                    {
                        $('#error_mem3').html('<label class="text-danger">Invalid Email</label>');
                        $('#reg_no2').addClass('has-error');
                        $('#register').attr('disabled', 'disabled');
                    }
                    else
                    {
                        $.ajax({
                            url:"{{ url('projectMembers3_available/check') }}",
                            method:"POST",
                            data:{reg_no2:reg_no2, _token:_token},
                            success:function(result)
                            {
                                if(result == 'unique')
                                {
                                    $('#error_mem3').html('<label class="text-success">you can Add this User </label>');
                                    $('#reg_no2').removeClass('has-error');
                                    $('#register').attr('disabled', false);
                                }
                                else
                                {
                                    $('#error_mem3').html('<label class="text-danger">you can not Add this User </label>');
                                    $('#reg_no2').addClass('has-error');
                                    $('#register').attr('disabled', 'disabled');
                                }
                            }
                        })
                    }
                });

            });
        </script>


@endsection
