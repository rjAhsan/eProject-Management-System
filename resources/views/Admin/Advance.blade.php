

@extends('Admin.Main')
@section('contents')


    <section class="content">

        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="text-center">Student-Registration</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="Post"  action="{{url('/create')}}">
                {{csrf_field()}}
                <div class="box-body">
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Name:</label>

                        <div class="col-sm-6">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Name">
                        </div>
                    </div>



                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Student-ID:</label>

                        <div class="col-sm-6">
                            <input type="text" name="id" class="form-control" id="id" placeholder="Student-ID">
                        </div>
                    </div>



                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Email:</label>

                        <div class="col-sm-6">
                            <input type="email" name="email" class="form-control" id="email" placeholder="Email">
                        </div>
                    </div>



                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Department:</label>

                        <div class="col-sm-6">
                            <select class="form-control" name="department" id="department">
                                <option>BSCS</option>
                                <option>BSSE</option>
                                <option>BSCE</option>
                                <option>BSEE</option>
                            </select>

                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Gender:</label>

                        <div class="col-sm-6">
                            <select class="form-control" name="gender" id="gender">
                                <option>Male</option>
                                <option>Female</option>

                            </select>

                        </div>
                    </div>









                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label">Password:</label>

                        <div class="col-sm-6">
                            <input type="password" name="password" class="form-control" id="password" placeholder="Password">
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

        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title"> Data Table</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>Name</th>

                                <th>Studentid</th>

                                <th>Email</th>
                                <th>Department</th>
                                <th>Gender</th>





                                <th>Password</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($student as $students)
                            <tr>
                                <td>{{$students->Name}}</td>
                                <td>{{$students->Student_id}} </td>
                                <td>{{$students->Email}}</td>
                                <td>{{$students->Department}}</td>
                                <td>{{$students->Gender}}</td>
                                <td>{{$students->password}}</td>
                            </tr>
                            @endforeach




                            </tfoot>
                        </table>
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
    </section>


@endsection
