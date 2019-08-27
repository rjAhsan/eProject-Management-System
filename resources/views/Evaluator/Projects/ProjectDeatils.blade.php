
@extends('Evaluator.EMain')
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
                <li class="active"><a href="#ProjectDeatils" data-toggle="tab"><b>INFO</b></a></li>
                <li><a href="#ChangeStatus" data-toggle="tab"><b>STATUS</b></a></li>
                <li><a href="#ProjectFiles" data-toggle="tab"><b>FILES</b></a></li>
                <li><a href="#Evaluation" data-toggle="tab"><b>EVALUATION</b></a></li>
                <li><a href="#Notifications" data-toggle="tab"><b>SEND NOTIFICATIONS</b></a></li>
            </ul>
            <div class="tab-content">

                <div class="tab-pane" id="ProjectDeatils">
                    <div class="table-responsive" style="overflow: auto">

                        <div class="box-header with-border" style="background-color: #1498ff">
                            <h3 class="text-center" ><b>Project DETAILS</b></h3>
                        </div>

                        <table id="exa" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th><b>Title</b></th>
                                <th><b>Supervisor</b></th>
                                <th>Session</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>

                            <tr>
                                <td>{{$projects->Project_Title}}</td>
                                <td>{{$projects->Supervisor_email}}</td>
                                <td>{{$projects->Session}}</td>
                                <td>{{$projects->Status}}</td>


                                <td>





                                </td> </tr>

                            {{--@endforeach--}}





                        </table>

                        <div class="box-header with-border" style="background-color: #1498ff">
                            <h3 class="text-center" ><b>PROPOSAL REVIEWS</b></h3>
                        </div>
                        <table id="exa" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th><b>Project Title</b></th>
                                <th><b>Evaluator(Propsal)</b></th>
                                <th><b>Supervisor</b></th>
                                <th><b>Propsal Reviews</b></th>

                            </thead>
                            <tbody>
                            @foreach($propsal as $propsals)
                            <tr>

                                <td>{{$projects->Project_Title}}</td>
                                <td>{{$projects->Supervisor_email}}</td>
                                <td>{{$propsals->SelectFaculty}}</td>
                                <td>{!! $propsals->Comments !!}</td>

