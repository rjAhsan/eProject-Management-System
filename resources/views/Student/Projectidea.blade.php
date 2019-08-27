@extends('Student.index')
@section('contents')

    <section class="content">
        <div class="box box-info">

            <div class="box-header" style="background-color: #0fb4ff">
                <h3 class="text-center"><b>Ideas List</b></h3>
            </div>
        </div>
        <!-- /.box-header -->
        <!-- form start -->

        <div class="box">
            <form action="{{url('/studentsearchidea')}}" method="get" class="sidebar-form">
                <div class="input-group">
       <input type="search" name="search" class="form-control" placeholder="Search By Project Title">
      <span class="input-group-btn">
                <button type="submit" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
               search
              </span>
                </div>
            <div class="row">


                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header" style="background-color: #0fb4ff">
                            <h3 class="profile-username text-center" >Ideas Data Table</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="table-responsive" style="overflow: auto">
                                <table id="exa" class="table table-bordered table-hover">
                                    <thead>
                                    <tr>

                                        <th>Project Title</th>
                                        <th>Faculty Name</th>
                                        <th>Project Domain</th>
                                        <th>Project Type</th>
                                        <th>Project Description</th>

                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($student as $students)

                                        <tr>
                                            <td>{{$students->Ideas_Title}}</td>
                                            <td>{{$students->Faculty_Name}}</td>
                                            <td>{{$students->ideas_Domain}}</td>
                                            <td>{{$students->project_type}}</td>
                                            <td>{!!$students->ideas_Description!!}</td>

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
    </section>


@endsection




