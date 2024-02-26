<?php
session_start();
if(!$_SESSION['id']){
    header("location:deconnexion.php");
}

// Fonction de déchiffrement
function dechiffrerMessage($message, $methode) {
    switch ($methode) {
        case 'Caesar':
            $decalage = 3; // Décalage pour le chiffrement Caesar
            return dechiffrerCaesar($message, $decalage);
        // Ajoutez d'autres méthodes de déchiffrement ici si nécessaire
        default:
            return "Méthode de déchiffrement non reconnue.";
    }
}

// Fonction pour déchiffrer le chiffrement Caesar
function dechiffrerCaesar($message, $decalage) {
    $alphabet = range('A', 'Z');
    $dechiffre = '';
    
    // Pour chaque caractère dans le message
    for ($i = 0; $i < strlen($message); $i++) {
        $caractere = $message[$i];
        
        // Si c'est une lettre majuscule, déchiffrez-la
        if (ctype_upper($caractere)) {
            // Trouvez la position du caractère dans l'alphabet
            $position = array_search($caractere, $alphabet);
            
            // Déchiffrez en appliquant le décalage
            $position = ($position - $decalage + 26) % 26;
            
            // Ajoutez le caractère déchiffré à la chaîne de sortie
            $dechiffre .= $alphabet[$position];
        } else {
            // Conservez le caractère tel quel s'il n'est pas une lettre majuscule
            $dechiffre .= $caractere;
        }
    }
    
    return $dechiffre;
}

// Vérification du message déchiffré
$message_dechiffre = "";
if (isset($_POST['message_chiffre'])) {
    // Le message chiffré saisi par l'utilisateur
    $message_chiffre = strtoupper($_POST['message_chiffre']);
    
    // Le message original attendu
    $message_original = 'HELLO WORLD';
    
    // Méthode de déchiffrement utilisée
    $methode = 'Caesar';
    
    // Déchiffrement du message
    $message_dechiffre = dechiffrerMessage($message_chiffre, $methode);
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vérification du Message Déchiffré</title>
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">
    <link rel="manifest" href="js13kpwa.webmanifest">
    <link type="text/css" rel="stylesheet" href="assets/css/reset.css?1609499614"/>
    <link type="text/css" rel="stylesheet" href="assets/css/bootstrap.min.css?1609499613"/>
    <link type="text/css" rel="stylesheet" href="assets/css/style.css?1609499615"/>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,300i,400,400i,600&amp;subset=latin-ext"
          rel="stylesheet">
    <style>
        body {
            font-family: 'Josefin Sans', sans-serif;
            margin: 20px; /* Added margin */
            color: #fff; /* Changed text color to white */
        }
        h2 {
            text-align: center;
            margin-top: 50px;
        }
        p {
            text-align: justify;
            margin-bottom: 20px;
        }
        .btn {
            display: block;
            width: 200px;
            margin: 0 auto;
            text-align: center;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            padding: 10px 20px;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }
        .btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body class="noselect">

            <div class="collapse navbar-collapse" id="menu">
                <ul class="nav navbar-nav text-center">
                    <li><a href="section.php"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                    <li><a href="rankings.php"><i class="fa fa-trophy" aria-hidden="true"></i></a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right text-center">
                    <li><a href="forgot-password.php"><i class="fa fa-cog" aria-hidden="true"></i></a></li>
                    <li><a href="deconnexion.php"><i class="fa fa-sign-out" aria-hidden="true"></i></a></li>
                </ul>
            </div><!-- /.navbar-collapse -->

    <div class="container-fluid" style="min-height:400px; padding-top:0px;">
        <div class="container">
            <div class="container text-center">
                <h1>Chiffrement de César</h1>
                <img src="assets/img/logo.png" class="main-logo" style="max-width:300px; width:100%; margin-top:-60px; margin-bottom:20px" />
                <?php if ($message_dechiffre): ?>
                    <?php if ($message_dechiffre === $message_original): ?>
                        <p style="color: green;">Le message déchiffré est correct !</p>
                    <?php else: ?>
                        <p style="color: red;">Le message déchiffré est incorrect.</p>
                    <?php endif; ?>
                <?php endif; ?>
                <p><strong>Message Original Attendu :</strong> HELLO WORLD</p>
                <form action="" method="post">
                    <label for="message_chiffre">Message Chiffré :</label><br>
                    <input type="text" id="message_chiffre" name="message_chiffre" required><br><br>
                    <input type="submit" value="Vérifier" class="btn">
                </form>
            </div>
        </div>
    </div>
    <footer>
    </footer>
    <!-- Include local scripts -->
    <script type="text/javascript" src="assets/js/jquery-3.1.0.min.js"></script>
    <script type="text/javascript" src="assets/js/moment.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/progressbar.min.js"></script>
    <script type="text/javascript" src="assets/js/countdown.custom.js"></script>
    <script type="text/javascript" src="assets/js/global.js"></script>
    <!-- Include your local scripts here -->
    <script type="text/javascript"></script>
    <script>
        googleAnalytics('user_624');
    </script>
</body>
</html>
