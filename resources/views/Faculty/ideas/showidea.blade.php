@extends('Faculty.FMain')
@section('contents')
    @include('sweet::alert')


    <section class="content">

        <!-- /.box-header -->
        <!-- form start -->

        <div class="box">
            <div class="row">


                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header" style="background-color: #0fb4ff">
                            <h3 class="text-center"><b>Ideas List</b></h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="table-responsive" style="overflow: auto">
                                <table id="exa" class="table table-bordered table-hover">
                                    <thead>
                                    <tr>


                                        <th>Project Title</th>
                                        <th>Project Domain</th>
                                        <th>Project Type</th>
                                        <th>Project Description</th>
                                        <th>Action</th>

                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($student as $students)

                                        <tr>


                                            <td>{{$students->Ideas_Title}}</td>
                                            <td>{{$students->ideas_Domain}}</td>
                                            <td>{{$students->project_type}}</td>
                                            <td>{!!$students->ideas_Description!!}</td>
                                            <td>
                                                <a href="{{url('/Deleteideafas/'.$students->id.'/delete')}}"> <button type="button" class="btn btn-danger pull-right" >Delete</button></a>




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