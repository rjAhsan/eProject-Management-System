@extends('Faculty.FMain')
@section('contents')
    @include('sweet::alert')





    <section class="content">
    <div class="box box-info">

        <div class="box-header with-border" style="background-color: #1498ff">
            <h3 class="text-center" ><b>Projects Details</b></h3>
        </div>
    </div>
    <!-- /.box-header -->
    <!-- form start -->

    <div class="box">
        <div class="row">
            @foreach($Project as $projects)

                <div class="col-md-12">
                    <div class="nav-tabs-custom">
                        <ul class="nav nav-pills nav-justified">
                            <li class="active"><a href="#Projectinfo" data-toggle="tab">Projectinfo</a></li>

                            <li><a href="#AssginTask" data-toggle="tab">Assgin Task</a></li>
                            <li><a href="#ScheduleMeeting" data-toggle="tab">Schedule Meeting</a></li>
                            <li><a href="#AddMarks" data-toggle="tab">Add Marks</a></li>
                            <li><a href="#ProjectFiles" data-toggle="tab">Project Files</a></li>

                        </ul>
                        <div class="tab-content">
                            <h1>{{$projects->Project_Title}}</h1>

                            <!-- /.tab-pane -->

                            <div class="tab-pane" id="Projectinfo">


                                <section class="content" >
                                <div class="box box-info" >
                                    <div class="box-header" style="background-color: #0fb4ff">
                                        <h3 class="text-center"><b>{{$projects->Project_Title}} Information</b></h3>
                                    </div>

                                <div class="table-responsive" style="overflow: auto">


                                    <table id="exa" class="table table-bordered table-hover">
                                        <thead>
                                        <tr>
                                            <th><b>Title</b></th>
                                            <th><b>Supervisor</b></th>
                                            <th>Session</th>
                                            <th>Status</th>

                                        </tr>
                                        </thead>
                                        <tbody>

                                        <tr>
                                            <td>{{$projects->Project_Title}}</td>
                                            <td>{{$projects->Supervisor_email}} </td>
                                            <td>{{$projects->Session}}</td>
                                            <td>{{$projects->Status}}</td>


                                            <td>





                                            </td> </tr>

                                        {{--@endforeach--}}





                                    </table>





                                </div>

                                <div class="table-responsive" style="overflow: auto">

                                    <div class="box-header" style="background-color: #0fb4ff">
                                        <h3 class="text-center"><b> Proposal Reviews</b></h3>
                                    </div>
                                    <table id="exa" class="table table-bordered table-hover">
                                        <thead>
                                        <tr>
                                            <th><b>Proposal Reviews</b></th>


                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($Reviews as $Review)
                                        <tr>
                                            <td>{!!$Review->Comments!!}</td>
                                        </tr>

                                        @endforeach

                                        </tbody>



                                    </table>





                                </div>



