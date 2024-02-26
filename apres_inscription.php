<?php

session_start();
if(!$_SESSION['id']){
    header("location:deconnexion.php");
}
;
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <title>Secret Republic of Hackers</title>
        <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">
        <link rel="manifest" href="js13kpwa.webmanifest">
        <link type="text/css" rel="stylesheet" href="assets/css/reset.css?1609499614"/>
        <link type="text/css" rel="stylesheet" href="assets/css/bootstrap.min.css?1609499613"/>
        <link type="text/css" rel="stylesheet" href="assets/css/style.css?1609499615"/>
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,300i,400,400i,600&amp;subset=latin-ext"
              rel="stylesheet">
    </head>
	<body class="noselect">
		
		<h2 class="level">
			L1		</h2>

	 <div class="toolbar-top-right">
			<i class="fa fa-cube"></i> 101		</div>
	
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
                    <!--
					<li><a href="#dashboard"><i class="fa fa-tachometer" aria-hidden="true"></i></a></li>
					<li><a href="#quests"><i class="fa fa-crosshairs" aria-hidden="true"></i></a></li>
			        <li><a href="#skills"><i class="fa fa-diamond" aria-hidden="true"></i></a></li>
			        <li><a href="#knowledge"><i class="fa fa-book" aria-hidden="true"></i></a></li>
					<li><a href="#train"><i class="fa fa-calculator" aria-hidden="true"></i></a></li>
					-->
                    <li><a href="section.php"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                    <li><a href="rankings.php"><i class="fa fa-trophy" aria-hidden="true"></i></a></li>
			      </ul>
						
			      <ul class="nav navbar-nav navbar-right text-center">
                        <!--
						<li ><a href="#conversations"><i class="fa fa-envelope-o" aria-hidden="true"></i></a></li>
			        	<li ><a href="#rewards"><i class="fa fa-gift" aria-hidden="true"></i></a></li>
			      		<li><a href="rankings.php"><i class="fa fa-trophy" aria-hidden="true"></i></a></li>
                    -->
						<li><a href="forgot-password.php"><i class="fa fa-cog" aria-hidden="true"></i></a></li>
                        <li><a href="deconnexion.php"><i class="fa fa-sign-out" aria-hidden="true"></i></a></li>
			      </ul>
					
				</div><!-- /.navbar-collapse -->
			  </div><!-- /.container-fluid -->
			</nav>


				<div class="container-fluid" style="min-height:400px; padding-top:0px;">

							<div class="container">
									</div>
			
                                    <div class="container text-center">
  <div class="row">
    <div class="col-sm-4">
      <img src="assets/img/iris.png" style="max-height:400px;" >
    </div><div class="col-sm-8"><br/><br/>
  <p>L'intégralité de cette histoire n'est pas à raconter autour d'un dîner tranquille et d'un verre de vin.

Une histoire sur un individu qui a saisi l'ensemble de l'humanité de ses propres mains et qui l'a manipulée comme de la pâte à modeler, pliant la civilisation à sa volonté.

Un génie ? Peut-être. Un fou ? Certainement. Un être humain ? C'est à vous de décider, vraiment.</p>
<br/><br/>
<p>Les hackers d'aujourd'hui sont les seuls capables d'exprimer des opinions, le hacktivisme étant leur seule arme.

Emilia et le Cardinal sont des entités d'intelligence artificielle qui détiennent le pouvoir sur l'ensemble du Réseau et les actifs d'AlphaCo.

Une compétition a commencé. Un combat pour le poste de président d'Alpha, mis en jeu par la société elle-même.
</p>
</div></div>
<br/><br/><br/>
  <h3>Je me sens pour ainsi dire invincible et je crains que ce ne soit l'illusion qui provoque ma chute..</h3>

 <h1>..J'ai vendu mon âme au hacking...</h1><br/><br/>
  <a class="btn btn-block" href="section.php">COMMENCER</a>
</div>

		</div>
		<footer>
			
					</footer>
    <!-- Include local scripts -->
    <script type="text/javascript" src="assets/js//jquery-3.1.0.min.js"></script>
    <script type="text/javascript" src="assets/js//moment.min.js"></script>
    <!-- <script type="text/javascript" src="path/to/your/local/folder/Chart.min.js"></script> -->
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