```
                                 </tr>

                            @endforeach





                        </table>


                        <div class="box-header with-border" style="background-color: #1498ff">
                            <h3 class="text-center" ><b>INTERNALS GRADE</b></h3>
                        </div>
                        <table id="exa" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th><b>Project Title</b></th>
                                <th>Repoert-1(/05)</th>
                                <th>Repoert-2(/05)</th>
                                <th>Supervisor (Internals)(/15)</th>
                                <th>Supervisor (Externals)(/15)</th>
                                <th>Internal Evaluator(/15)</th>
                                <th>Internal Evaluator_2(/15)</th>
                                <th>External Evaluator(/30)</th>
                                <th><b>Other comments</b></th>

                            </thead>
                            <tbody>
                            @foreach($Grades as $Gradess)
                                <tr>

                                    <td>{{$Gradess->Title}}</td>
                                    <td>{{round($Gradess->Report_1)}}</td>
                                    <td>{{$Gradess->Report_2}}</td>
                                    <td>{{$Gradess->Supervisor_Internal}}</td>
                                    <td>{{$Gradess->Supervisor_exxternal}}</td>
                                    <td>{{$Gradess->internal_1}}</td>
                                    <td>{{$Gradess->internal_2}}</td>
                                    <td>{{$Gradess->External}}</td>
                                    <td>{!! $propsals->Comments !!}</td>

                                    ```
                                </tr>

                            @endforeach





                        </table>




                    </div>






                </div>



                <div class="tab-pane" id="Evaluation">

                    @if($projects->Status=="Report-1")
                        <div class="box-header with-border" style="background-color: #1498ff">
                            <h3 class="text-center" ><b>INTERNALS EVALUATION </b></h3>
                        </div>
                    <form class="form-horizontal" method="Post"  action="{{url('/INTERNALS')}}">
                        {{csrf_field()}}
                        <div class="box-body">
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label"></label>

                                <div class="col-sm-6">
                                    <input type="hidden" class="form-control" id="fname" name="Project_Title" value="{{$projects->Project_Title}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label"></label>

                                <div class="col-sm-6">
                                    <input type="hidden" class="form-control" id="fname" name="SupervisorEmail" value="{{$projects->Supervisor_email}}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label"></label>

                                <div class="col-sm-6">
                                    <input type="hidden" class="form-control" id="fname" name="Session" value="{{$projects->Session}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">SELECT INTERNAL/FACULLTY:</label>

                                <div class="col-sm-6">

                                    <select class="form-control" id="Department" name="INTERNAL">
                                        @foreach($Faculty as $Facultys)
                                        <option>{{$Facultys->email}}</option>
                                        @endforeach
                                    </select>

                                </div>
                            </div>





                </div>

                        <div class="box-footer">


                            <button type="submit" class="btn btn-info pull-right">Add</button>

                        </div>
                    </form>



                @elseif(($projects->Status=="Internals")||($projects->Status=="Report-2")||($projects->Status=="Externals"))
                        <div class="box-header with-border" style="background-color: #1498ff">
                            <h3 class="text-center" ><b>EXTERNAL EVALUATION </b></h3>
                        </div>
                        <form class="form-horizontal" method="Post"  action="{{url('/EXTERNAL')}}">
                            {{csrf_field()}}
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label"></label>

                                    <div class="col-sm-6">
                                        <input type="hidden" class="form-control" id="fname" name="Project_Title" value="{{$projects->Project_Title}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label"></label>

                                    <div class="col-sm-6">
                                        <input type="hidden" class="form-control" id="fname" name="SupervisorEmail" value="{{$projects->Supervisor_email}}">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label"></label>

                                    <div class="col-sm-6">
                                        <input type="hidden" class="form-control" id="fname" name="Session" value="{{$projects->Session}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Enter EXternal Email</label>

                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" id="fname" name="External" placeholder="Please Enter The Name/Email Of External">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">SELECT INTERNAL/FACULLTY:</label>

                                    <div class="col-sm-6">

                                        <select class="form-control" id="Department" name="INTERNAL">
                                            @foreach($Faculty as $Facultys)
                                                <option>{{$Facultys->email}}</option>
                                            @endforeach
                                        </select>

                                    </div>
                                </div>





                            </div>

                            <div class="box-footer">


                                <button type="submit" class="btn btn-info pull-right">Add</button>

                            </div>
                        </form>


                    @elseif(($projects->Status=="Proposal")||($projects->Status=="Proposal(Revised)"))
                       <h1 class="text-blue"><b>Project in First Phase</b></h1>


                    @elseif(($projects->Status=="Completed"))
                        <h1 class="text-green"  ><b>PROJECT COMPLETED</b></h1>


                    @endif



                </div>
                <!-- /.tab-pane -->

                <div class="tab-pane" id="ChangeStatus">
                    <div class="box-body">
                        <div class="box-header with-border" style="background-color: #1498ff">
                            <h3 class="text-center" ><b>CHANGE STATUS</b></h3>
                        </div>
                        <br>
                    <div class="form-group">

                        <label for="inputEmail3" class="col-sm-2 control-label">    Current Status</label>

                        <div class="col-sm-6">
                            <input type="text" class="form-control" readonly id="NTitle" name="projectTitle" Value="{{$projects->Status}}">
                        </div>
                    </div>



                    <form class="form-horizontal" method="Post"  action="{{url('/changeStatusProject')}}">
                        {{csrf_field()}}
                        <div class="box-body">
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label"></label>

                                <div class="col-sm-6">
                                    <input type="hidden" class="form-control" id="NTitle" name="projectTitle" Value="{{$projects->Project_Title}}">
                                </div>
                            </div>

                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Change Status:</label>

                        <div class="col-sm-6">
                            <select class="form-control" name="changestatus">
                                <option> Proposal </option>


                                <option> Proposal(Revised)</option>

                                <option> Report-1</option>


                                <option> Report-2</option>


                                <option> Internals</option>


                                <option> Externals</option>




                                <option> Completed</option>


                            </select>

                        </div>
                    </div>



                </div>
                        <div class="box-footer">


                            <button type="submit" class="btn btn-info pull-right">Change</button>

                        </div>
                    </form>
                </div>
                </div>
                <div class="tab-pane" id="ProjectFiles">




                    <div class="col-xs-12">
                        <div class="box">
                            <div class="box-header" style="background-color: #1498ff">
                                <h3 class="profile-username text-center" >Project Files</h3>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <div class="table-responsive" style="overflow: auto">

                                    <table id="exa" class="table table-bordered table-hover">
                                        <thead>

                                        <tr>

                                            <th>Project Title</th>
                                            <th>File Tyoe</th>
                                            <th>Supervisoremail</th>
                                            <th>Date</th>
                                            <th>Download</th>


                                        </tr>

                                        </thead>

                                        <tbody>
                                        @foreach($files as $file)

                                        <tr>

                                            <td>{{$file->ProjectTitle}}</td>
                                            <td>{{$file->FileType}}</td>
                                            <td>{{$file->Supervisoremail}}</td>
                                            <td>{{$file->Date}}</td>



                                            <td>
                                                @if(($file->FileType)=="Proposal")

                                                    <a href="{{url('/Asginfeedback/'.$file->ProjectTitle.'/feedback')}}"> <button type="button" class="btn btn-success pull-right" >FeedBack</button></a>

                                                    <a href="{{url('/Downloadfile/'.$file->path.'/storedfilesdownload')}}"> <button type="button" class="btn btn-dropbox pull-right" >Download</button></a>

                                                 @else

                                                    <a href="{{url('/Downloadfile/'.$file->path.'/storedfilesdownload')}}"> <button type="button" class="btn btn-dropbox pull-right" >Downloads</button></a>

                                                @endif
                                            </td>

                                        </tr>
                                        @endforeach
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->


                    </div>









                </div>

                <div class="tab-pane" id="Notifications">


                    <form class="form-horizontal" method="post" action="{{url('/createsStuNotification')}}" >
                        <div class="box-body">

                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Title:</label>

                                <div class="col-sm-6">
                                    <input type="text" class="form-control" id="NTitle" name="NTitle" placeholder="Title">
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Description</label>

                                <div class="col-sm-6">

                <textarea id="descriptioin" name="descriptioin" rows="20" cols="20" >
                                            This is my textarea to be replaced with CKEditor.
                    </textarea>

                                </div>
                            </div>
                        </div>
                    </form>


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



@endsection