<?php
session_start();
$bdd= new PDO('mysql:host=localhost;dbname=serious_game;charset=utf8;', 'root', '');

if (isset($_POST['register'])){
    $username = $_POST['username'];
    $email = $_POST['email']; 
    $password = $_POST['password'];

    $insertUser = $bdd->prepare('INSERT INTO users(username,email,pwd)VALUES(?,?,?)');
    $insertUser->execute(array($username,$email,$password));

    $recupUser = $bdd->prepare('SELECT * FROM users WHERE  username=? AND email=? AND pwd=?');
    $recupUser->execute(array($username,$email,$password));

    if($recupUser->rowCount() > 0 ){
       $_SESSION['username'] = $username ;
       $_SESSION['email'] = $email ;
       $_SESSION['password'] = $password ;
       $_SESSION['id'] = $recupUser->fetch()['id'];
       $_SESSION['xp'] = $recupUser->fetch()['xp'];
       $_SESSION['score'] = $recupUser->fetch()['score'];
       $_SESSION['argent'] = $recupUser->fetch()['argent'];

    }

    header("location:apres_inscription.php");
}
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
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,300i,400,400i,600&amp;subset=latin-ext" rel="stylesheet">
	</head>
	


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

    <br/><br/>
        <form method="post" id="register" action="">
        <a class="btn btn-block btn-sm" href="connexion.php">J'ai déjà un compte</a>
			<div class="row">
				<input type="email" class="form-control text-center" placeholder="email" name="email" required value="" autocapitalize="off" autocorrect="off" maxlength="255"  type="email"/>
				<div class="col-xs-6">
					<input type="text" class="form-control text-center" placeholder="username" name="username" required value="" autocapitalize="off" autocorrect="off" maxlength="30" />
				</div>
				<div class="col-xs-6">
					<input type="password" class="form-control text-center" placeholder="mot de passe" name="password" required value="" maxlength="8" type="password" />
				</div>
			</div>
			
			<br/>
			<p>
			Je suis entièrement d'accord avec la <a href="#">politique de confidentialité</a> et je souhaite obtenir
			</p>
			<button class="btn btn-block btn-default" type="submit" style="margin-top:20px" name="register" value="true">obtenir la nationalité</button>
		</form>

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
