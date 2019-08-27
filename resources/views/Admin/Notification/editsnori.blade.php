@extends('Admin.Main')
@section('contents')
    @include('sweet::alert')




    <section class="content">
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="text-center"><b>Student Notification Update</b></h3>
        </div>
        <!-- /.box-header -->

        <!-- form start -->

        @foreach($student as $students)
        <form class="form-horizontal" method="post" action="{{url('/updatestdNotis/'.$students->id.'/save')}}">

            <div class="box-body">

                {{csrf_field()}}
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Title:</label>

                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="NTitle" name="NTitle" value="{{$students->Title}}">
                    </div>
                </div>


                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Description</label>

                    <div class="col-sm-6">

                <textarea id="descriptioin" name="descriptioin" rows="20" cols="20" >
{{$students->Description}}

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