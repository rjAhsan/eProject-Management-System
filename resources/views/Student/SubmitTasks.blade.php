@extends('Student.index')
@section('contents')







    @include('sweet::alert')

    <section class="content" >
        <div class="box box-info" >
            <div class="box-header" style="background-color: #0fb4ff">
                <h3 class="text-center"><b>Submittion Task</b></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            @foreach($student as $Project)

                <form class="form-horizontal" enctype="multipart/form-data" method="post" action="{{url('/ProjectSubmitTaskAdd')}}">
                    <div class="box-body">
                        {{csrf_field()}}
                        <br>

                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Task:</label>

                            <div class="col-sm-6">
                                <input type="text" readonly class="form-control" id="Title" Name="Task_id" Value="{{$Project->id}}">
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Project:</label>

                            <div class="col-sm-6">
                                <input type="text" readonly class="form-control" id="Title" Name="PTitle" Value="{{$Project->Title}}">
                            </div>
                        </div>





                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">SubmissionDate:</label>

                            <div class="col-sm-6">
                                <input class="form-control" type="datetime-local" name="LastDate" value="2018-09-11T13:45:00" id="example-datetime-local-input" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="control-label col-sm-2">Upload File:</label>
                            <div class="col-sm-6">
                                <input class="form-control" required type="file" name="upload_file" id="upload_file">
                            </div>
                        </div>








                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">


                        <button type="submit" class="btn btn-info pull-right">Submit</button>
                    </div>
                    <!-- /.box-footer -->
                </form>
            @endforeach
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