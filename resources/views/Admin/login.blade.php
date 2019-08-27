@extends('Admin.MasterLogin')
@section('login')

  @include('sweet::alert')



  <div class="login-box" >
    <div class="login-logo" style="color: #f6f6f6">
      <p><b>eProject Managment </b> System</p>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
      <p class="login-box-msg">Please Enter your vaild Email&Password</p>

      <form  method="post" action="{{url('/user1')}}">
        {{csrf_field()}}
        <div class="form-group has-feedback">
          <input type="Email" name="email" id="email" class="form-control" placeholder="Email">
          <span class="glyphicon glyphicon-envelope form-control-feedback"></span>


        </div>
        <div class="form-group has-feedback">
          <input type="password" name="password" id="password" class="form-control" placeholder="Password">
          <span  id="showpasss" class=" glyphicon glyphicon-eye-close form-control-feedback"></span>
          <span style="display: none" id="showpass" class=" glyphicon glyphicon-eye-open form-control-feedback"></span>

        </div>
        <div class="row">

          <!-- /.col -->
          <div class="col-xs-4">
            <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <!-- /.social-auth-links -->



    </div>
    <!-- /.login-box-body -->
  </div>


  <script type="javascript">
      var jq =  $.noConflict();
      jq(document).ready(function(){

          jq("#password").focus(function () {

         console.log(jq("#password").val());

          });





          $("#showpass").click(function(){

              var pass =$("#password").val();
              if( pass!=''){

                  $()
              console.log($("#password").val()) ;
              }



          });



      });
  </script>



@endsection
