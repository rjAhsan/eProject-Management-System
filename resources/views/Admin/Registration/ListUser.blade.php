@extends('Admin.Main')
@section('contents')
    @include('sweet::alert')



    <section class="content">
        <div class="box box-info">

            <div class="box-header with-border" style="background-color: #1498ff">
                <h3 class="text-center" ><b>Registred User's List</b></h3>
            </div>
        </div>
            <!-- /.box-header -->

            <!-- form start -->

        <div class="panel-body">

            <input  style="float:right;width: 250px ; hight:15px;border: dot-dash" type="search" onkeyup="search()" class="form-controller" id="search" name="search" placeholder="Search">

        </div>

        <div class="box">
        <div class="row">


            <div class="col-xs-12">
                <div class="box">



                </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive" style="overflow: auto">
                        <table id="DBdata" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>UserId</th>
                                <th>FirstName</th>
                                <th>LastName</th>
                                <th>Email</th>
                                <th>Department</th>
                                <th>UserType</th>
                                <th>Gender</th>
                                <th>Phone_Number</th>
                                <th>Password</th>
                                <th>Action</th>
                            </tr>
                            </thead>




                            <tbody id="">
                            @foreach($student as $students)
                                <tr >
                                    <td>{{$students->id}}</td>
                                    <td>{{$students->Fname}} </td>
                                    <td>{{$students->Lname}}</td>
                                    <td>{{$students->email}}</td>
                                    <td>{{$students->Department}}</td>
                                    <td>{{$students->usertype}}</td>
                                    <td>{{$students->Gender}}</td>
                                    <td>{{$students->Phone_Number}}</td>
                                    <td>{{$students->password}}</td>
                                    <td>
     <a href="{{url('/DeleteUser/'.$students->id.'/delete')}}"> <button type="button" class="btn btn-danger pull-right" >Delete</button></a>

     <a href="{{url('/updateUsers/'.$students->id.'/edit')}}"><button type="button" class="btn btn-info pull-right"> Edit </button></a>

                                    </td>
                                </tr>

                            @endforeach

                            </tbody>








                        </table>
                            <table id="Searchdata" class="table table-bordered table-hover" style="display:none">
                                 <thead>
                                <tr>
                                    <th>UserId</th>
                                    <th>FirstName</th>
                                    <th>LastName</th>
                                    <th>Email</th>
                                    <th>Department</th>
                                    <th>UserType</th>
                                    <th>Gender</th>
                                    <th>Phone_Number</th>
                                    <th>Password</th>
                                    <th>Action</th>
                                </tr>
                                </thead>




                                <tbody id="seccess">

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
        {{$student->links()}}
        <!-- /.box -->

        <!-- /.col -->

        <!-- /.row -->

    </section>



    <script type="text/javascript">

        $('#search').on('keyup',function(){

            var search = $('#search').val();
            if(search){
                $('#DBdata').hide();
                $('#Searchdata').show();

            }

            else {
                $('#Searchdata').hide();
                $('#DBdata').show();

            }



            var _token = $('input[name="_token"]').val();

            $.ajax({

                type : 'get',

                url : "{{ url('User_Search/check') }}",

                data:{search:search,_token:_token},

                success:function(data){

                    $('tbody').html(data);

                    $('#hidedata').hide();


                }

            });



        })


            {{--function search (){--}}

       {{--var search=$('search').value;--}}

// if(search){
// $('#DBdata').hide();
//     $('#Searchdata').show();
//
// }
//
//         else {
//                 $('#Searchdata').hide();
//                 $('#DBdata').show();
//
//             }
//


            {{--var _token = $('input[name="_token"]').val();--}}

            {{--$.ajax({--}}

                {{--type : "POST",--}}

                {{--url : "{{ url('User_Search/check') }}",--}}

                {{--data:{search:search,--}}
                    {{--_token:_token--}}
                {{--},--}}

                {{--datatype:'html',--}}

                {{--success:function(response){--}}

                    {{--$('#seccess').html(response);--}}






        {{--}--}}



    </script>




@endsection