</div>
                                </section>
                            </div>


                            <div class="tab-pane" id="AssginTask">


                                <section class="content" >
                                    <div class="box box-info" >
                                        <div class="box-header" style="background-color: #0fb4ff">
                                            <h3 class="text-center"><b>Assgin Task</b></h3>
                                        </div>

                                <form class="form-horizontal" method="post" action="{{url('/ProjectTaskAdd')}}">
                                    <div class="box-body">
                                        {{csrf_field()}}
                                        <br>

                                        <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-2 control-label">Title:</label>

                                            <div class="col-sm-6">
                                                <input type="text" readonly class="form-control" id="Title" Name="Title" Value="{{$projects->Project_Title}}">
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-2 control-label">LastDate:</label>

                                            <div class="col-sm-6">
                                                <input class="form-control" required type="datetime-local" name="LastDate" value="2018-09-11T13:45:00" id="example-datetime-local-input" >
                                            </div>
                                        </div>





                                        <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-2 control-label">TaskTypes:</label>

                                            <div class="col-sm-6">
                                                <select class="form-control" id="DeadlineTypes" name="TaskTypes">
                                                    <option>Proposal</option>
                                                    <option>FYP-1</option>
                                                    <option>FYP=2</option>
                                                    <option>Internal Evaluation</option>
                                                    <option>Extrnal Evaluation</option>

                                                </select>

                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-2 control-label">submitted:</label>

                                            <div class="col-sm-6">
                                                <select class="form-control" id="DeadlineTypes" name="subitted">
                                                    <option>No</option>
                                                    <option>Yes</option>


                                                </select>

                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-2 control-label">Description</label>

                                            <div class="col-sm-6">

                <textarea id="descriptioin" name="descriptioin" required rows="50" cols="50" >
                                         Please Type the Description Of Task..
                    </textarea>

                                            </div>
                                        </div>


                                    </div>
                                    <!-- /.box-body -->
                                    <div class="box-footer">


                                        <button type="submit" class="btn btn-info pull-right">Submit</button>
                                    </div>
                                    <!-- /.box-footer -->
                                </form>


                                <div class="box">
                                    <div class="row">


                                        <div class="col-xs-12">
                                            <div class="box">
                                                <div class="box-header">
                                                    <h3 class="profile-username text-center">Files Data Table</h3>
                                                </div>
                                                <!-- /.box-header -->
                                                <div class="box-body">
                                                    <div class="table-responsive" style="overflow: auto">
                                                        <table id="exa" class="table table-bordered table-hover">
                                                            <thead>
                                                            <tr>
                                                                <th>Project Title</th>
                                                                <th>Taskid</th>
                                                                <th>Date</th>

                                                                <th><b>Download</b></th>

                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            @foreach($Tasks as $students)
                                                                <tr>
                                                                    <td>{{$students->Task_Title}}</td>
                                                                    <td>{{$students->task_id}} </td>
                                                                    <td>{{$students->LastDate}}</td>
                                                                    <td>

                                                                        <a href="{{url('/DownloadfileTasl/'.$students->TaskFile.'/download')}}"><button type="button" class="btn btn-info pull-right"> Download </button></a>


                                                                    </td>

                                                                </tr>

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



                            </div>
                            <!-- /.tab-pane -->

                            </div>
                                </section>
                            </div>



                            <div class="tab-pane" id="ScheduleMeeting">


                                <section class="content" >
                                    <div class="box box-info" >
                                        <div class="box-header" style="background-color: #0fb4ff">
                                            <h3 class="text-center"><b>Add Meeting Details</b></h3>
                                        </div>
                                        <!-- /.box-header -->
                                        <!-- form start -->

                                            <form class="form-horizontal" method="post" action="{{url('/ProjectMeeting')}}">
                                                <div class="box-body">
                                                    {{csrf_field()}}
                                                    <br>

                                                    <div class="form-group">
                                                        <label for="inputEmail3" class="col-sm-2 control-label">Title</label>

                                                        <div class="col-sm-6">
                                                            <input type="text" readonly class="form-control" id="Title" Name="Title" Value="{{$projects->Project_Title}}">
                                                        </div>
                                                    </div>


                                                    <div class="form-group">
                                                        <label for="inputEmail3" class="col-sm-2 control-label">Date&Time:</label>

                                                        <div class="col-sm-6">
                                                            <input class="form-control" type="datetime-local" name="Date" value="2018-09-11T13:45:00" id="example-datetime-local-input" >
                                                        </div>
                                                    </div>







                                                    <div class="form-group">
                                                        <label for="inputEmail3" class="col-sm-2 control-label">Description</label>

                                                        <div class="col-sm-6">

                <textarea id="Meeting" name="descriptioin" required rows="50" cols="50" >
                                         Please Type the Description Of Meeting..
                    </textarea>

                                                        </div>
                                                    </div>


                                                </div>
                                                <!-- /.box-body -->
                                                <div class="box-footer">


                                                    <button type="submit" class="btn btn-info pull-right">Submit</button>
                                                </div>
                                                <!-- /.box-footer -->
                                            </form>

                                    </div>
                                </section>


                            </div>
                            <div class="tab-pane" id="AddMarks">

                                <section class="content" >
                                    <div class="box box-info" >
                                        <div class="box-header" style="background-color: #030102">

                                            <h4 style="color:#11c71d;" class="text-center"><b>5 = OutStanding</b></h4>
                                            <h4 style="color:#81c71f;" class="text-center"><b>4 = V.Good</b></h4>
                                            <h4 style="color:#c78f23;" class="text-center"><b>3 = Good   </b></h4>
                                            <h4 style="color:#c7501c;" class="text-center"><b>2 = Average</b></h4>
                                            <h4 style="color:#c72414;" class="text-center"><b>1 = Poor</b></h4>


                                        </div>
                                        <!-- /.box-header -->
                                        <!-- form start -->

                                            <form class="form-horizontal" method="post" action="{{url('/ProjectEvaluationFB')}}">
                                                <div class="box-body">
                                                    {{csrf_field()}}
                                                    <br>

                                                    <div class="form-group">
                                                        <label for="inputEmail3" class="col-sm-2 control-label">Project_Title:</label>

                                                        <div class="col-sm-6">
                                                            <input type="text" readonly class="form-control" id="Title" Name="Title" Value="{{$projects->Project_Title}}">
                                                        </div>
                                                    </div>



                                                    <div class="form-group">
                                                        <label for="inputEmail3" class="col-sm-2 control-label">Evluation Type:</label>

                                                        <div class="col-sm-6">
                                                            <select class="form-control" id="problem_statement" name="Evluation_type">

                                                                <option>Report_1</option>
                                                                <option>Report_2</option>
                                                                <option>Supervisor_Internal</option>
                                                                <option>Supervisor_exxternal</option>

                                                            </select>

                                                        </div>
                                                    </div>




                                                    <div class="form-group">
                                                        <label for="inputEmail3" class="col-sm-2 control-label">Importance and rationale of problem statement :</label>

                                                        <div class="col-sm-6">
                                                            <select class="form-control" id="problem_statement" name="Importance">
                                                                <option>5</option>
                                                                <option>4</option>
                                                                <option>3</option>
                                                                <option>2</option>
                                                                <option>1</option>
                                                            </select>

                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="inputEmail3" class="col-sm-2 control-label">Review of existing work, tools, competitors, etc. :</label>

                                                        <div class="col-sm-6">
                                                            <select class="form-control" id="problem_statement" name="existing">
                                                                <option>5</option>
                                                                <option>4</option>
                                                                <option>3</option>
                                                                <option>2</option>
                                                                <option>1</option>
                                                            </select>

                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="inputEmail3" class="col-sm-2 control-label">Level of completion w.r.t. to target/objectives :</label>

                                                        <div class="col-sm-6">
                                                            <select class="form-control" id="problem_statement" name="objectives">
                                                                <option>5</option>
                                                                <option>4</option>
                                                                <option>3</option>
                                                                <option>2</option>
                                                                <option>1</option>
                                                            </select>

                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="inputEmail3" class="col-sm-2 control-label">Structure of code / quality of software architecture  :</label>

                                                        <div class="col-sm-6">
                                                            <select class="form-control" id="problem_statement" name="architecture">
                                                                <option>5</option>
                                                                <option>4</option>
                                                                <option>3</option>
                                                                <option>2</option>
                                                                <option>1</option>
                                                            </select>

                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="inputEmail3" class="col-sm-2 control-label">Quality of demonstration and presentation  :</label>

                                                        <div class="col-sm-6">
                                                            <select class="form-control" id="problem_statement" name="presentation">
                                                                <option>5</option>
                                                                <option>4</option>
                                                                <option>3</option>
                                                                <option>2</option>
                                                                <option>1</option>
                                                            </select>

                                                        </div>
                                                    </div>









                                                    <div class="form-group">
                                                        <label for="inputEmail3" class="col-sm-2 control-label">Comments</label>

                                                        <div class="col-sm-6">

                <textarea id="Marks" name="descriptioin" rows="50" cols="50" >
                                         Please Type Any Addationnal Note IF You want
                    </textarea>

                                                        </div>
                                                    </div>





                                                    <!-- /.box-body -->
                                                    <div class="box-footer">


                                                        <button type="submit" class="btn btn-info pull-right">Submit</button>
                                                    </div>
                                                    <!-- /.box-footer -->
                                            </form>

                                    </div>
                                </section>



                            </div>

                            <div class="tab-pane" id="ProjectFiles">
                                <div class="box-header with-border" style="background-color: #1498ff">
                                    <h3 class="text-center" ><b>Projects Files</b></h3>
                                </div>

                                <div class="box">
                                    <div class="row">


                                        <div class="col-xs-12">
                                            <div class="box">
                                                <div class="box-header">
                                                    <h3 class="profile-username text-center">Files Data Table</h3>
                                                </div>
                                                <!-- /.box-header -->
                                                <div class="box-body">
                                                    <div class="table-responsive" style="overflow: auto">
                                                        <table id="exa" class="table table-bordered table-hover">
                                                            <thead>
                                                            <tr>
                                                                <th>Useremail</th>
                                                                <th>ProjectTitle</th>
                                                                <th>FileType</th>
                                                                <th><b>Download</b></th>

                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            @foreach($files as $students)
                                                                <tr>
                                                                    <td>{{$students->useremail}}</td>
                                                                    <td>{{$students->projectTitle}} </td>
                                                                    <td>{{$students->FileType}}</td>
                                                                    <td>

                                                                        <a href="{{url('/Downloadfile/'.$students->Filepath.'/factdownload')}}"><button type="button" class="btn btn-info pull-right"> Download </button></a>


                                                                    </td>

                                                                </tr>

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

                                    <!-- /.row -->
                                </div>



                            </div>

                            <!-- /.tab-pane -->
                        </div>
                        <!-- /.tab-content -->
                    </div>
                    <!-- /.nav-tabs-custom -->
                </div>


            @endforeach
        </div>
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
        $(function () {
            // Replace the <textarea id="editor1"> with a CKEditor
            // instance, using default configuration.
            CKEDITOR.replace('Meeting')
            //bootstrap WYSIHTML5 - text editor

        })
    </script>




    <script>
        $(function () {
            // Replace the <textarea id="editor1"> with a CKEditor
            // instance, using default configuration.
            CKEDITOR.replace('Marks')
            //bootstrap WYSIHTML5 - text editor

        })
    </script>



@endsection