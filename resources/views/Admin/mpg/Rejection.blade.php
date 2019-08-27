@extends('Admin.Main')
@section('contents')

    @include('sweet::alert')


    <section class="content">

        <div class="box box-info">
            <div class="box-header with-border" style="background-color: #1498ff">
                <h3 class="text-center" ><b>Add Reason For Rejection</b></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            @foreach($student as $students)
                <form class="form-horizontal" method="Post"  action="{{url('addprorejectionreason')}}">
                    {{csrf_field()}}


                    <div class="box-body">

                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Project Title:</label>

                            <div class="col-sm-6">
                                <input type="text" readonly class="form-control" id="fname" name="fname" value="{{$students->Title}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Supervisor Email:</label>

                            <div class="col-sm-6">
                                <input type="text" readonly class="form-control" id="lname" name="lname" value="{{$students->Supervisor_email}}">
                            </div>
                        </div>




                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Description</label>

                            <div class="col-sm-6">

                <textarea id="descriptioin" name="descriptioin" required rows="50" cols="50" >
                                         Please Type Rejection Reason
                    </textarea>

                            </div>
                        </div>

















                        <!-- /.box-body -->
                        <div class="box-footer">


                            <button type="submit" class="btn btn-success pull-right">AddFeedBack</button>
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





