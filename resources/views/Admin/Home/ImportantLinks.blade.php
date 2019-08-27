@extends('Admin.Home22')
@section('content')


    <div class="content-wrapper" style="background-color: #1e282c" >
     <div class="container"style="border: dashed" >

         <div class="box"  >
             <div class="row"  >



                 <div class="col-xs-12" style="color: #000000" style="border: dashed">

                         <div class="box-header" >
                             <h2 class="profile-username text-center" >Important  Links  </h2>
                         </div>
                         <!-- /.box-header -->
                         <div class="box-body" >
                             <div class="table-responsive" style="overflow: auto">
                                 <table  id="exa" class="table table-bordered table-hover">
                                     <thead >
                                     <tr>

                                         <th>Link Name</th>
                                         <th>Link Catagoery</th>
                                         <th>Link</th>

                                     </tr>
                                     </thead>
                                     <tbody>
                                     @foreach($student as $students)
                                         <tr>

                                             <td>{{$students->Name}} </td>
                                             <td>{{$students->Category}} </td>
                                             <td><a href="{{$students->Link}}">{{$students->Name}}</a></td>
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
