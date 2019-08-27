
 @extends('index')
@section('contents')
<!DOCTYPE html>

<html>


<section class="content-header">
    <h1>
        ADD PROJECT FEEDBACK

    </h1>


    <!-- Main content -->
    <section class="content">

        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="text-center">Add Marks</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="Post"  action="{{url('/creates')}}">
                {{csrf_field()}}
                <div class="box-body">
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Project Tittle:</label>

                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="fname" name="fname" placeholder="Tittle">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Project ID:</label>

                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="lname" name="lname" placeholder="cs 499">
                        </div>
                    </div>





                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Grade:</label>

                        <div class="col-sm-6">
                            <select class="form-control" id="Department" name="Department">
                                <option>A</option>
                                <option>B</option>
                                <option>c</option>
                                <option>d</option>
                            </select>

                        </div>
                    </div>


                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Type:</label>

                        <div class="col-sm-6">
                            <select class="form-control" id="UserType" name="UserType"  onchange="yesnoCheck(this);">
                                <option>Proposal</option>
                                <option value="other">Report</option>
                                <option>Code</option>

                            </select>


                            <div  id="ifYes" style="display: none;">


                                <BR>
                                <div class="col-sm-6">

                                    <div class="form-group">

                                        <div class="col-sm-6">
                                            <select class="form-control" id="Desigination" name="Desigination">
                                                <option>Non</option>
                                                <option>Professor</option>
                                                <option>Associate Professo</option>
                                                <option>Assistant Professor</option>
                                                <option>Research Associate Professor</option>
                                                <option>Senior Lecturer</option>
                                            </select>



                                        </div>
                                    </div>
                                </div>


                                <div class="col-sm-6">


                                    <div class="col-sm-6">
                                        <select class="form-control" id="FacultyType" name="FacultyType">
                                            <option>Non</option>
                                            <option>Perment</option>
                                            <option>Visting</option>

                                        </select>



                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>





                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Marks:</label>

                        <div class="col-sm-6">
                            <input type="number" class="form-control" id="PhoneNumber" name="PhoneNumber" placeholder="marks">
                        </div>
                    </div>

                    <div class="box-body pad">

                    <textarea id="editor1" name="editor1" rows="10" cols="80">
                        <input type="number" class="form-control" id="editor1" name="editor1" placeholder="add feedback here.">
                    </textarea>
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