@extends('Admin.Main')
@section('contents')
    @include('sweet::alert')

    <section class="content">

        <div class="box box-info">
            <div class="box-header" style="background-color: #0fb4ff">
                <h3 class="text-center"><b>Add New News</b></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="Post"  action="{{url('/AdminHomeAddNews')}}">
                {{csrf_field()}}
                <div class="box-body">
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Title:</label>
                        <span id="Title"></span>
                        <div class="col-sm-6">

                            <input type="text"  class="form-control" id="NTitle" name="Title" placeholder="Title" required>

                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Date:</label>

                        <div class="col-sm-6">
                            <input class="form-control" type="datetime-local" name="Date" value="2018-10-10T13:45:00" required id="Date">
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Description:</label>
                        <span id="Description"></span>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="NDescription" name="Description" required placeholder="Description">
                        </div>
                    </div>






                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Link:</label>
                        <span id="Description"></span>
                        <div class="col-sm-6">
                            <input type="url" class="form-control" id="Description"  name="Link" required placeholder="Link">
                        </div>
                    </div>






                    <!-- /.box-body -->
                    <div class="box-footer">


                        <button type="submit" id="register" class="btn btn-info pull-right">Submit</button>
                    </div>
                    <!-- /.box-footer -->
            </form>

            <br>
            <br>
            <div class="box">
                <div class="row">


                    <div class="col-xs-12">
                        <div class="box">
                            <div class="box-header">
                                <h3 class="profile-username text-center">News Data </h3>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <div class="table-responsive" style="overflow: auto">
                                    <table id="exa" class="table table-bordered table-hover">
                                        <thead>
                                        <tr>
                                            <th>Title</th>
                                            <th>URL</th>
                                            <th>Date</th>
                                            <th>Description</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($student as $students)
                                            <tr>
                                                <td>{{$students->Title}}</td>
                                                <td><a href="{{$students->URL}}">{{$students->URL}}</a> </td>
                                                <td>{{$students->Date}} </td>
                                                <td>{{$students->Description}} </td>

                                                <td>
                                                    <a href="{{url('/AdminHomepagenewss/'.$students->id.'/delete')}}"> <button type="button" class="btn btn-danger pull-right" >Delete</button></a>


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
                {{ $student->links()}}

            </div>
        </div>

    </section>
    <script>
        $(document).ready(function(){

            $('#NTitle').blur(function(){
                var Title = '';
                var NTitle = $('#NTitle').val();
                var _token = $('input[name="_token"]').val();

                var filter =/^[a-z ,.'-]+$/i;

                if(!filter.test(NTitle))
                {
                    $('#Title').html('<label class="text-danger">Invalid Title</label>');
                    $('#NTitle').addClass('has-error');
                    $('#register').attr('disabled', 'disabled');
                }
                else
                {

                    $('#Title').html('<label class="text-success"><i class="fa fa-check"></i></label>');
                    $('#NTitle').removeClass('has-error');
                    $('#register').attr('disabled', false);

                }
            });

        });
    </script>


    <script>
        $(document).ready(function(){

            $('#NDescription').blur(function(){
                var Description = '';
                var NDescription = $('#NDescription').val();
                var _token = $('input[name="_token"]').val();

                var filter =/[^A-Za-z0-9]+/i;

                if(!filter.test(NDescription))
                {
                    $('#Description').html('<label class="text-danger">Invalid Title</label>');
                    $('#NDescription').addClass('has-error');
                    $('#register').attr('disabled', 'disabled');
                }
                else
                {

                    $('#Description').html('<label class="text-success"><i class="fa fa-check"></i></label>');
                    $('#NDescription').removeClass('has-error');
                    $('#register').attr('disabled', false);

                }
            });

        });
    </script>






@endsection