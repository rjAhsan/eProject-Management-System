<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        .container{
            height:100%;
            width:100%;
        }

    </style>
</head>
<body>

<div class="container">
    <div class="box-header with-border">
    <h4>

        <nav class="navbar navbar-inverse" style="border: #0b3e6f">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">eProject System</a>
                </div>
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Home</a></li>
                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"> Rules and SOP  <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#"> Students </a></li>
                            <li><a href="#">Evaluation</a></li>
                            <li><a href="#">Supervisor</a></li>
                            <li><a href="#">Evaluation</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Page 2</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                </ul>
            </div>
        </nav>
    </h4>



        <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <img src="pic/pic1.jpg" alt="Los Angeles" style="width:100%;">
            </div>

            <div class="item">
                <img src="pic/pic2.jpg" alt="Chicago" style="width:100%;">
            </div>

            <div class="item">
                <img src="pic/pic3.jpg" alt="New york" style="width:100%;">
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
</div>
</div>
</body>
</html>
