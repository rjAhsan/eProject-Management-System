@extends('Student.index')
@section('contents')




    <section class="content">
        <div class="box box-info">

            <div class="box-header with-border" style="background-color: #1498ff">
                <h3 class="text-center" ><b>Marks Sheet</b></h3>
            </div>
        </div>
        <!-- /.box-header -->
        <!-- form start -->

        <div class="box">
            <div class="row">


                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header" style="background-color: #1498ff">
                            <h3 class="profile-username text-center" >PROPOSAL COMMENTS(Reviews)</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="table-responsive" style="overflow: auto">
                                <table id="exa" class="table table-bordered table-hover">
                                    <thead>
                                    <tr>

                                        <th>Title</th>
                                        <th>Reviews</th>


                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($propsalReview as $propsalReviews)

                                        <tr>

                                                <td>Proposal</td>
                                            <td>{!! $propsalReviews->Comments !!}</td>




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
                <!-- /.box-body -->
            </div>
            <!-- /.box -->

            <!-- /.col -->
        {{--{{ $student->links() }}--}}
        <!-- /.row -->
        </div>
        <div class="box">
            <div class="row">


                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header" style="background-color: #1498ff">
                            <h3 class="profile-username text-center" >Report-1 Marks</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="table-responsive" style="overflow: auto">
                                <table id="exa" class="table table-bordered table-hover">
                                    <thead>
                                    <tr>

                                        <th>Title</th>
                                        <th>TotalMarks </th>
                                        <th>ObtainedMarks</th>

                                    </tr>
                                    </thead>
                                    <tbody>
@foreach($Marks as $Mark)

                                    <tr>

                                        <td>Report-1</td>
                                        <td>5</td>

                                        <td>{{round($Mark->Report_1)}}</td>


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
                <!-- /.box-body -->
            </div>
            <!-- /.box -->

            <!-- /.col -->
        {{--{{ $student->links() }}--}}
        <!-- /.row -->
        </div>
        <div class="box">
            <div class="row">


                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header" style="background-color: #1498ff">
                            <h3 class="profile-username text-center" >Report-2 Marks</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="table-responsive" style="overflow: auto">
                                <table id="exa" class="table table-bordered table-hover">
                                    <thead>
                                    <tr>

                                        <th>Title</th>
                                        <th>TotalMarks</th>
                                        <th>ObtainedMarks</th>

                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($Marks as $Mark)
                                    <tr>

                                        <td>Report-2</td>
                                        <td>5</td>
                                        {{--<td>{{round($Marks->Report_2)}}</td>--}}



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
                <!-- /.box-body -->
            </div>
            <!-- /.box -->

            <!-- /.col -->
        {{--{{ $student->links() }}--}}
        <!-- /.row -->
        </div>
        <div class="box">
            <div class="row">


                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header" style="background-color: #1498ff">
                            <h3 class="profile-username text-center" >Internal_1 Marks</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="table-responsive" style="overflow: auto">
                                <table id="exa" class="table table-bordered table-hover">
                                    <thead>
                                    <tr>

                                        <th>Title</th>
                                        <th>Evaluator</th>
                                        <th>TotalMarks</th>
                                        <th>ObtainedMarks</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($Marks as $Mark)

                                    <tr>
                                        <td>Internal_1 Marks</td>
                                        <td>{{$internal_1}}</td>
                                        <td>15</td>
                                        <td>{{round($Mark->internal_1)}}</td>



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
                <!-- /.box-body -->
            </div>
            <!-- /.box -->

            <!-- /.col -->
        {{--{{ $student->links() }}--}}
        <!-- /.row -->
        </div>
        <div class="box">
            <div class="row">


                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header" style="background-color: #1498ff">
                            <h3 class="profile-username text-center" >Internal_2 Marks</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="table-responsive" style="overflow: auto">
                                <table id="exa" class="table table-bordered table-hover">
                                    <thead>
                                    <tr>

                                        <th>Title</th>
                                        <th>Evaluator</th>
                                        <th>TotalMarks</th>
                                        <th>ObtainedMarks</th>


                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($Marks as $Mark)

                                    <tr>
                                        <td>Internal_2 Marks</td>
                                        <td>{{$internal_2}}</td>
                                        <td>15</td>
                                        <td>{{round($Mark->internal_2)}}</td>




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
                <!-- /.box-body -->
            </div>
            <!-- /.box -->

            <!-- /.col -->
        {{--{{ $student->links() }}--}}
        <!-- /.row -->
        </div>
        <div class="box">
            <div class="row">


                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header" style="background-color: #1498ff">
                            <h3 class="profile-username text-center" >Supervisor_Internal Marks</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="table-responsive" style="overflow: auto">
                                <table id="exa" class="table table-bordered table-hover">
                                    <thead>
                                    <tr>

                                        <th>Title</th>
                                        <th>Evaluator</th>
                                        <th>TotalMarks</th>
                                        <th>ObtainedMarks</th>


                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($Marks as $Mark)
                                    <tr>
                                        <td>Supervisor_Internal</td>
                                        <td>{{$supervisor}}</td>
                                        <td>15</td>
                                        <td>{{round($Mark->Supervisor_Internal)}}</td>




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
                <!-- /.box-body -->
            </div>
            <!-- /.box -->

            <!-- /.col -->
        {{--{{ $student->links() }}--}}
        <!-- /.row -->
        </div>
        <div class="box">
            <div class="row">


                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header" style="background-color: #1498ff">
                            <h3 class="profile-username text-center" >External Marks</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="table-responsive" style="overflow: auto">
                                <table id="exa" class="table table-bordered table-hover">
                                    <thead>
                                    <tr>

                                        <th>Title</th>
                                        <th>Evaluator</th>
                                        <th>TotalMarks</th>
                                        <th>ObtainedMarks</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($Marks as $Mark)

                                    <tr>

                                        <td>External_1 Marks</td>
                                        <td>{{$External}}</td>
                                        <td>30</td>
                                        <td>{{round($Mark->External)}}</td>




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
                <!-- /.box-body -->
            </div>
            <!-- /.box -->

            <!-- /.col -->
        {{--{{ $student->links() }}--}}
        <!-- /.row -->
        </div>

        <div class="box">
            <div class="row">


                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header" style="background-color: #1498ff">
                            <h3 class="profile-username text-center" >Supervisor(Externals)</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="table-responsive" style="overflow: auto">
                                <table id="exa" class="table table-bordered table-hover">
                                    <thead>
                                    <tr>

                                        <th>Title</th>
                                        <th>Evaluator</th>
                                        <th>TotalMarks</th>

                                        <th>ObtainedMarks</th>

                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($Marks as $Mark)
                                    <tr>

                                        <td>Supervisor Externals</td>
                                        <td>{{$supervisor}}</td>
                                        <td>15</td>
                                        <td>{{round($Mark->Supervisor_exxternal)}}</td>




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
                <!-- /.box-body -->
            </div>
            <!-- /.box -->

            <!-- /.col -->
        {{--{{ $student->links() }}--}}
        <!-- /.row -->
        </div>
        <!-- /.box-header -->
        <!-- form start -->



    </section>






@endsection