<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>ePMS</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{url('Admin/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{url('Admin/bower_components/font-awesome/css/font-awesome.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{url('Admin/bower_components/Ionicons/css/ionicons.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{url('Admin/dist/css/AdminLTE.min.css')}}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{url('Admin/dist/css/skins/_all-skins.min.css')}}">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

  <style>
    .container{
      height:100%;
      width:100%;
    }

  </style>
</head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper" >

  <header class="main-header">
    <nav class="navbar navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <a href="#" class="navbar-brand"><b>eProject</b>System</a>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <i class="fa fa-bars"></i>
          </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="{{url('/home')}}">Home<span class="sr-only">(current)</span></a></li>
            <li><a href="{{url('/Links')}}">Important Links</a></li>

            <li><a href="{{url('/News')}}">News</a></li>
            <li><a href="{{url('/PostionHolders')}}">Position Holders</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Rules and SOP<span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">

                <li class="divider"></li>
                <li><a href="{{url('/StudentRules')}}">Student</a></li>
                <li class="divider"></li>
                <li><a href="{{url('/EvaRules')}}"> Evaluator</a></li>
                <li class="divider"></li>
                <li><a href="{{url('/SupervisorRules')}}">Supervisor</a></li>
              </ul>
            </li>
          </ul>

        </div>

         {{--<button type="submit" class="btn btn-info pull-right"> Login  </button>--}}

        <div class="navbar-custom-menu">


          <div class="nav navbar-nav">
            <li class="dropdown user user-menu">
              <!-- Menu Toggle Button -->
              <a href="{{url('/login')}}" >
                <!-- The user image in the navbar-->

                <!-- hidden-xs hides the username on small devices so only the image appears. -->

               <button type="button" class="btn btn-info pull-right" >  Login </button>



              </a>

            </li>
          </div>
        </div>



      <!-- /.container-fluid -->
    </nav>
  </header>
  <!-- Full Width Column -->

@yield('content')



  </div>


  <!-- /.content-wrapper -->
  <footer class="main-footer" style="background: #442d0e">
    <div class="container" >

      <div class="row">

        <div class="col-md-12" style="color:#f6f6f6;">

          <div class="col-sm-4">
            <h4>About Us</h4>
            <p class="text-justify">COMSATS University Islamabad,
              Lahore Campus was established in January 2002.
              It is located at Defence Road off Raiwind Road Lahore.
              The campus is at 25 minutes drive from the main city.
              This sprawling campus is purpose built and spreads over 185 acres with a 400,000
              sq. ft covered area.</p>
            <h6>Campuses</h6>
            <ol>
              <li><a href="#">Lahore </a> </li>
              <li><a href="#">Islamabad </a> </li>
              <li><a href="#">Attock </a> </li>
              <li><a href="#">Sahiwal </a> </li>
              <li><a href="#">Abbottabad</a> </li>
            </ol>
          </div>

          <div class="col-sm-4">
            <h4>Reach Us at</h4>
            <p>1.5 KM Defence Road,
              Off Raiwind Road,
              Lahore Pakistan</p>
            <h4>Contact Us</h4>
            <p class="text-justify">
              E-Mail: pro@cuilahore.edu.pk
             <br> Tel: +92 (42) 111-001-007 ,
             <br> FAX: +92 (42) 99203100
            </p>
            <h4>Follow Us</h4>

            <a href="{{url('/login')}}" ><button type="button" class="btn btn-facebook fa fa-facebook-official" >Facbook.</button>
            </a>
            <a href="{{url('/login')}}" ><button type="button" class="btn btn-twitter  fa fa-twitter" >  twitter </button>
            </a>

          </div>
          <div class="col-sm-4">SET THREE</div>
        </div>

      </div>


    </div>

      <!-- /.container -->
  </footer>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="{{url('Admin/bower_components/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{url('Admin/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- SlimScroll -->
<script src="{{url('Admin/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
<!-- FastClick -->
<script src="{{url('Admin/bower_components/fastclick/lib/fastclick.js')}}"></script>
<!-- AdminLTE App -->

<script src={{url('Admin/dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{url('Admin/dist/js/demo.js')}}"></script>
</body>
</html>
