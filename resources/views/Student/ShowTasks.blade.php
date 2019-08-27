@extends('Student.index')
@section('contents')



    <section class="content">
        <div class="box box-info">

            <div class="box-header with-border" style="background-color: #1498ff">
                <h3 class="text-center" ><b>FYP-Task List</b></h3>
            </div>
        </div>
        <!-- /.box-header -->
        <!-- form start -->

        <div class="box">
            <div class="row">


                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header" style="background-color: #1498ff">
                            <h3 class="profile-username text-center" >FYP Task</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="table-responsive" style="overflow: auto">
                                <table id="exa" class="table table-bordered table-hover">
                                    <thead>
                                    <tr>

                                        <th>Title</th>
                                        <th>Latst-Date</th>
                                        <th>Type</th>
                                        <th>Descrition</th>
                                        <th>Action</th>

                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($student as $students)
                                        <tr>

                                            <td>{{$students->Title}} </td>
                                            <td>{{$students->Date}}</td>
                                            <td>{{$students->Type}}</td>
                                            <td>{!!$students->description!!}</td>
                                            <td>
                                                <a href="{{url('/SubmitProTask/'.$students->id.'/SubmitTask')}}"> <button type="button" class="btn btn-primary pull-right" ><b> SubmitTask</b> </button></a>

                                            </td>

                                        </tr>

                                    @endforeach





                                </table>
                            </div>
                        </div>
                    {{$student->links()}}
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->


                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->

            <!-- /.col -->
        {{--{{ $student->links() }}--}}
        <!-- /.row -->
        </div>

        <!-- /.box-header -->
        <!-- form start -->

        <div class="box">
            <div class="row">


                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header" style="background-color: #1498ff">
                            <h3 class="profile-username text-center" >Submitted Tasks</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="table-responsive" style="overflow: auto">
                                <table id="exa" class="table table-bordered table-hover">
                                    <thead>
                                    <tr>

                                        <th>Title</th>
                                        <th>Latst-Date</th>
                                        <th>Type</th>
                                        <th>Descrition</th>
                                        <th>Action</th>

                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($student_1 as $students)
                                        <tr>

                                            <td>{{$students->Title}} </td>
                                            <td>{{$students->Date}}</td>
                                            <td>{{$students->Type}}</td>
                                            <td>{!!$students->description!!}</td>
                                            <td>
                                                <p class="text-green"><b>Submitted </b></p>

                                            </td>

                                        </tr>

                                    @endforeach





                                </table>
                            </div>
                        </div>
                        {{$student_1->links()}}
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->


                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->

            <!-- /.col -->
        {{--{{ $student->links() }}--}}
        <!-- /.row -->
        </div>


    </section>



@endsection