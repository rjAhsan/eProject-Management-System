@extends('Faculty.FMain')
@section('contents')
    @include('sweet::alert')



    <section class="content">
        <div class="box box-info">

            <div class="box-header with-border" style="background-color: #1498ff">
                <h3 class="text-center" ><b>Projects Details</b></h3>
            </div>
        </div>
        <!-- /.box-header -->
        <!-- form start -->

        <div class="box">
            <div class="row">
                {{--@foreach($Project as $projects)--}}

                    <div class="col-md-12">
                        <div class="nav-tabs-custom">
                            <ul class="nav nav-pills nav-justified">
                                <li class="active"><a href="#Pr" data-toggle="tab"></a></li>
                                <li><a href="#Proposal" data-toggle="tab"><b>ProposalFeedBack<span class="glyphicon glyphicon-file"></span></b></a></li>
                                <li><a href="#Internals" data-toggle="tab">Internals</a></li>
                                <li><a href="#Eternals" data-toggle="tab">Eternals</a></li>
                                </ul>
                            <div class="tab-content">

                                <!-- /.tab-pane -->


                                <div class="tab-pane" id="Proposal">

                                    <div class="table-responsive" style="overflow: auto">


                                        <table id="exa" class="table table-bordered table-hover">
                                            <thead>
                                            <tr>
                                                <th><b>ProjectTitle</b></th>
                                                <th><b>FileType</b></th>
                                                <th>Description</th>
                                                <th>Downloads</th>

                                            </tr>
                                            </thead>
                                            <tbody>

                                            <tr>
                                                @foreach($Proposal as $Proposals)
                                                <td>{{$Proposals->projecttitle}}</td>
                                                <td>{{$Proposals->Filetype}} </td>
                                                <td>{!!$Proposals->descriptioin!!}</td>
                                                <td>
                                      @if(($Proposals->Comments)===null)

   <a href="{{url('/Downloadfile/'.$Proposals->Status.'/Evaluationdownload')}}"><button type="button" class="btn btn-info pull-right"> Download </button></a>
  <a href="{{url('/ProposalReview/'.$Proposals->projecttitle.'/AddProposalReviw')}}"><button type="button" class="btn btn-primary pull-right"> ADD REVIEWS </button></a>

                @else
                 <p class="text-green"><b>Submitted </b></p>
                @endif
                                                </td>

                                            </tr>
                                            <br>
                                            <br>
                                            <br>

                                            @endforeach


                                            {{--@endforeach--}}





                                        </table>





                                    </div>






                                </div>


                                <div class="tab-pane" id="Internals">

                                    <div class="table-responsive" style="overflow: auto">


                                        <table id="exa" class="table table-bordered table-hover">
                                            <thead>
                                            <tr>
                                                <th><b>ProjectTitle</b></th>
                                                <th><b>Session</b></th>
                                                <th><b>Evaluation</b></th>
                                                <th>Action</th>

                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($Internal as $Proposals)
                                            <tr>

                                                    <td>{{$Proposals->Project_Title}}</td>
                                                    <td>{{$Proposals->Session}} </td>
                                                    <td>
                                                    @if(($Proposals->Grades)=='')
                                                            <p class="text-red"><strong>Please Evaluate</p>
                                                        @else
                                                            <p class="text-green"><strong>Submitted</p>
                                                    @endif
                                                    </td>
                                                    <td>
                                                @if(($Proposals->Grades)=='')

                                                            <a href="{{url('/internalsgrade/'.$Proposals->Project_Title.'/Addinternalsrafde')}}"><button type="button" class="btn btn-primary pull-right"> ADD REVIEWS </button></a>

                                                    @else
                                                            <p class="text-green"><strong>Evaluated</strong></p>
                                                    @endif
                                                    </td>

                                            </tr>
                                                @endforeach


</tbody>

                                            {{--@endforeach--}}





                                        </table>





                                    </div>






                                </div>

                                <div class="tab-pane" id="Eternals">

                                    <div class="table-responsive" style="overflow: auto">


                                        <table id="exa" class="table table-bordered table-hover">
                                            <thead>
                                            <tr>
                                                <th><b>ProjectTitle</b></th>
                                                <th><b>Session</b></th>
                                                <th><b>Evaluation</b></th>
                                                <th>Action</th>

                                            </tr>
                                            </thead>
                                            <tbody>

                                            <tr>
                                                @foreach($External as $Proposals)
                                                    <td>{{$Proposals->Project_Title}}</td>
                                                    <td>{{$Proposals->Session}} </td>
                                                    <td>
                                                        @if(($Proposals->INTERNAL_Grades)=='')
                                                            <p class="text-red"><strong>Please Evaluate</p>
                                                        @else
                                                            <p class="text-green"><strong>Submitted</p>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if(($Proposals->INTERNAL_Grades)=='')

                                                            <a href="{{url('/AddExternalgrades/'.$Proposals->Project_Title.'/Addexternalsgrafde')}}"><button type="button" class="btn btn-primary pull-right"> ADD REVIEWS </button></a>

                                                        @else
                                                            <p class="text-green"><strong>Evaluated</strong></p>
                                                        @endif
                                                    </td>


                                                @endforeach
                                            </tr>

                                            {{--@endforeach--}}





                                        </table>





                                    </div>






                                </div>


                                <!-- /.tab-pane -->
                            </div>
                            <!-- /.tab-content -->
                        </div>
                        <!-- /.nav-tabs-custom -->
                    </div>


                {{--@endforeach--}}
            </div>
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