@extends('index')
@section('contents')
        <!DOCTYPE html>

<html>


<section class="content-header">
    <h1>
        ASSIGN TASK

    </h1>


    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-info">
                    <div class="box-header">

                        <!-- tools box -->
                        project name
                        id
                        <div class="form-group">

                            <input type="file" id="exampleInputFile">
                        </div>
                        <!-- /. tools -->
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body pad">
                        <form>
                    <textarea id="editor1" name="editor1" rows="10" cols="80">
                                            add task detail.
                    </textarea>
                        </form>
                        <button type="button" class="btn btn-warning">submit</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.box -->
        <!-- jQuery 3 -->
        <script src="{{url('Admin/bower_components/jquery/dist/jquery.min.js')}}"></script>
        <!-- Bootstrap 3.3.7 -->
        <script src="{{url('Admin/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
        <!-- FastClick -->
        <script src="{{url('Admin/bower_components/fastclick/lib/fastclick.js')}}"></script>
        <!-- AdminLTE App -->
        <script src="{{url('Admin/dist/js/adminlte.min.js')}}"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="{{url('Admin/dist/js/demo.js')}}"></script>
        <!-- CK Editor -->
        <script src="{{url('Admin/bower_components/ckeditor/ckeditor.js')}}"></script>
        <!-- Bootstrap WYSIHTML5 -->
        <script src="{{url('Admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
        <script>
            $(function () {
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace('editor1')
                //bootstrap WYSIHTML5 - text editor
                $('.textarea').wysihtml5()
            })
        </script>
    </section>
</section>
</html>

@endsection