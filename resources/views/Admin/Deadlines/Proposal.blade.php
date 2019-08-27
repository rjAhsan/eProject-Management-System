@extends('Admin.Main')
@section('contents')
    @include('sweet::alert')





    <section class="content" >
        <div class="box box-info" >
        <div class="box-header" style="background-color: #0fb4ff">
            <h3 class="text-center"><b>ADD NEW DEADLINES</b></h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form class="form-horizontal" method="post" action="{{url('/AddNewDeadlines')}}">
            <div class="box-body">
                {{csrf_field()}}
<br>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Title:</label>
                    <span id="Title_error"></span>
                    <div class="col-sm-6">
                        <input type="text" required class="form-control" id="Title" Name="Title" placeholder="Title">
                    </div>
                </div>


                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">LastDate:</label>

                    <div class="col-sm-6">
                        <input class="form-control" required type="datetime-local" name="LastDate" value="2018-09-11T13:45:00" id="example-datetime-local-input" >
                    </div>
                </div>



                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">UserTypes:</label>

                    <div class="col-sm-6">
                        <select class="form-control" id="UserTypes" name="UserTypes">
                            <option>Faculty</option>
                            <option>Student</option>
                            <option>All</option>
                        </select>

                    </div>
                </div>


                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Type:</label>

                    <div class="col-sm-6">
                        <select class="form-control" id="DeadlineTypes" name="DeadlineTypes">

                            <option>Proposal</option>
                            <option>Report-1</option>
                            <option>Report-2</option>
                            <option>Poster Submission</option>
                            <option>Pre-Evaluation</option>
                            <option>Finla-Evaluation</option>

                        </select>

                    </div>
                </div>



                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Description</label>

                    <div class="col-sm-6">

                <textarea id="descriptioin" name="descriptioin" required rows="50" cols="50" >
                                         Please Type the Description Of Deadline..
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

        </div>
        <div class="box box-info">

            <div class="box-header with-border" style="background-color: #1498ff">
                <h3 class="text-center" ><b>FYP-Deadlines List</b></h3>
            </div>
        </div>
        <div class="box">
            <div class="row">


                <div class="col-xs-12">
                    <div class="box">

                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="table-responsive" style="overflow: auto">
                                <table id="exa" class="table table-bordered table-hover">
                                    <thead>
                                    <tr>

                                        <th>TITLE</th>
                                        <th>DATE</th>
                                        <th>USER TYPE</th>
                                        <th>DEADLINE TYPE</th>
                                        <th>DESCRIPTION</th>
                                        <th>ACTION</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($Deadline as $students)
                                        <tr>

                                            <td>{{$students->Title}} </td>
                                            <td>{{$students->LastDate}}</td>
                                            <td>{{$students->UserTypes}}</td>
                                            <td>{{$students->DeadlineTypes}}</td>
                                            <td>{!!$students->descriptioin!!}</td>

                                            <td>
                                                <a href="{{url('/Deletedeadline/'.$students->id.'/delete')}}"> <button type="button" class="btn btn-danger pull-right" >Delete</button></a>



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
            <!-- /.box -->

            <!-- /.col -->
        {{ $Deadline->links() }}
        <!-- /.row -->
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



                var filter =/^[a-z ,.'-]+$/i;


                if(!filter.test(Title))
                {
                    $('#Title_error').html('<label class="text-danger">Invalid name(Use {A-Z} ONLY)</label>');
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