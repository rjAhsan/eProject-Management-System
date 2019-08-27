@extends('Faculty.FMain')
@section('contents')
    @include('sweet::alert')


    <section class="content" >
        <div class="box box-info" >
            <div class="box-header" style="background-color: #0fb4ff">
                <h3 class="text-center"><b>Change Password</b></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="post" action="{{url('/fpswchange')}}">
                <div class="box-body">
                    {{csrf_field()}}
                    <br>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Old Password:</label>

                        <div class="col-sm-6">
                            <input type="password" required class="form-control" id="Oldpasssword" Name="Oldpasssword" placeholder="Old Password">
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">New Password:</label>

                        <div class="col-sm-6">
                            <input type="password" required class="form-control" id="Newpasssword" Name="Newpasssword" placeholder="New Password">
                        </div>
                    </div>



                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Re-Type Password:</label>

                        <div class="col-sm-6">
                            <input type="password" required class="form-control" id="Retype" Name="Retype" placeholder=" Password">
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

@endsection