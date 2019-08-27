

@extends('Faculty.FMain')
@section('contents')
    @include('sweet::alert')


    <section class="content" >
    <div class="box box-info" >
        <div class="box-header" style="background-color: #030102">

            <h4 style="color:#11c71d;" class="text-center"><b>5 = OutStanding</b></h4>
            <h4 style="color:#81c71f;" class="text-center"><b>4 = V.Good</b></h4>
            <h4 style="color:#c78f23;" class="text-center"><b>3 = Good   </b></h4>
            <h4 style="color:#c7501c;" class="text-center"><b>2 = Average</b></h4>
            <h4 style="color:#c72414;" class="text-center"><b>1 = Poor</b></h4>


        </div>
        <!-- /.box-header -->
        <!-- form start -->

        <form class="form-horizontal" method="post" action="{{url('/internalsgrades')}}">
            <div class="box-body">
                {{csrf_field()}}
                <br>

                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Project_Title:</label>

                    <div class="col-sm-6">
                        <input type="text" readonly class="form-control" id="Title" Name="Title" Value="{{$Title}}">
                    </div>
                </div>







                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Importance and rationale of problem statement :</label>

                    <div class="col-sm-6">
                        <select class="form-control" id="problem_statement" name="Importance">
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
                        <select class="form-control" id="problem_statement" name="existing">
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
                        <select class="form-control" id="problem_statement" name="objectives">
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
                        <select class="form-control" id="problem_statement" name="architecture">
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
                        <select class="form-control" id="problem_statement" name="presentation">
                            <option>5</option>
                            <option>4</option>
                            <option>3</option>
                            <option>2</option>
                            <option>1</option>
                        </select>

                    </div>
                </div>









                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Comments</label>

                    <div class="col-sm-6">

                <textarea id="Marks" name="descriptioin" rows="50" cols="50" >
                                         Please Type Any Addationnal Note IF You want
                    </textarea>

                    </div>
                </div>





                <!-- /.box-body -->
                <div class="box-footer">


                    <button type="submit" class="btn btn-info pull-right">Submit</button>
                </div>
                <!-- /.box-footer -->
        </form>

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