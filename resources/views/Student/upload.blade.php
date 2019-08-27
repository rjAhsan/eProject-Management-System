@extends('Student.index')
@section('contents')

    @include('sweet::alert')
    <section class="content">

        <div class="box box-info">
            <div class="box-header with-border" style="background-color: #1498ff">
                <h3 class="text-center" ><b>SUBMIT FILE </b></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->

                <form enctype="multipart/form-data"  class="form-horizontal" method="Post"  action="{{url('/uploadprojectfiles')}}">
                {{csrf_field()}}
                <div class="box-body">

                    @foreach($ProjectTitle as $Titles)

                    <div class="form-group">

                        <label for="inputEmail3" class="col-sm-2 control-label">Project:</label>

                        <div class="col-sm-6">
                            <input type="text" readonly class="form-control" id="filename" name="projectTitle" value="{{$Titles->Project_Title}}">
                        </div>
                    </div>


                        <div class="form-group">

                            <label for="inputEmail3" class="col-sm-2 control-label">User:</label>

                            <div class="col-sm-6">
                                <input type="text" readonly class="form-control" id="filename" name="useremail" value="{{$userer_email}}">
                            </div>
                        </div>



                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">File Type:</label>

                        <div class="col-sm-6">
                            <select class="form-control" id="Doucument" name="FileType">
                                <option>Proposal</option>
                                <option>Report-1</option>
                                <option>Report-2</option>
                                <option>CODE+Zip</option>
                            </select>

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
@endforeach
                    </div>
                    <!-- /.box-footer -->
            </form>

            <div class="box box-info">

                <div class="box-header with-border" style="background-color: #1498ff">
                    <h3 class="text-center" ><b>Uploded Files Project</b></h3>
                </div>
            </div>
            <!-- /.box-header -->
            <!-- form start -->

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
                                        @foreach($lists as $students)
                                            <tr>
                                                <td>{{$students->useremail}}</td>
                                                <td>{{$students->projectTitle}} </td>
                                                <td>{{$students->FileType}}</td>
                                                <td>

                                                    <a href="{{url('/Downloadfile/'.$students->Filepath.'/uploadLin')}}"><button type="button" class="btn btn-info pull-right"> Download </button></a>


                                                </td>

                                            </tr>

                                        @endforeach





                                    </table>
                                </div>
                            </div>
                            {{$lists->links()}}



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