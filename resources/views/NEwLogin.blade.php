<html>


<head>
    <title>

    </title>
</head>
<body>


<form class="form-horizontal" method="POST" action="{{url('/NEwuser')}}">
    {{csrf_field()}}
    <div class="form-group">
        <label for="email">Email address:</label>
        <input type="email" class="form-control" name="email" id="email">
    </div>
    <div class="form-group">
        <label for="pwd">Password:</label>
        <input type="password" class="form-control" name="pwd" id="pwd">
    </div>
    <button type="submit" >Submit</button>
</form>
</body>
</html>