@extends('Faculty.FMain')
@section('contents')







    <section class="content">
        <div class="box box-info">

            <div class="box-header with-border" style="background-color: #1498ff">
                <h3 class="text-center" ><b>Rejected Project List</b></h3>
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

                                        <th>Reason</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($student as $students)
                                        <tr>
                                            <td><b>{{$students->Title}}</b></td>
                                            <td>{!! $students->descriptioin !!} </td>
                                             </tr>

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