@extends('Admin.Main')
@section('contents')
    @include('sweet::alert')



    <section class="content">

        <div class="box box-info">
            <div class="box-header with-border" style="background-color: #0fb4ff">
                <h3 class="text-center">Project Registration</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
                @foreach($student as $students)

                <form class="form-horizontal" method="Post"  action="{{url('/AddtoRegistedproject')}}">
                {{csrf_field()}}
                <div class="box-body">
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Title :</label>

                        <div class="col-sm-6">
                            <input type="text" readonly class="form-control" value="{{$students->Title}}" name="Title" >
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Session:</label>

                        <div class="col-sm-6">
                            <select class="form-control" value="session" name="session">
                                <option>FA14 </option>
                                <option>FA15 </option>
                                <option>FA16 </option>
                                <option>FA17 </option>
                                <option>FA18 </option>
                                <option>FA19 </option>
                                <option>FA20 </option>
                                <option>SP14 </option>
                                <option>SP15 </option>
                                <option>SP16</option>
                                <option>SP17</option>
                                <option>SP18</option>
                                <option>SP19</option>
                                <option>SP20 </option>


                            </select>

                        </div>
                    </div>




                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Domain:</label>

                        <div class="col-sm-6">
                            <input readonly class="form-control" value="{{$students->Domain}}" name="Domain">

                            </input>

                        </div>
                    </div>



                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Project Type:</label>

                        <div class="col-sm-6">
                            <input readonly class="form-control" value="{{$students->Project_Type}}" name="ProjectType">

                            </input>

                        </div>
                    </div>


                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label">Supervisor_email:</label>

                        <div class="col-sm-6">
                            <input readonly type="email"  class="form-control"  value="{{$students->Supervisor_email}}"  name="Supervisor_email" >
                        </div>
                    </div>




                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label">GroupLeader Email:</label>

                        <div class="col-sm-6">
                            <input readonly type="email"  class="form-control"  value="{{$students->member_email_1}}"  name="reg_no" >
                        </div>
                    </div>


                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label"> 2nd_Member Email:</label>

                            <div class="col-sm-6">
                                <input readonly type="email"  class="form-control"  value="{{$students->member_email_2}}"  name="reg_no1" >
                            </div>
                        </div>



                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">3rd_Member Email:</label>

                            <div class="col-sm-6">
                                <input type="email" readonly  class="form-control"   value="{{$students->member_email_3}}"  name="reg_no2" >
                            </div>
                        </div>



                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Project Status:</label>

                        <div class="col-sm-6">
                            <select class="form-control" value="status" name="status">
                                <option> Proposal </option>

                                <option>Revised Project </option>


                            </select>

                        </div>
                    </div>









                    <!-- /.box-body -->
                    <div class="box-footer">


                        <button type="submit" class="btn btn-info pull-right">Add</button>
                    </div>
                    <!-- /.box-footer -->
            </form>
        @endforeach
        </div>
        {{--<script>--}}
            {{--$(function () {--}}
                {{--// Replace the <textarea id="editor1"> with a CKEditor--}}
                {{--// instance, using default configuration.--}}
                {{--CKEDITOR.replace('descriptioin')--}}
                {{--//bootstrap WYSIHTML5 - text editor--}}

            {{--})--}}
        {{--</script>--}}

        {{--<script type="text/javascript">--}}
            {{--function showMember(){--}}
                {{--if(document.getElementById("mem1").classList.contains("hidden")){--}}
                    {{--document.getElementById("mem1").classList.remove("hidden");--}}

                {{--}--}}
                {{--else if(document.getElementById("mem2").classList.contains("hidden")){--}}
                    {{--document.getElementById("mem2").classList.remove("hidden");--}}
                {{--}--}}
                {{--// alert("show member");--}}


            {{--}--}}

        {{--</script>--}}



    </section>









@endsection