@extends('Admin.Main')
@section('contents')

    @include('sweet::alert')



    <section class="content">
        <div class="box box-info">

            <div class="box-header with-border" style="background-color: #1498ff">
                <h3 class="text-center" ><b>Requested Projects List</b></h3>
            </div>
        </div>
        <!-- /.box-header -->
        <!-- form start -->


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

                                        <th>Project_Title</th>
                                        <th>Project_Domain</th>
                                        <th>Project_Type</th>
                                        <th>Supervisor_Email</th>
                                        <th>Student_One</th>
                                        <th>Student_Two</th>
                                        <th>Student_Three</th>
                                        <th>Project_Description</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($student as $students)
                                        <tr>

                                            <td>{{$students->Title}} </td>
                                            <td>{{$students->Domain}}</td>
                                            <td>{{$students->Project_Type}}</td>
                                            <td>{{$students->Supervisor_email}}</td>
                                            <td>{{$students->member_email_1}}</td>
                                            <td>{{$students->member_email_2}}</td>
                                            <td>{{$students->member_email_3}}</td>
                                            <td>{!!$students->descriptioin  !!}</td>
                                            <td>
                                                <a href="{{url('/RejectePro/'.$students->id.'/Reject')}}"> <button type="button" class="btn btn-danger pull-right" > Reject </button></a>
                                                <a href="{{url('/RequestProjectAccept/'.$students->id.'/Add')}}"><button type="button" class="btn btn-success pull-right"> Accept </button></a>

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

            <!-- /.row -->
        </div>
    </section>


@endsection