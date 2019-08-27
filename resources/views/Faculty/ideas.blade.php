
@extends('index')
@section('contents')
        <!DOCTYPE html>

<html>


<section class="content-header">
    <h1>
        ADD NEW IDEAS

    </h1>


    <!-- Main content -->
    <section class="content">

        <div class="box box-info">
            <div class="box-header with-border">

            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="Post"  action="{{url('/creates')}}">
                {{csrf_field()}}
                <div class="box-body">
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Project Tittle:</label>

                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="Ideas_Title" name="Ideas_Title" placeholder="Tittle">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Project ID:</label>

                        <div class="col-sm-6">
                            <input type="number" class="form-control" id="id" name="id" placeholder="cs 499">
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Domain:</label>

                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="ideas_Domain" name="ideas_Domain" placeholder="area">
                        </div>
                    </div>

                    <div class="box-body pad">
                        <label for="ideas_Description" >Description:</label>
                       <bold></bold>
                    <textarea id="editor1" name="editor1" rows="10" cols="80">
                        <input type="text" class="form-control" id="editor1" name="editor1" placeholder="add feedback here.">
                    </textarea>
                    </div>
            </form>
        </div>


        <!-- /.box-body -->
        <div class="box-footer">


            <button type="submit" class="btn btn-info pull-right">Submit</button>
        </div>
        <!-- /.box-footer -->

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