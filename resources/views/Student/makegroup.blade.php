@extends('Student.index')
@section('contents')


        <div   class="box-header with-border">


     <section class="content">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- general form elements -->
                        <div class="box box-primary" >
                            <div class="box-header with-border" >
                                <h3 class="text-center">Make-Group</h3>

                                <form style="margin-right: 20%" class="form-horizontal" method="Post"  action="{{url('/makegroup')}}">
                                    {{csrf_field()}}
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-2 control-label">Group ID:</label>

                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" id="fname" name="Project_id" placeholder="Id">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-2 control-label">Project Title:</label>

                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" id="lname" name="Project_title" placeholder="Title">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-2 control-label">Faculty Email:</label>

                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" id="F_id" name="Faculty_id" placeholder="F_id..">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputPassword3" class="col-sm-2 control-label">Description:</label>

                                            <div class="col-sm-6">
                                                <input type="text"  class="form-control" style="height: 80px"   name="Description" >
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputPassword3" class="col-sm-2 control-label">Comments:</label>

                                            <div class="col-sm-6">
                                                <input type="text"  class="form-control" style="height: 80px"   name="Comments" >
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="inputPassword3" class="col-sm-2 control-label"> Group Leader:</label>

                                            <div class="col-sm-6">

                                                <input type="text"  class="form-control"    name="Mem" >
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="inputPassword3" class="col-sm-2 control-label">Email:</label>

                                            <div class="col-sm-6">
                                                <input type="text"  class="form-control"    name="reg_no" >
                                            </div>
                                        </div>
                                        <div class="btn btn-primary float-right" onclick="showMember()">Add Member+</div>
                                        <div id="mem1" class="hidden">
                                            <div class="form-group">
                                                <label for="inputPassword3" class="col-sm-2 control-label">Member 1:</label>

                                                <div class="col-sm-6">
                                                    <input type="text"  class="form-control"    name="Mem1" >
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputPassword3" class="col-sm-2 control-label">Email:</label>

                                                <div class="col-sm-6">
                                                    <input type="text"  class="form-control"    name="reg_no1" >
                                                </div>
                                            </div>
                                        </div>
                                        <div id="mem2" class="hidden">
                                            <div class="form-group">
                                                <label for="inputPassword3" class="col-sm-2 control-label">Member 2:</label>

                                                <div class="col-sm-6">
                                                    <input type="text"  class="form-control"    name="Mem2" >
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputPassword3" class="col-sm-2 control-label">Email:</label>

                                                <div class="col-sm-6">
                                                    <input type="text"  class="form-control"    name="reg_no2" >
                                                </div>
                                            </div>
                                        </div>









                                        <!-- /.box-body -->
                                            <div class="box-footer">


                                                <button  type="submit" class="btn btn-info pull-right">Submit</button>
                                            </div>
                                            <!-- /.box-footer -->
                                        </div>
                                </form>
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>
                    <!--/.col (right) -->

                <!-- /.row -->


                </div>
            </section>
        </div>
            <script type="text/javascript">
                function showMember(){
                    if(document.getElementById("mem1").classList.contains("hidden")){
                        document.getElementById("mem1").classList.remove("hidden");

                    }
                    else if(document.getElementById("mem2").classList.contains("hidden")){
                        document.getElementById("mem2").classList.remove("hidden");
                    }
                    // alert("show member");


                }

            </script>
@endsection
