@extends('Faculty.FMain')
@section('contents')




    <section class="content">
        <div class="box box-info">

            <div class="box-header with-border" style="background-color: #1498ff">
                <h3 class="text-center" ><b>Requsted User's List</b></h3>
            </div>
        </div>
        <!-- /.box-header -->
        <!-- form start -->

        <div class="box">
            <div class="row">


                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="profile-username text-center">List OF Groups Table</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="table-responsive" style="overflow: auto">
                                <table id="exa" class="table table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th>Group ID</th>
                                        <th>Project Title</th>
                                        <th>Project Members</th>
                                        <th>Description</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                        <tr>
                                            <td>{{$data->Project_id}}</td>
                                            <td>{{$data->Project_title}} </td>
                                            <td><ol>
                                                    <li>{{$data2->Mem}}</li>
                                                    <li>{{$data2->Mem1}}</li>
                                                    <li>{{$data2->Mem2}}</li>

                                                </ol></td>


                                            <td>{{$data->Description}}</td>
                                            <td>
                                                <a href="{{url('/DeleteUser/'.$data2->id.'/delete')}}"> <button type="button" class="btn btn-danger pull-right" >Rejected</button></a>

                                                <a href="{{url('/updateUsers/'.$data2->id.'/edit')}}"><button type="button" class="btn btn-info pull-right"> Accepted </button></a>

                                            </td>

                                        </tr>







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