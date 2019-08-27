@extends('Faculty.FMain')
@section('contents')
    @include('sweet::alert')


    <section class="content">

        <div class="box box-info">
            <div class="box-header with-border" style="background-color: #1498ff">
                <h3 class="text-center" ><b>SUBMIT Project (Files) </b></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->

            <form enctype="multipart/form-data"  class="form-horizontal" method="Post"  action="{{url('/fuploadprofile')}}">
                {{csrf_field()}}
                <div class="box-body">









                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Project Title:</label>

                            <div class="col-sm-6">
                                @foreach($Project as $projects)
                                <select class="form-control" id="Doucument" name="ProjectTitle">
                                    <option>{{$projects->Project_Title}}</option>

                                </select>
                                @endforeach
                            </div>
                        </div>

                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">FileTypr</label>

                        <div class="col-sm-6">


                            <select class="form-control" id="Doucument" name="FileType">
                                <option>Proposal</option>
                                <option>Proposal(Revised)</option>
                                <option>Report-1</option>
                                <option>Report-2</option>
                                <option>Code</option>
                                <option>presentationFile</option>


                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="upload_file" class="col-sm-2 control-label"></label>

                        <div class="col-sm-6">
                            <input type="hidden" class="form-control" id="File" name="superviseremail" value="{{$fid}}" >
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Date:</label>

                        <div class="col-sm-6">
                            <input class="form-control" type="datetime-local" name="Date" value="2018-09-11T13:45:00" id="example-datetime-local-input" >
                        </div>
                    </div>


                        <div class="form-group">
                            <label for="upload_file" class="col-sm-2 control-label">File:</label>

                            <div class="col-sm-6">
                                <input type="file" required class="form-control" id="File" name="File" >
                            </div>
                        </div>


                        <!-- /.box-body -->
                        <div class="box-footer">


                            <button type="submit" class="btn btn-info pull-right">Submit</button>

                        </div>
                        <!-- /.box-footer -->
            </form>
            <div class="box box-info">

                <div class="box-header with-border" style="background-color: #1498ff">
                    <h3 class="text-center" ><b>Uploded Files </b></h3>
                </div>
            </div>
            <!-- /.box-header -->
            <!-- form start -->

            <div class="box">
                <div class="row">


                    <div class="col-xs-12">
                        <div class="box">
                            <div class="box-header">
                                <h3 class="profile-username text-center">Uploded Files </h3>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <div class="table-responsive" style="overflow: auto">

                                    <table id="exa" class="table table-bordered table-hover">
                                        <thead>
                                        <tr>
                                            <th>ProjectTitle</th>
                                            <th>FileType</th>
                                            <th>Date</th>
                                            <th><b>Download</b></th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($files as $file)
                                            <tr>
                                                <td>{{$file->ProjectTitle}}</td>
                                                <td>{{$file->FileType}} </td>
                                                <td>{{$file->Date}}</td>
                                                <td>

                                                    <a href="{{url('/fDownloadfile/'.$file->path.'/downloadprojectfile')}}"><button type="button" class="btn btn-info pull-right"> Download </button></a>


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

    </section>








@endsection