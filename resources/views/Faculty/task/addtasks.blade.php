@extends('Faculty.FMain')
@section('contents')



    @include('sweet::alert')

    <section class="content" >
        <div class="box box-info" >
            <div class="box-header" style="background-color: #0fb4ff">
                <h3 class="text-center"><b>Add New Task</b></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            @foreach($Project as $Project)
            <form class="form-horizontal" method="post" action="{{url('/ProjectTaskAdd')}}">
                <div class="box-body">
                    {{csrf_field()}}
                    <br>

                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Title:</label>

                        <div class="col-sm-6">
                            <input type="hidden" class="form-control" id="Title" Name="Title" Value="{{$Project->Project_Title}}">
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">LastDate:</label>

                        <div class="col-sm-6">
                            <input class="form-control" type="datetime-local" name="LastDate" value="2018-09-11T13:45:00" id="example-datetime-local-input" >
                        </div>
                    </div>





                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">TaskTypes:</label>

                        <div class="col-sm-6">
                            <select class="form-control" id="DeadlineTypes" name="TaskTypes">
                                <option>Proposal</option>
                                <option>FYP-1</option>
                                <option>FYP=2</option>
                                <option>Internal Evaluation</option>
                                <option>Extrnal Evaluation</option>

                            </select>

                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">submitted:</label>

                        <div class="col-sm-6">
                            <select class="form-control" id="DeadlineTypes" name="subitted">
                                <option>No</option>
                                <option>Yes</option>


                            </select>

                        </div>
                    </div>


                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Description</label>

                        <div class="col-sm-6">

                <textarea id="descriptioin" name="descriptioin" rows="50" cols="50" >
                                         Please Type the Description Of Task..
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