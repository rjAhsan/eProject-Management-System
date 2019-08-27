@extends('Admin.Main')
@section('contents')
    @include('sweet::alert')

    <section class="content">

        <div class="box box-info">
            <div class="box-header" style="background-color: #0fb4ff">
                <h3 class="text-center"><b>Add PostionHolder</b></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="Post"  action="{{url('/AdminHomeAddPostionHolders')}}">
                {{csrf_field()}}
                <div class="box-body">


                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Session:</label>

                        <div class="col-sm-6">
                            <select class="form-control" id="Session" name="Session">
                                <option>SP 13</option>
                                <option>FA 13</option>

                                <option>SP 14</option>
                                <option>FA 14</option>

                                <option>SP 15</option>
                                <option>FA 15</option>

                                <option>SP 16</option>
                                <option>FA 16</option>

                                <option>SP 17</option>
                                <option>FA 17</option>

                                <option>SP 18</option>
                                <option>FA 18</option>

                                <option>SP 19</option>
                                <option>FA 19</option>

                            </select>

                        </div>
                    </div>


                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Project Title:</label>

                        <div class="col-sm-6">
                            <input type="text" required class="form-control" id="Title" name="Title" placeholder="ProjectTitle">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Postion:</label>

                        <div class="col-sm-6">
                            <select class="form-control" id="Postion" name="Postion">
                                <option>1st Position</option>
                                <option>2nd Position</option>
                                <option>3rd Position</option>



                            </select>

                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Project Supervisor:</label>

                        <div class="col-sm-6">
                            <input type="email" required class="form-control" id="Supervisor" name="Supervisor" placeholder="Supervisoremail">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Student:</label>

                        <div class="col-sm-6">

                <textarea id="descriptioin" required name="Student" rows="20" cols="20" >
                    1.FIRSTLASTNAME(EMAIL)<br>
                    2.FIRSTLASTNAME(EMAIL)<br>
                    3.FIRSTLASTNAME(EMAIL)
                    </textarea>

                        </div>
                    </div>










                    <!-- /.box-body -->
                    <div class="box-footer">


                        <button type="submit" class="btn btn-info pull-right">Submit</button>
                    </div>
                    <!-- /.box-footer -->
            </form>

            <br>
            <br>



            <div class="box">
                <div class="row">


                    <div class="col-xs-12">
                        <div class="box">
                            <div class="box-header">
                                <h3 class="profile-username text-center">Postion Holders Data </h3>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <div class="table-responsive" style="overflow: auto">
                                    <table id="exa" class="table table-bordered table-hover">
                                        <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Session</th>
                                            <th>Proect Tiltle</th>
                                            <th>Postion</th>
                                            <th>Supervisor</th>
                                            <th>Students</th>
                                            <th>Action</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($student as $students)
                                            <tr>
                                                <td>{{$students->id}}</td>
                                                <td>{{$students->Session}} </td>
                                                <td>{{$students->Title}} </td>
                                                <td>{{$students->Postion}} </td>
                                                <td>{{$students->Supervisor}} </td>

                                                <td>{{$students->StudentS}} </td>

                                                <td>
                                                    <a href="{{url('/AdminHomepagenews/'.$students->id.'/delete')}}"> <button type="button" class="btn btn-danger pull-right" >Delete</button></a>


                                                </td> </tr>

                                        @endforeach





                                    </table>
                                </div>
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->


                    </div>
                    <!-- /.box-body -->
                </div>
                {{ $student->links()}}

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