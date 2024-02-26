<?php
session_start();
if(!$_SESSION['id']){
    header("location:deconnexion.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz sur les Protocoles</title>
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">
    <link type="text/css" rel="stylesheet" href="assets/css/reset.css?1609499614"/>
    <link type="text/css" rel="stylesheet" href="assets/css/bootstrap.min.css?1609499613"/>
    <link type="text/css" rel="stylesheet" href="assets/css/style.css?1609499615"/>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,300i,400,400i,600&amp;subset=latin-ext"
          rel="stylesheet">
    <style>
        /* Custom styles */
        .row {
            text-align: center;
            margin-top: 50px;
        }
        .col-sm-6 {
            margin-bottom: 20px;
            position: relative;
            overflow: hidden;
        }
        .col-sm-6 img {
            transition: transform 0.5s ease;
            max-height: 200px; /* Adjust this value as needed */
        }
        .col-sm-6:hover img {
            transform: scale(1.1);
        }
        .nav-links {
            margin-top: 20px;
            text-align: center;
        }
        .nav-links li {
            display: inline-block;
            margin-right: 10px;
        }
        .nav-links li a {
            color: #333;
            text-decoration: none;
            font-weight: bold;
        }
    </style>
</head>
<body class="noselect">
<div class="toolbar-top-right">
    <i class="fa fa-cube"></i> 101
</div>
<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu" aria-expanded="false">
    <span class="sr-only">Toggle navigation</span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
</button>
<nav class="navbar navbar-default navbar-fixed-bottom">
    <div class="container">
        <div class="collapse navbar-collapse" id="menu">
            <ul class="nav navbar-nav text-center" >
                <li><a href="section.php"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                <li><a href="rankings.php"><i class="fa fa-trophy" aria-hidden="true"></i></a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right text-center">
                <li><a href="forgot-password.php"><i class="fa fa-cog" aria-hidden="true"></i></a></li>
                <li><a href="deconnexion.php"><i class="fa fa-sign-out" aria-hidden="true"></i></a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
<div class="container text-center">
    <h1 >Sélectionnez un quiz sur les protocoles</h1>
    <div class="row">
        <div class="col-sm-6">
            <a href="arp.php">
                <button class="btn btn-block btn-default" style="margin-top:20px">ARP (Address Resolution Protocol)</button>
                <img src="assets/img/protocoles/ARP.png" alt="ARP (Address Resolution Protocol)">   
            </a>
        </div>
        <div class="col-sm-6">
            <a href="dhcp.php">
                <button class="btn btn-block btn-default" style="margin-top:20px">DHCP (Dynamic Host Configuration Protocol)</button>
                <img src="assets/img/protocoles/DHCP.png" alt="DHCP (Dynamic Host Configuration Protocol)">
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <a href="dns.php">
                <button class="btn btn-block btn-default" style="margin-top:20px">DNS (Domain Name System)</button>
                <img src="assets/img/protocoles/DNS.png" alt="DNS (Domain Name System)">
            </a>
        </div>
        <div class="col-sm-6">
            <a href="http.php">
                <button class="btn btn-block btn-default" style="margin-top:20px">HTTP (HyperText Transfer Protocol)</button>
                <img src="assets/img/protocoles/HTTP.png" alt="HTTP (HyperText Transfer Protocol)">
            </a>
        </div>
    </div>
</div>
<footer>
</footer>
<!-- Include local scripts -->
<script type="text/javascript" src="assets/js//jquery-3.1.0.min.js"></script>
<script type="text/javascript" src="assets/js//moment.min.js"></script>
<script type="text/javascript" src="assets/js//bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js//progressbar.min.js"></script>
<script type="text/javascript" src="assets/js//countdown.custom.js"></script>
<script type="text/javascript" src="assets/js/global.js"></script>
<!-- Include your local scripts here -->
<script type="text/javascript"></script>
<script>
    googleAnalytics('user_624');
</script>
</body>
</html>

