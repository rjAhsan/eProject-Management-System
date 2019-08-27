@extends('Admin.Home22')
@section('content')



    <div class="content-wrapper" >
        <div class="container">

            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>

                    <li data-target="#myCarousel" data-slide-to="3"></li>
                    <li data-target="#myCarousel" data-slide-to="4"></li>
                    <li data-target="#myCarousel" data-slide-to="5"></li>
                    <li data-target="#myCarousel" data-slide-to="6"></li>
                    <li data-target="#myCarousel" data-slide-to="7"></li>

                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="pic/pic2.jpg" alt="eproject" style="width:100%;">
                    </div>

                    <div class="item">
                        <img src="pic/pic3.jpg" alt="eproject" style="width:100%;">
                    </div>

                    <div class="item">
                        <img src="pic/pic4.jpg" alt="New eproject" style="width:100%;">
                    </div>

                    <div class="item">
                        <img src="pic/pic5.jpg" alt="New eproject" style="width:100%;">
                    </div>

                    <div class="item">
                        <img src="pic/pic6.jpg" alt="New eproject" style="width:100%;">
                    </div>

                    <div class="item">
                        <img src="pic/pic7.jpg" alt="New eproject" style="width:100%;">
                    </div>

                    <div class="item">
                        <img src="pic/pic8.jpg" alt="New eproject" style="width:100%;">
                    </div>

                    <div class="item">
                        <img src="pic/pic9.jpg" alt="New eproject" style="width:100%;">
                    </div>


                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>





@endsection