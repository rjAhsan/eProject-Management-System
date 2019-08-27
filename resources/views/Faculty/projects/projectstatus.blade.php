@extends('Faculty.FMain')
@section('contents')
    @include('sweet::alert')

    <section class="content">
        <div class="box box-info">

            <div class="box-header with-border" style="background-color: #1498ff">
                <h3 class="text-center" ><b>Registred Projects List</b></h3>
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
                                        <th>Title</th>
                                        <th>Domain</th>
                                        <th>Project-Type</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($Project as $Projects)
                                        <tr>
                                            <td>{{$Projects->Project_Title}}</td>
                                            <td>{{$Projects->Domain}} </td>
                                            <td>{{$Projects->Project_Type}}</td>

                                            <td>



                                                <a href="{{url('/ProjeectStatus/'.$Projects->id.'/Status')}}"> <button type="button" class="btn btn-info pull-right" ><b>Status</b></button></a>

                                                <a href="{{url('/AddProjectMarks/'.$Projects->id.'/AddMarks')}}"><button type="button" class="btn btn-primary pull-right"> <b>Add Marks</b> </button></a>

                                                <a href="{{url('/updateUsers/'.$Projects->id.'/Addmeeting')}}"><button type="button" class="btn btn-success pull-right"> <b>Add Meeting</b> </button></a>

                                                <a href="{{url('/ProjectTask/'.$Projects->id.'/AssignTask')}}"><button type="button" class="btn btn-danger pull-right"> <b>Assign Task</b> </button></a>



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