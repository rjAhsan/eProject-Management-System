
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


        @foreach($projects as $project)

            <form class="form-horizontal" method="Post"  action="{{url('/feedback/'.$project->id)}}">
                {{csrf_field()}}
                <div class="box-body">
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label" >Id</label>

                        <div class="col-sm-6">
                            <label for="inputEmail3" class="col-sm-2 control-label" >{{$project->id}}</label>

                        </div>

                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Project title</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="Project_Title" name="Project_Title" placeholder="Tittle">
                        </div>
                    </div>


                    </div>
                    <h3 class="text-center">1 = poor 2 = average 3= good 4= very good 5 = outstanding</h3>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Importance and rationale of problem statement :</label>

                        <div class="col-sm-6">
                            <select class="form-control" id="problem_statement" name="problem_statement">
                                <option>5</option>
                                <option>4</option>
                                <option>3</option>
                                <option>2</option>
                                <option>1</option>
                            </select>

                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Review of existing work, tools, competitors, etc. :</label>

                        <div class="col-sm-6">
                            <select class="form-control" id="problem_statement" name="problem_statement">
                                <option>5</option>
                                <option>4</option>
                                <option>3</option>
                                <option>2</option>
                                <option>1</option>
                            </select>

                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Level of completion w.r.t. to target/objectives :</label>

                        <div class="col-sm-6">
                            <select class="form-control" id="problem_statement" name="problem_statement">
                                <option>5</option>
                                <option>4</option>
                                <option>3</option>
                                <option>2</option>
                                <option>1</option>
                            </select>

                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Structure of code / quality of software architecture  :</label>

                        <div class="col-sm-6">
                            <select class="form-control" id="problem_statement" name="problem_statement">
                                <option>5</option>
                                <option>4</option>
                                <option>3</option>
                                <option>2</option>
                                <option>1</option>
                            </select>

                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Quality of demonstration and presentation  :</label>

                        <div class="col-sm-6">
                            <select class="form-control" id="problem_statement" name="problem_statement">
                                <option>5</option>
                                <option>4</option>
                                <option>3</option>
                                <option>2</option>
                                <option>1</option>
                            </select>

                        </div>
                    </div>



                    <div class="box-body pad">

                    <textarea id="editor1" name="editor1" rows="10" cols="80">
                        <input type="text" class="form-control" id="editor1" name="editor1" placeholder="Comments:(Mandatory in case of not-recommended for final evaluation)">
                    </textarea>
                    </div>
            </form>

               @endforeach

        </div>


                    <!-- /.box-body -->
                    <div class="box-footer">


                        <button type="submit" class="btn btn-info pull-right">Submit</button>
                    </div>
                    <!-- /.box-footer -->

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