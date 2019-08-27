@extends('Admin.Main')
@section('contents')

    @include('sweet::alert')
    <section class="content">

        <div class="box box-info">
            <div class="box-header" style="background-color: #0fb4ff">
                <h3 class="text-center"><b>Add Projects</b></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="Post"  action="{{url('/AdminHomeAddProjectsHomepage')}}">
                {{csrf_field()}}
                <div class="box-body">
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Project Title:</label>

                        <div class="col-sm-6">
                            <input type="text" required class="form-control" id="Title" name="Title" placeholder="ProjectTitle">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Domain:</label>

                        <div class="col-sm-6">
                            <select class="form-control" id="Session" name="Domain">
                                <option>WEB</option>
                                <option>Andorid</option>
                                <option>Image Processing</option>
                                <option>Artifical Intellegence</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Choose Poster:</label>

                        <div class="col-sm-6">
                            <input type="file" name="picture" required>
                        </div>
                    </div>

                    <!-- /.box-body -->
                    <div class="box-footer">


                        <button type="submit" class="btn btn-info pull-right">Submit</button>
                    </div>
                    <!-- /.box-footer -->
            </form>

            <br>
            <br>
            {{--<div class="box">--}}
                {{--<div class="row">--}}


                    {{--<div class="col-xs-12">--}}
                        {{--<div class="box">--}}
                            {{--<div class="box-header">--}}
                                {{--<h3 class="profile-username text-center">Links Data </h3>--}}
                            {{--</div>--}}
                            {{--<!-- /.box-header -->--}}
                            {{--<div class="box-body">--}}
                                {{--<div class="table-responsive" style="overflow: auto">--}}
                                    {{--<table id="exa" class="table table-bordered table-hover">--}}
                                        {{--<thead>--}}
                                        {{--<tr>--}}
                                            {{--<th>Link Id</th>--}}
                                            {{--<th>Link Name</th>--}}
                                            {{--<th>Link Catagoery</th>--}}
                                            {{--<th>Link</th>--}}
                                            {{--<th>Action</th>--}}
                                        {{--</tr>--}}
                                        {{--</thead>--}}
                                        {{--<tbody>--}}
                                        {{--@foreach($student as $students)--}}
                                            {{--<tr>--}}
                                                {{--<td>{{$students->id}}</td>--}}
                                                {{--<td>{{$students->Name}} </td>--}}
                                                {{--<td>{{$students->Category}} </td>--}}
                                                {{--<td><a href="{{$students->Link}}">{{$students->Name}}</a></td>--}}
                                                {{--<td>--}}
                                                    {{--<a href="{{url('/AdminHomepageLinK/'.$students->id.'/delete')}}"> <button type="button" class="btn btn-danger pull-right" >Delete</button></a>--}}


                                                {{--</td> </tr>--}}

                                        {{--@endforeach--}}





                                    {{--</table>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<!-- /.box-body -->--}}
                        {{--</div>--}}
                        {{--<!-- /.box -->--}}


                    {{--</div>--}}
                    {{--<!-- /.box-body -->--}}
                {{--</div>--}}
                {{--{{ $student->links()}}--}}

            </div>
        </div>

    </section>








@endsection