<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
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
    <!-- Morris chart -->
    <link rel="stylesheet" href="{{url('Admin/bower_components/morris.js/morris.css')}}">
    <!-- jvectormap -->
    <link rel="stylesheet" href="{{url('Admin/bower_components/jvectormap/jquery-jvectormap.css')}}">
    <!-- Date Picker -->
    <link rel="stylesheet" href="{{url('Admin/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{url('Admin/bower_components/bootstrap-daterangepicker/daterangepicker.css')}}">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="{{url('Admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">


    <title>ePMS | Faculty</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <style type="text/css">

        .has-error
        {
            border-color:#cc0000;
            background-color:#ffff99;
        }
    </style>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <header class="main-header">
        <!-- Logo -->
        <a href="{{url('/user-Faculty')}}" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>E</b>PM</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>eProject</b>System</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>

        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->

            <!-- search form -->

            <!-- /.search form -->
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu" data-widget="tree">
                

                <li class="">
                    <a href="{{url('/facultyUserPro')}}">
                        <i class="fa fa-user"></i>
                        <span>PROFILE</span>
                        <span class="pull-right-container">

            </span>
                    </a>

                </li>








                <li class="">
                    <a href="{{url('/facultyDedlines')}}">
                        <i class="fa fa-registered"></i>
                        <span>DEADLINES</span>
                        <span class="pull-right-container">

            </span>
                    </a>

                </li>





                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-files-o"></i>
                        <span>PROJECTS</span>
                        <span class="pull-right-container">

            </span>
                    </a>
                    <ul class="treeview-menu">

                        <li><a href="{{url('/ProjectsSupervision')}}"><i class="fa fa-circle-o"></i> Registered Projects   </a></li>


                        <li><a href="{{url('/facultyprojectRegestration')}}"><i class="fa fa-circle-o"></i>Add New Project<b>(Group)</b></a></li>

                        <li><a href="{{url('/listproject')}}"><i class="fa fa-circle-o"></i>Rejection Projects List</a></li>

