@extends('Admin.Home22')
@section('content')


    <div class="content-wrapper" style="background-color: #000000" >
        <div class="container">

            <div class="box">
                <div class="row">


                    <div class="col-xs-12" style="color: #000000">
                        <div class="box">
                            <div class="box-header">
                                <h2 class="profile-username text-center">Postion Holders OF Comsats (BS Program)</h2>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <div class="table-responsive" style="overflow: auto">
                                    <table id="exa" class="table table-bordered table-hover">
                                        <thead>
                                        <tr>

                                            <th>Project Title</th>
                                            <th>Session</th>
                                            <th>Postion</th>
                                            <th>Supervisor</th>
                                            <th>Students</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($student as $students)
                                            <tr>

                                                <td>{{$students->Title}} </td>
                                                <td>{{$students->Session}} </td>
                                                <td>{{$students->Postion}} </td>
                                                <td>{{$students->Supervisor}} </td>
                                                <td>{{$students->StudentS}} </td>
                                               </tr>

                                        @endforeach





                                    </table>

                                </div>
                                {{$student->links()}}
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->


                    </div>
                    <!-- /.box-body -->
                </div>
                {{--{{ $student->links()}}--}}
                {{----}}
            </div>




        </div>
    </div>

@endsection
