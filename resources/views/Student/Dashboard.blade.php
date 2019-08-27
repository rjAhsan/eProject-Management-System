@extends('Student.index')
@section('contents')

    <section class="content-header">

        <!-- Main content -->

        <section class="content">

            <div class="box box-info">

                <div class="box-header with-border" style="background-color: #1498ff">
                    <h3 class="text-center" ><b>student-DashBoard</b></h3>
                </div>
            </div>
            <!-- Small boxes (Stat box) -->




            @if($Status=="Proposal")
            <div class="row">






                <div class="col-lg-6 col-xs-8">
                    <!-- small box -->
                    <div class="small-box bg-aqua">
                        <div class="inner">

                            <h3>
                                Yes
                            </h3>

                            <p>Proposal</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-file"></i>
                        </div>

                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-6 col-xs-8">
                    <!-- small box -->
                    <div class="small-box bg-green">
                        <div class="inner">
                            <h3>NO</h3>

                            <p>Report-1</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>

                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-6 col-xs-8">
                    <!-- small box -->
                    <div class="small-box bg-yellow">
                        <div class="inner">
                            <h3>NO</h3>

                            <p>Report-2</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>

                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-6 col-xs-8">
                    <!-- small box -->
                    <div class="small-box bg-red">
                        <div class="inner">
                            <h3>NO</h3>

                            <p>CODE</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-mortar-board (alias)"></i>
                        </div>

                    </div>
                </div>
                <!-- ./col -->

            </div>



            @elseif($Status=="Proposal(Revised)")
                <div class="row">






                    <div class="col-lg-6 col-xs-8">
                        <!-- small box -->
                        <div class="small-box bg-aqua">
                            <div class="inner">

                                <h3>
                                    Yes
                                </h3>

                                <p>Proposal</p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-file"></i>
                            </div>

                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-6 col-xs-8">
                        <!-- small box -->
                        <div class="small-box bg-green">
                            <div class="inner">
                                <h3>NO</h3>

                                <p>Report-1</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-stats-bars"></i>
                            </div>

                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-6 col-xs-8">
                        <!-- small box -->
                        <div class="small-box bg-yellow">
                            <div class="inner">
                                <h3>NO</h3>

                                <p>Report-2</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-person-add"></i>
                            </div>

                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-6 col-xs-8">
                        <!-- small box -->
                        <div class="small-box bg-red">
                            <div class="inner">
                                <h3>NO</h3>

                                <p>CODE</p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-mortar-board (alias)"></i>
                            </div>

                        </div>
                    </div>
                    <!-- ./col -->

                </div>
  @elseif($Status=="Report-1")
            <div class="row">






                <div class="col-lg-6 col-xs-8">
                    <!-- small box -->
                    <div class="small-box bg-aqua">
                        <div class="inner">

                            <h3>
YES
                            </h3>

                            <p>Proposal</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-file"></i>
                        </div>

                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-6 col-xs-8">
                    <!-- small box -->
                    <div class="small-box bg-green">
                        <div class="inner">
                            <h3>YES</h3>

                            <p>Report-1</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>

                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-6 col-xs-8">
                    <!-- small box -->
                    <div class="small-box bg-yellow">
                        <div class="inner">
                            <h3>NO</h3>

                            <p>Report-2</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>

                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-6 col-xs-8">
                    <!-- small box -->
                    <div class="small-box bg-red">
                        <div class="inner">
                            <h3>NO</h3>

                            <p>CODE</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-mortar-board (alias)"></i>
                        </div>

                    </div>
                </div>
                <!-- ./col -->

            </div>



@elseif($Status=="Report-2")


            <div class="row">






                <div class="col-lg-6 col-xs-8">
                    <!-- small box -->
                    <div class="small-box bg-aqua">
                        <div class="inner">

                            <h3>
