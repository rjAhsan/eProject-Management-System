@extends('Admin.Main')
@section('contents')


    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="text-center"><b>Upload Project</b></h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form class="form-horizontal">
            <div class="box-body">
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Group_Id:</label>

                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="inputEmail3" placeholder="Group_Id">
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Project-Id:</label>

                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="inputEmail3" placeholder="Project-Id">
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Title:</label>

                    <div class="col-sm-6">
                        <input type="email" class="form-control" id="inputEmail3" placeholder="ID:">
                    </div>
                </div>






                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Description:</label>

                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="inputEmail3" placeholder="Description">
                    </div>
                </div>


            </div>
            <!-- /.box-body -->
            <div class="box-footer">


                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Chosse Doucumentation:</label>

                    <div class="col-sm-6">
                        <input type="file" id="file" class="custom-file-input">
                        <span class="custom-file-control"></span>
                    </div>
                </div>


                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Chosse CodeZipFile:</label>

                    <div class="col-sm-6">
                        <input type="file" id="file" class="custom-file-input">
                        <span class="custom-file-control"></span>
                    </div>
                </div>






                <button type="submit" class="btn btn-info pull-right">Submit</button>
            </div>
            <!-- /.box-footer -->
        </form>
    </div>




@endsection