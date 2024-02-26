<?php
session_start();
if(!$_SESSION['id']){
    header("location:deconnexion.php");
}
$serveur = "193.203.168.3"; // Adresse IP du serveur MySQL distant
$utilisateur = "u677866956_compte_prod"; // Remplacez par votre nom d'utilisateur MySQL
$motdepasse = "!bEn7eS76=R%"; // Remplacez par votre mot de passe MySQL
$nom_bd = "u677866956_prod"; // Nom de votre base de données en ligne

// Création de la connexion
$conn = new mysqli($serveur, $utilisateur, $motdepasse, $nom_bd);

// Vérifier la connexion
if ($conn->connect_error) {
    die("La connexion à la base de données a échoué : " . $conn->connect_error);
}

// Requête pour récupérer les joueurs du score le plus élevé au score le plus bas
$sql = "SELECT * FROM users ORDER BY score DESC";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Mettez vos balises meta et autres en-têtes ici -->
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


    <div class="container-fluid" style="min-height:400px; padding-top:0px;">
        <div class="container">
            <!-- Affichage des joueurs -->
            <?php
            $classement = 1; // Initialisation du classement à 1
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo '<div class="well">
                            <div class="row">
                                <div class="col-xs-2 text-center">
                                    <div style="font-size: 40px;margin-bottom: -20px;">'.$classement.'</div>
                                </div>
                                <div class="col-xs-10">
                                    <p style="margin:0"><a href="https://secretrepublic.nenuadrian.com/hacker/access/'.$row["username"].'">'.$row["username"].'</a></p>
                                    <small>'.$row["score"].' points - '.$row["score"].' points</small>
                                </div>
                            </div>
                        </div>';
                    $classement++; // Incrémenter le classement pour le prochain utilisateur
                }
            } else {
                echo "Aucun joueur trouvé.";
            }
            ?>
        </div>
    </div>

    <!-- Mettez vos balises de script et autres en pied de page ici -->

</body>
</html>

<?php
// Fermer la connexion à la base de données
$conn->close();
?>