YES
                            </h3>

                            <p>Proposal</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-file"></i>
                        </div>

                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-6 col-xs-8">
                    <!-- small box -->
                    <div class="small-box bg-green">
                        <div class="inner">
                            <h3>YES</h3>

                            <p>Report-1</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>

                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-6 col-xs-8">
                    <!-- small box -->
                    <div class="small-box bg-yellow">
                        <div class="inner">
                            <h3>YES</h3>

                            <p>Report-2</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>

                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-6 col-xs-8">
                    <!-- small box -->
                    <div class="small-box bg-red">
                        <div class="inner">
                            <h3>NO</h3>

                            <p>CODE</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-mortar-board (alias)"></i>
                        </div>

                    </div>
                </div>
                <!-- ./col -->

            </div>

            @elseif($Status=="Externals")
            <div class="row">






                <div class="col-lg-6 col-xs-8">
                    <!-- small box -->
                    <div class="small-box bg-aqua">
                        <div class="inner">

                            <h3>
YES
                            </h3>

                            <p>Proposal</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-file"></i>
                        </div>

                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-6 col-xs-8">
                    <!-- small box -->
                    <div class="small-box bg-green">
                        <div class="inner">
                            <h3>
                                YES
                            </h3>

                            <p>Report-1</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>

                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-6 col-xs-8">
                    <!-- small box -->
                    <div class="small-box bg-yellow">
                        <div class="inner">
                            <h3>

                                YES
                            </h3>

                            <p>Report-2</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>

                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-6 col-xs-8">
                    <!-- small box -->
                    <div class="small-box bg-red">
                        <div class="inner">
                            <h3>YES</h3>

                            <p>CODE</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-mortar-board (alias)"></i>
                        </div>

                    </div>
                </div>
                <!-- ./col -->

            </div>

            @elseif($Status=="Internals")
                <div class="row">






                    <div class="col-lg-6 col-xs-8">
                        <!-- small box -->
                        <div class="small-box bg-aqua">
                            <div class="inner">

                                <h3>
                                    YES
                                </h3>

                                <p>Proposal</p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-file"></i>
                            </div>

                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-6 col-xs-8">
                        <!-- small box -->
                        <div class="small-box bg-green">
                            <div class="inner">
                                <h3>YES</h3>

                                <p>Report-1</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-stats-bars"></i>
                            </div>

                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-6 col-xs-8">
                        <!-- small box -->
                        <div class="small-box bg-yellow">
                            <div class="inner">
                                <h3>NO</h3>

                                <p>Report-2</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-person-add"></i>
                            </div>

                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-6 col-xs-8">
                        <!-- small box -->
                        <div class="small-box bg-red">
                            <div class="inner">
                                <h3>NO</h3>

                                <p>CODE</p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-mortar-board (alias)"></i>
                            </div>

                        </div>
                    </div>
                    <!-- ./col -->

                </div>

            @elseif($Status=="Completed")
                <div class="row">






                    <div class="col-lg-6 col-xs-8">
                        <!-- small box -->
                        <div class="small-box bg-aqua">
                            <div class="inner">

                                <h3>
                                    YES
                                </h3>

                                <p>Proposal</p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-file"></i>
                            </div>

                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-6 col-xs-8">
                        <!-- small box -->
                        <div class="small-box bg-green">
                            <div class="inner">
                                <h3>
                                    YES
                                </h3>

                                <p>Report-1</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-stats-bars"></i>
                            </div>

                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-6 col-xs-8">
                        <!-- small box -->
                        <div class="small-box bg-yellow">
                            <div class="inner">
                                <h3>

                                    YES
                                </h3>

                                <p>Report-2</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-person-add"></i>
                            </div>

                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-6 col-xs-8">
                        <!-- small box -->
                        <div class="small-box bg-red">
                            <div class="inner">
                                <h3>YES</h3>

                                <p>CODE</p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-mortar-board (alias)"></i>
                            </div>

                        </div>
                    </div>
                    <!-- ./col -->

                </div>

                @else
                <h1>PLEASE CONTACT WITH YOUR ADMINNISTRATION</h1>

        @endif







            <!-- Calendar -->

        </section>


    </section>



@endsection