a

                    </ul>
                </li>


                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-bell-o (alias)"></i>
                        <span>IDEAS FOR STUDENTS</span>
                        <span class="pull-right-container">

            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{{url('/addnewideas')}}"><i class="fa fa-circle-o"></i>Add New Idea</a></li>

                        <li><a href="{{url('/listidea')}}"><i class="fa fa-circle-o"></i> Ideas List</a></li>



                    </ul>
                </li>


                <li class="treeview">
                <li><a href="{{url('/FacultyEvaluation')}}"><i class="fa fa-circle-o"></i> PROJECTS EVALUATIONS</a></li>




                </li>






                <li class="">
                    <a href="{{url('/FFoploadProFiles')}}">
                        <i class="fa fa-user"></i>
                        <span>UPLOAD PROJECT FILES</span>
                        <span class="pull-right-container">

            </span>
                    </a>

                </li>





                <li class="">
                    <a href="{{url('/fpswChange')}}">
                        <i class="fa fa-user"></i>
                        <span>CHANGE PASSWORD</span>
                        <span class="pull-right-container">

            </span>
                    </a>

                </li>









                <li class="treeview">
                <li><a href="{{url('/flogout')}}"><i class="fa fa-circle-o"></i> LOGOUT</a></li>




                </li>


            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->

        <!-- Main content -->


        @yield('contents')




        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>Version</b> 1.1
        </div>
        <strong>Copyright &copy; 2018-2020 </strong> All rights
        reserved eproject Team  .
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Create the tabs -->
        <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
            <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
            <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
        </ul>
        <!-- Tab panes -->
        {{--<div class="tab-content">--}}
            {{--<!-- Home tab content -->--}}
            {{--<div class="tab-pane" id="control-sidebar-home-tab">--}}
                {{--<h3 class="control-sidebar-heading">Recent Activity</h3>--}}
                {{--<ul class="control-sidebar-menu">--}}
                    {{--<li>--}}
                        {{--<a href="javascript:void(0)">--}}
                            {{--<i class="menu-icon fa fa-birthday-cake bg-red"></i>--}}

                            {{--<div class="menu-info">--}}
                                {{--<h4 class="control-sidebar-subheading">Langdon's Birthday</h4>--}}

                                {{--<p>Will be 23 on April 24th</p>--}}
                            {{--</div>--}}
                        {{--</a>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<a href="javascript:void(0)">--}}
                            {{--<i class="menu-icon fa fa-user bg-yellow"></i>--}}

                            {{--<div class="menu-info">--}}
                                {{--<h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>--}}

                                {{--<p>New phone +1(800)555-1234</p>--}}
                            {{--</div>--}}
                        {{--</a>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<a href="javascript:void(0)">--}}
                            {{--<i class="menu-icon fa fa-envelope-o bg-light-blue"></i>--}}

                            {{--<div class="menu-info">--}}
                                {{--<h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>--}}

                                {{--<p>nora@example.com</p>--}}
                            {{--</div>--}}
                        {{--</a>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<a href="javascript:void(0)">--}}
                            {{--<i class="menu-icon fa fa-file-code-o bg-green"></i>--}}

                            {{--<div class="menu-info">--}}
                                {{--<h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>--}}

                                {{--<p>Execution time 5 seconds</p>--}}
                            {{--</div>--}}
                        {{--</a>--}}
                    {{--</li>--}}
                {{--</ul>--}}
                {{--<!-- /.control-sidebar-menu -->--}}

                {{--<h3 class="control-sidebar-heading">Tasks Progress</h3>--}}
                {{--<ul class="control-sidebar-menu">--}}
                    {{--<li>--}}
                        {{--<a href="javascript:void(0)">--}}
                            {{--<h4 class="control-sidebar-subheading">--}}
                                {{--Custom Template Design--}}
                                {{--<span class="label label-danger pull-right">70%</span>--}}
                            {{--</h4>--}}

                            {{--<div class="progress progress-xxs">--}}
                                {{--<div class="progress-bar progress-bar-danger" style="width: 70%"></div>--}}
                            {{--</div>--}}
                        {{--</a>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<a href="javascript:void(0)">--}}
                            {{--<h4 class="control-sidebar-subheading">--}}
                                {{--Update Resume--}}
                                {{--<span class="label label-success pull-right">95%</span>--}}
                            {{--</h4>--}}

                            {{--<div class="progress progress-xxs">--}}
                                {{--<div class="progress-bar progress-bar-success" style="width: 95%"></div>--}}
                            {{--</div>--}}
                        {{--</a>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<a href="javascript:void(0)">--}}
                            {{--<h4 class="control-sidebar-subheading">--}}
                                {{--Laravel Integration--}}
                                {{--<span class="label label-warning pull-right">50%</span>--}}
                            {{--</h4>--}}

                            {{--<div class="progress progress-xxs">--}}
                                {{--<div class="progress-bar progress-bar-warning" style="width: 50%"></div>--}}
                            {{--</div>--}}
                        {{--</a>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<a href="javascript:void(0)">--}}
                            {{--<h4 class="control-sidebar-subheading">--}}
                                {{--Back End Framework--}}
                                {{--<span class="label label-primary pull-right">68%</span>--}}
                            {{--</h4>--}}

                            {{--<div class="progress progress-xxs">--}}
                                {{--<div class="progress-bar progress-bar-primary" style="width: 68%"></div>--}}
                            {{--</div>--}}
                        {{--</a>--}}
                    {{--</li>--}}
                {{--</ul>--}}
                {{--<!-- /.control-sidebar-menu -->--}}

            {{--</div>--}}
            {{--<!-- /.tab-pane -->--}}
            {{--<!-- Stats tab content -->--}}
            {{--<div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>--}}
            {{--<!-- /.tab-pane -->--}}
            {{--<!-- Settings tab content -->--}}
            {{--<div class="tab-pane" id="control-sidebar-settings-tab">--}}
                {{--<form method="post">--}}
                    {{--<h3 class="control-sidebar-heading">General Settings</h3>--}}

                    {{--<div class="form-group">--}}
                        {{--<label class="control-sidebar-subheading">--}}
                            {{--Report panel usage--}}
                            {{--<input type="checkbox" class="pull-right" checked>--}}
                        {{--</label>--}}

                        {{--<p>--}}
                            {{--Some information about this general settings option--}}
                        {{--</p>--}}
                    {{--</div>--}}
                    {{--<!-- /.form-group -->--}}

                    {{--<div class="form-group">--}}
                        {{--<label class="control-sidebar-subheading">--}}
                            {{--Allow mail redirect--}}
                            {{--<input type="checkbox" class="pull-right" checked>--}}
                        {{--</label>--}}

                        {{--<p>--}}
                            {{--Other sets of options are available--}}
                        {{--</p>--}}
                    {{--</div>--}}
                    {{--<!-- /.form-group -->--}}

                    {{--<div class="form-group">--}}
                        {{--<label class="control-sidebar-subheading">--}}
                            {{--Expose author name in posts--}}
                            {{--<input type="checkbox" class="pull-right" checked>--}}
                        {{--</label>--}}

                        {{--<p>--}}
                            {{--Allow the user to show his name in blog posts--}}
                        {{--</p>--}}
                    {{--</div>--}}
                    {{--<!-- /.form-group -->--}}

                    {{--<h3 class="control-sidebar-heading">Chat Settings</h3>--}}

                    {{--<div class="form-group">--}}
                        {{--<label class="control-sidebar-subheading">--}}
                            {{--Show me as online--}}
                            {{--<input type="checkbox" class="pull-right" checked>--}}
                        {{--</label>--}}
                    {{--</div>--}}
                    {{--<!-- /.form-group -->--}}

                    {{--<div class="form-group">--}}
                        {{--<label class="control-sidebar-subheading">--}}
                            {{--Turn off notifications--}}
                            {{--<input type="checkbox" class="pull-right">--}}
                        {{--</label>--}}
                    {{--</div>--}}
                    {{--<!-- /.form-group -->--}}

                    {{--<div class="form-group">--}}
                        {{--<label class="control-sidebar-subheading">--}}
                            {{--Delete chat history--}}
                            {{--<a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>--}}
                        {{--</label>--}}
                    {{--</div>--}}
                    {{--<!-- /.form-group -->--}}
                {{--</form>--}}
            {{--</div>--}}
            {{--<!-- /.tab-pane -->--}}
        {{--</div>--}}
    {{----}}
    </aside>
    <!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>

</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="{{url('Admin/bower_components/jquery/dist/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{url('Admin/bower_components/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="{{url('Admin/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- Morris.js charts -->
<script src="{{url('Admin/bower_components/raphael/raphael.min.js')}}"></script>
<script src="{{url('Admin/bower_components/morris.js/morris.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{url('Admin/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js')}}"></script>
<!-- jvectormap -->
<script src="{{url('Admin/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
<script src="{{url('Admin/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{url('Admin/bower_components/jquery-knob/dist/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{url('Admin/bower_components/moment/min/moment.min.js')}}"></script>
<script src="{{url('Admin/bower_components/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
<!-- datepicker -->
<script src="{{url('Admin/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{url('Admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
<!-- Slimscroll -->
<script src="{{url('Admin/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
<!-- FastClick -->
<script src="{{url('Admin/bower_components/fastclick/lib/fastclick.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{url('Admin/dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{url('Admin/dist/js/pages/dashboard.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{url('Admin/dist/js/demo.js')}}"></script>
<script src="{{asset('vendor/unisharp/laravel-ckeditor/ckeditor.js')}}"></script>
<script src="{{asset('vendor/unisharp/laravel-ckeditor/ckeditor.js')}}"></script>
<script src="{{asset('vendor/unisharp/laravel-ckeditor/adapters/jquery.js')}}"></script>


<script type="text/javascript">
    $(function () {
        //Initialize Select2 Elements
        $('.select2').select2()

        //Datemask dd/mm/yyyy
        $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
        //Datemask2 mm/dd/yyyy
        $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
        //Money Euro
        $('[data-mask]').inputmask()

        //Date range picker
        $('#reservation').daterangepicker()
        //Date range picker with time picker
        $('#reservationtime').daterangepicker({ timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A' })
        //Date range as a button
        $('#daterange-btn').daterangepicker(
            {
                ranges   : {
                    'Today'       : [moment(), moment()],
                    'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
                    'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                    'This Month'  : [moment().startOf('month'), moment().endOf('month')],
                    'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                },
                startDate: moment().subtract(29, 'days'),
                endDate  : moment()
            },
            function (start, end) {
                $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
            }
        )

        //Date picker
        $('#datepicker').datepicker({
            autoclose: true
        })

        //iCheck for checkbox and radio inputs
        $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
            checkboxClass: 'icheckbox_minimal-blue',
            radioClass   : 'iradio_minimal-blue'
        })
        //Red color scheme for iCheck
        $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
            checkboxClass: 'icheckbox_minimal-red',
            radioClass   : 'iradio_minimal-red'
        })
        //Flat red color scheme for iCheck
        $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
            checkboxClass: 'icheckbox_flat-green',
            radioClass   : 'iradio_flat-green'
        })

        //Colorpicker
        $('.my-colorpicker1').colorpicker()
        //color picker with addon
        $('.my-colorpicker2').colorpicker()

        //Timepicker
        $('.timepicker').timepicker({
            showInputs: false
        })
    })
</script>

</body>
</html>
