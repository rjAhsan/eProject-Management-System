
@extends('Evaluator.EMain')
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
                                    <th><b>Title</b></th>
                                    <th><b>Supervisor</b></th>
                                    <th>Session</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($Project as $Projects)
                                    <tr>
                                        <td>{{$Projects->Project_Title}}</td>
                                        <td>{{$Projects->Supervisor_email}} </td>
                                        <td>{{$Projects->Session}}</td>
                                        <td>{{$Projects->Status}}</td>


                                        <td>


                                            <a href="{{url('/DeatilsofProject/'.$Projects->Project_Title.'/ProjectDeatils')}}"><button type="button" class="btn btn-primary pull-right"> <b>Details</b> </button></a>




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