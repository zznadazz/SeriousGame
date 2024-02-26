<?php
session_start();

// Check if the user is not logged in by verifying if the session ID is not set
if(!isset($_SESSION['id'])){
    // Redirect to the login page
    header("location:deconnexion.php");
}

$bdd = new PDO('mysql:host=193.203.168.3;dbname=u677866956_prod;charset=utf8;', 'u677866956_compte_prod', '!bEn7eS76=R%');

if (isset($_POST['reset'])) {
    $currentPassword = $_POST['password'];
    $newPassword = $_POST['new_password'];
    $newPasswordConfirm = $_POST['new_password_confirm'];

    if (empty($currentPassword) || empty($newPassword) || empty($newPasswordConfirm)) {
        echo 'Please fill in all fields.';
    } else if ($newPassword !== $newPasswordConfirm) {
        echo 'New passwords do not match.';
    } else {
        $username = $_SESSION['username']; // Ensure the session has the username set from login
        $recupUser = $bdd->prepare('SELECT * FROM users WHERE username = ?');
        $recupUser->execute([$username]);
        $user = $recupUser->fetch();

        if ($user && $currentPassword === $user['pwd']) {
            // Current password is correct, proceed with updating the password
            $updatePassword = $bdd->prepare('UPDATE users SET pwd = ? WHERE username = ?');
            $updateSuccess = $updatePassword->execute([$newPassword, $username]);

            if ($updateSuccess) {
                echo 'Password successfully updated.';
            } else {
                echo 'Failed to update password.';
            }
        } else {
            echo 'Current password is incorrect.';
        }
    }
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
<body class="noselect">

<h2 class="level">
    L1
</h2>

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

<div class="container-fluid" style="min-height:400px; padding-top:0px;">
    <div class="container">
    </div>

    <div class="container text-center">
        <br/><br/>

        <div >
            <h1>Changer de mot de passe</h1><br/>
            <form method="post" id="reset">
                <input type="password" class="form-control text-center" placeholder="mot de passe actuel" name="password"  required  maxlength="30" />
                <div class="row">
                    <div class="col-xs-6">
                        <input type="password" class="form-control text-center" placeholder="nouveau mot de passe" name="new_password"  required  maxlength="30" />
                    </div>
                    <div class="col-xs-6">
                        <input type="password" class="form-control text-center" placeholder="confirmation du mot de passe" name="new_password_confirm"  required  maxlength="30" />
                    </div>
                </div>
                <button type="submit" class="btn btn-default btn-block" name="reset">
                    changer de mot de passe
                </button>
            </form>
        </div>

        <br/><br/>
        <h4>
            <a href="deconnexion.php" class="btn btn-block">
                <i class="fa fa-power-off" aria-hidden="true"></i> Se Déconnecter
            </a>
        </h4>
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
</body>
</html>
