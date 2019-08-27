
@extends('Evaluator.EMain')
@section('contents')
    @include('sweet::alert')


    <section class="content">

        <div class="box box-info">
            <div class="box-header with-border" style="background-color: #1498ff">
                <h3 class="text-center" ><b>Assgin Proposal For FeedBack</b></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="Post"  action="{{url('/Assginfeedbactofaculty')}}">
                {{csrf_field()}}
                <div class="box-body">
                    @foreach($project as $project)
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label"></label>

                        <div class="col-sm-6">
                            <input type="hidden" class="form-control" id="fname" name="projecttitle" value="{{$project->ProjectTitle}}">
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label"></label>

                        <div class="col-sm-6">
                            <input type="hidden" class="form-control" id="fname" name="Filetype" value="{{$project->FileType}}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label"></label>

                        <div class="col-sm-6">
                            <input type="hidden" class="form-control" id="fname" name="Supervisoremail" value="{{$project->Supervisoremail}}">
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label"></label>

                        <div class="col-sm-6">
                            <input type="hidden" class="form-control" id="fname" name="path" value="{{$project->path}}">
                        </div>
                    </div>
@endforeach
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">SelectFaculty:</label>

                        <div class="col-sm-6">
                            <select class="form-control" id="Department" name="SelectFaculty">
                              @foreach($faculty as $facultys)

                                    <option ><b>{{$facultys->email}}</b></option>

                            @endforeach
                            </select>

                        </div>
                    </div>

                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Description</label>

                            <div class="col-sm-6">

                <textarea id="descriptioin" name="descriptioin" rows="20" cols="20" >
                    <h3>Respected Member </h3>
                    <p>The (double) blind review of Final Year Project (FYP) proposals is a routine practice in each semester. The department has officially nominated you as an FYP reviewer. Therefore, on behalf of FYP committee, I request you to please find the attached FYP-Proposal named “E-Lends (ID: SE21)” and provide your valuable comments and suggestions after reviewing it. Your response within next 5 working days will be highly obliged.

 </p>


                    <p>                       Kindly evaluate following factors on preference.</p>

                    <p> 1. Is the idea technically strong and up to date?</p>

                    <p>2. Scope of work as a final year project + suggestions to resolve this issue</p>

                    <p>3. Is the idea clearly presented and explained? Any technical details required?</p>

                    <p>4. Is the language of the content precise and accurate?</p>

<p>5. Did students include necessary sections such as Gantt Chart, Turnitin report, individual contributions etc.?
</p>

                    <p><h5><b>You may also consider any other factor(s) of your own choice. Kindly justify your comments as to why a particular issue is raised and suggestions on how that issue should be resolved. This is MANDATORY.</b></h5></p>
                    @foreach($evaluator as $evaluators)
                    <h3>Regards:</h3>
                    <h4><b>{{$evaluators->Fname.' '.$evaluators->Lname}}</b></h4>
                    <h4><b>{{$evaluators->email}}</b></h4>
                @endforeach
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

    <script>
        $(function () {
            // Replace the <textarea id="editor1"> with a CKEditor
            // instance, using default configuration.
            CKEDITOR.replace('descriptioin')
            //bootstrap WYSIHTML5 - text editor

        })
    </script>










@endsection