<?php 
session_start();
$bdd= new PDO('mysql:host=193.203.168.3;dbname=u677866956_prod;charset=utf8;', 'u677866956_compte_prod', '!bEn7eS76=R%');

if (isset($_POST['login'])){
    $username = $_POST['username']; 
    $password = $_POST['password'];

    // For debugging purposes, echo out the username and password
    //echo "Username: $username, Password: $password <br>";

    $recupUser = $bdd->prepare('SELECT * FROM users WHERE username=? AND pwd=?');
    $recupUser->execute(array($username,$password));

    // For debugging purposes, print out the number of rows returned by the query
    //echo "Number of rows returned: " . $recupUser->rowCount() . "<br>";

    if($recupUser->rowCount() > 0 ){
        $user = $recupUser->fetch();
        $_SESSION['username'] = $username ;
        $_SESSION['password'] = $password ;
        $_SESSION['email'] = $user['email'];
        $_SESSION['id'] = $user['id'];
        $_SESSION['xp'] = $user['xp'];
        $_SESSION['score'] = $user['score'];
        $_SESSION['argent'] = $user['argent'];

        header("location:apres_inscription.php");
    } else {
        echo 'Votre adresse mail ou mot de passe est incorrect';
    }
}
//error_reporting(E_ALL);
//ini_set('display_errors', 1);

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
		<link type="text/css" rel="stylesheet" href="assets/css/reset.css?1609499614" />
		<link type="text/css" rel="stylesheet" href="assets/css/bootstrap.min.css?1609499613" />
		<link type="text/css" rel="stylesheet" href="assets/css/style.css?1609499615" />
		<link href="assets/css/font-awesome.min.css" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,300i,400,400i,600&amp;subset=latin-ext" rel="stylesheet">
	</head>
	
	<body class="noselect">
		
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			<nav class="navbar navbar-default navbar-fixed-bottom">
			  <div class="container">

			    <div class="collapse navbar-collapse" id="menu">
			      <ul class="nav navbar-nav text-center" style="width:100%;">
				    <li style="float:none"><a href="#"><i class="fa fa-home" aria-hidden="true"></i></a></li>
					<li style="float:none"><a href="inscription.php"><i class="fa fa-id-card" aria-hidden="true"></i></a></li>
					<li style="float:none"><a href="#world"><i class="fa fa-globe" aria-hidden="true"></i></a></li>
						
			      </ul>
						
				</div><!-- /.navbar-collapse -->
			  </div><!-- /.container-fluid -->
			</nav>


				<div class="container-fluid" style="min-height:400px; padding-top:0px;">

			<div id="cann" style="position: absolute;
    top: 0!important;
    left: 0!important;
    width: 100%;
    height: 100%;
    overflow: hidden!important;
    z-index: -1!important;
    margin: 0;
    padding: 0;
    position: fixed;
    opacity: 0.3;"> <canvas id="can" class="transparent_class" ></canvas> </div>
    
<div class="container">
<div class="row">
	<div class="col-md-3"></div>
	<div class="col-md-6 text-center">
		<img src="assets/img/logo.png" class="main-logo" style="max-width:300px; width:100%; margin-top:-60px; margin-bottom:20px" />
    

        <br/>
		<form method="post" id="login" action="">
        <a class="btn btn-block btn-sm" href="inscription.php">Vous n'avez pas encore de compte?</a>
      <div class="row">
        <div class="col-sm-6">
			    <input type="text" class="form-control text-center" placeholder="username" name="username" autocapitalize="off" autocorrect="off" required maxlength="30" />
			  </div>
        <div class="col-sm-6">
          <input type="password" class="form-control text-center" placeholder="mot de passe" name="password"  required  maxlength="30" />
        </div>
      </div>
	    <button class="btn btn-block btn-default" type="submit" style="margin-top:20px" name="login" > Se Connecter</button>

		</form>
    <br/><br/>
        </div>

</div>
</div>


		</div>
		<footer>
			
					</footer>

					<script type="text/javascript" src="assets/js/jquery-3.1.0.min.js?1609499617"></script>
					<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.14.1/moment.min.js"></script>
					<script type="text/javascript" src="assets/js/bootstrap.min.js?1609499618"></script>
					<script type="text/javascript" src="assets/js/progressbar.min.js?1609499618"></script>
					<script type="text/javascript" src="assets/js/countdown.custom.js?1609499618"></script>
					<script type="text/javascript" src="assets/js/global.js?1609499618"></script>
					<script type="text/javascript" src="assets/js/hackerIntro.js?1609499617"></script>
					<script type="text/javascript"></script>
					<script>
						googleAnalytics('user_')
					</script>
				

		</script>
	</body>
</html>
