
@extends('Admin.Main')
@section('contents')
 @include('sweet::alert')




    <section class="content">

    <div class="box box-info">
        <div class="box-header with-border" style="background-color: #1498ff">
            <h3 class="text-center" ><b>ADD NEW NOTIFICATOION</b></h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
<br>
        <form class="form-horizontal" method="post" action="{{url('/createsfacNotification')}}" >
            <div class="box-body">

                {{csrf_field()}}
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Title:</label>
                    <span id="Title_error"></span>
                    <div class="col-sm-6">
                        <input type="text" required class="form-control" id="Title" name="NTitle" placeholder="Title">
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Notification Type:</label>

                    <div class="col-sm-6">
                        <select class="form-control" id="UserTypes" name="NotifficationType">
                            <option>BY_EMAIL</option>
                            <option>BY_DASHBOARD</option>

                        </select>

                    </div>
                </div>



                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">User Type:</label>

                    <div class="col-sm-6">
                        <select class="form-control" id="UserTypes" name="UserTypes">
                            <option>Faculty</option>
                            <option>Student</option>
                            <option>All</option>
                        </select>

                    </div>
                </div>

                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Description</label>

                    <div class="col-sm-6">

                <textarea id="descriptioin" required  name="descriptioin" rows="20" cols="20" >
                                            This is my textarea to be replaced with CKEditor.
                    </textarea>

                    </div>
                </div>






            </div>
            <!-- /.box-body -->
            <div class="box-footer">


                <button type="submit" id="register" class="btn btn-info pull-right">Submit</button>

            </div>
            <!-- /.box-footer -->
        </form>
<br>
        <div class="box">
            <div class="row">


                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header" style="background-color: #1498ff">
                            <h3 class="profile-username text-center">NOTIFICATION DATA </h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="table-responsive" style="overflow: auto">
                                <table id="exa" class="table table-bordered table-hover">
                                    <thead>
                                    <tr>

                                        <th>NOTIFICATION TITLE</th>
                                        <th>NOTIFICATION TYPE</th>
                                        <th>USERS</th>
                                        <th>NOTIFICATION DESCRIPTION</th>
                                        <th>ACTION</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($student as $students)
                                        <tr>

                                            <td>{{$students->Title}} </td>
                                            <td>{{$students->NotiicationType}}</td>
                                            <td>{{$students->UserType}}</td>
                                            <td>{!!$students->Description!!}</td>
                                            <td>
        <a href="{{url('/DeletefacNoti/'.$students->id.'/delete')}}"> <button type="button" class="btn btn-danger pull-right" ><span class="glyphicon glyphicon-trash"></span></button></a>

                                            </td> </tr>

                                    @endforeach





                                </table>
                            </div>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->


                </div>
                <!-- /.box-body -->
            </div>
            {{ $student->links() }}
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




 <script>
     $(document).ready(function(){

         $('#Title').blur(function(){

             var Title_error = '';

             var Title = $('#Title').val();

             var _token = $('input[name="_token"]').val();

             var filter =/^(?!\d+$)(?:[a-zA-Z0-9][a-zA-Z0-9 @&$]*)?$/i;


             if(!filter.test(Title))
             {
                 $('#Title_error').html('<label class="text-danger">Invalid name </label>');
                 $('#Title').addClass('has-error');
                 $('#register').attr('disabled', 'disabled');
             }
             else
             {

                 $('#Title_error').html('<label class="text-success"><i class="fa fa-check"></i></label>');
                 $('#Title').removeClass('has-error');
                 $('#register').attr('disabled', false);

             }
         });

     });
 </script>





@endsection

