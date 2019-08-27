<html>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
<h1 id="notification"></h1>
<script>
    window.setInterval(function(){
        $.get('notification',function(data){
            $("#notification").text(data);
        });
    }, 5000);
</script>
</body>
</html>