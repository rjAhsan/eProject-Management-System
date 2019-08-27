@extends('Faculty.FMain')
@section('contents')
    @include('sweet::alert')



    <section class="content" >
        <div class="box box-info" >
            <div class="box-header" style="background-color: #0fb4ff">
                <h3 class="text-center"><b>Add Propsal  Reviews</b></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->

            <form class="form-horizontal" method="post" action="{{url('/AddproposalRevies')}}">
                <div class="box-body">
                    {{csrf_field()}}
                    <br>


                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Project Title:</label>

                        <div class="col-sm-6">
                            <input type="text" readonly class="form-control" id="Title" Name="Title" Value="{{$propsal->projecttitle}}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label"></label>

                        <div class="col-sm-6">
                            <input type="hidden" class="form-control" id="supervisor" Name="supervisor" Value="{{$propsal->Supervisoremail}}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label"></label>

                        <div class="col-sm-6">
                            <input type="hidden" class="form-control" id="selectfaculty" Name="selectfaculty" Value="{{$propsal->SelectFaculty}}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label"><b>Reviews/Recomandations</b></label>

                        <div class="col-sm-6">

                <textarea id="descriptioin" name="Comments" required rows="50" cols="50" >
                                         Please Enter Your Reviews
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