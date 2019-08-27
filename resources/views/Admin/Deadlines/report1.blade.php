@extends('Admin.Main')
@section('contents')




    <section class="content">
        <div class="box box-info">

            <div class="box-header with-border" style="background-color: #1498ff">
                <h3 class="text-center" ><b>FYP-Deadlines List</b></h3>
            </div>
        </div>
        <!-- /.box-header -->
        <!-- form start -->

        <div class="box">
            <div class="row">


                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="profile-username text-center">Fyp Deadlines</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="table-responsive" style="overflow: auto">
                                <table id="exa" class="table table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Title</th>
                                        <th>Latst-Date</th>
                                        <th>Usertype</th>
                                        <th>deadlineType</th>
                                        <th>Descrition</th>
                                        <th>Action</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($Deadline as $students)
                                        <tr>
                                            <td>{{$students->id}}</td>
                                            <td>{{$students->Title}} </td>
                                            <td>{{$students->LastDate}}</td>
                                            <td>{{$students->UserTypes}}</td>
                                            <td>{{$students->DeadlineTypes}}</td>
                                            <td>{!!$students->descriptioin!!}</td>

                                            <td>
                                                <a href="{{url('/Deletedeadline/'.$students->id.'/delete')}}"> <button type="button" class="btn btn-danger pull-right" >Delete</button></a>



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
        {{ $Deadline->links() }}
            <!-- /.row -->
        </div>
    </section>


@endsection