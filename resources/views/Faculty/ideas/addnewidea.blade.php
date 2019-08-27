@extends('Faculty.FMain')
@section('contents')
    @include('sweet::alert')

    <section class="content">

        <div class="box box-info">
            <div class="box-header" style="background-color: #0fb4ff">
                <h3 class="text-center"><b>Add New Idea</b></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="Post"  action="{{url('/createsNewIdea')}}">
                {{csrf_field()}}
                <div class="box-body">
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Title :</label>

                        <div class="col-sm-6">
                            <input type="text" required class="form-control" id="Title" name="Title" placeholder=" Title">
                        </div>
                    </div>





                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Domain:</label>

                        <div class="col-sm-6">
                            <select class="form-control" id="Domain" name="Domain">
                                <option>AI</option>
                                <option>Communication Networks</option>
                                <option>Software Engineering</option>
                                <option>Vision,image&Graphics</option>
                                <option>Web Devlopment</option>
                                <option>Android</option>
                                <option>Cyber Security</option>
                            </select>

                        </div>
                    </div>



                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Project Type:</label>

                        <div class="col-sm-6">
                            <select class="form-control" id="ProjectType" name="ProjectType">
                                <option>Research </option>

                                <option>Devlopment</option>

                                <option>Research & Devlopment</option>
                            </select>

                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Description</label>

                        <div class="col-sm-6">

                <textarea id="descriptioin" required name="descriptioin" rows="20" cols="20" >
                                            This is my textarea to be replaced with CKEditor.
                    </textarea>

                        </div>
                    </div>











                    <!-- /.box-body -->
                    <div class="box-footer">


                        <button type="submit" class="btn btn-info pull-right">Add</button>
                    </div>
                </div>      <!-- /.box-footer -->
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