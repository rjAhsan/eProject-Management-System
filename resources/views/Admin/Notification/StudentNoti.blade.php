
@extends('Admin.Main')
@section('contents')
 @include('sweet::alert')




    <section class="content">



        <div class="box box-info">
            <div class="box-header" style="background-color: #0fb4ff">
                <h3 class="text-center"><b>Add New</b></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="post" action="{{url('/createsStuNotification')}}" >
                <div class="box-body">

                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Title:</label>

                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="NTitle" name="NTitle" placeholder="Title">
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Description</label>

                        <div class="col-sm-6">

                <textarea id="descriptioin" name="descriptioin" rows="20" cols="20" >
                                            This is my textarea to be replaced with CKEditor.
                    </textarea>

                        </div>
                    </div>






                </div>
                <!-- /.box-body -->
                <div class="box-footer">

                    <button type="submit" class="btn btn-info pull-right">Submit</button>
                </div>
                <!-- /.box-footer -->
            </form>
<br>
            <div class="box">
                <div class="row">


                    <div class="col-xs-12">
                        <div class="box">
                            <div class="box-header">
                                <h3 class="profile-username text-center">Notification Data </h3>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <div class="table-responsive" style="overflow: auto">
                                    <table id="exa" class="table table-bordered table-hover">
                                        <thead>
                                        <tr>
                                            <th>Notification Id</th>
                                            <th>Notification Title</th>
                                            <th>Notification Description</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($student as $students)
                                            <tr>
                                                <td>{{$students->id}}</td>
                                                <td>{{$students->Title}} </td>
                                                <td>{!!$students->Description!!}</td>
                                                <td>
          <a href="{{url('/DeletestdNoti/'.$students->id.'/delete')}}"> <button type="button" class="btn btn-danger pull-right" >Delete</button></a>

          <a href="{{url('/updatestdNoti/'.$students->id.'/edit')}}"><button type="button" class="btn btn-info pull-right"> Edit </button></a>

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

            </div>
    </section>
    <script>
        $(function () {
            // Replace the <textarea id="editor1"> with a CKEditor
            // instance, using default configuration.
            CKEDITOR.replace('descriptioin')
            //bootstrap WYSIHTML5 - text editor

        })
    </script>

@endsection

