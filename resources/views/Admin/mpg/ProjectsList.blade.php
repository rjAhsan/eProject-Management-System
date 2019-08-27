@extends('Admin.Main')
@section('contents')

    @include('sweet::alert')



    <section class="content">
        <div class="box box-info">

            <div class="box-header with-border" style="background-color: #1498ff">
                <h3 class="text-center" ><b>Registred Project's List</b></h3>
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
                                        <th>Project Title</th>
                                        <th>Supervisor</th>
                                        <th>Members</th>
                                        <th>Domain</th>
                                        <th>Type</th>
                                        <th>Session</th>
                                        <th>Stataus</th>

                                    </tr>
                                    </thead>



                                    <tbody>
                                    @foreach($projects as $project)
                                        <tr>
                                            <td>{{$project->Project_Title}}</td>
                                            <td>{{$project->Supervisor_email}} </td>

                                            <td>{{$project->Member_1_email}}<br>{{$project->Member_2_email}}<br>{{$project->Member_3_email}}</td>

                                            <td>{{$project->Domain}}</td>
                                            <td>{{$project->Project_Type}}</td>
                                            <td>{{$project->Session}}</td>
                                            <td>{{$project->Status}}</td>


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
        {{$projects->links()}}
        <!-- /.box -->

            <!-- /.col -->

            <!-- /.row -->
        </div>
    </section>









@endsection