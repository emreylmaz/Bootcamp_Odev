<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <title>Dashio - Bootstrap Admin Template</title>

    <!-- Favicons -->
    <link href="img/favicon.png" rel="icon">
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Bootstrap core CSS -->
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!--external css-->
    <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet"/>
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet">
</head>
<body>
<div id="login-page">
    <div class="container">
        <form class="form-login" action="/create" method="post">
            <h2 class="form-login-heading">Register</h2>
            <div class="login-wrap">
                <input type="text" class="form-control" placeholder="Name" autofocus name="name">
                <br>
                <input type="text" class="form-control" placeholder="Username" autofocus name="username">
                <br>
                <input type="email" class="form-control" placeholder="E-Mail" autofocus name="email">
                <br>
                <input type="password" class="form-control" placeholder="Password" name="password">
                </label>
                <center><br>
                    @csrf
                    <button type="submit" class="btn btn-info">Create</button>
                    <br>
                    <hr> </center>
                    <a class="" href="#">Sign in</a>

            </div>
        </form>
    </div>
</div>
<script src="lib/jquery/jquery.min.js"></script>
<script src="lib/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="lib/jquery.backstretch.min.js"></script>

</body>

</html>

