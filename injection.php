<?php
session_start();
// Connexion à la base de données SQLite
$db = new PDO('sqlite:database.db');
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Défi de la Bibliothèque Numérique</title>
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">
    <link rel="manifest" href="js13kpwa.webmanifest">
    <link type="text/css" rel="stylesheet" href="assets/css/reset.css?1609499614"/>
    <link type="text/css" rel="stylesheet" href="assets/css/bootstrap.min.css?1609499613"/>
    <link type="text/css" rel="stylesheet" href="assets/css/style.css?1609499615"/>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,300i,400,400i,600&amp;subset=latin-ext"
          rel="stylesheet">
    <style>
        body { font-family: Arial, sans-serif; }
        .confidential { color: red; }
        .result { margin-bottom: 20px; }

        <style>
        /* Custom styles */
        body {
            font-family: 'Josefin Sans', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #fff;
            /* Text color set to black */
        }
        .container {
            text-align: center; /* Center align all content */
        }
        .container h1 {
            color : white;
        }
        .context {
            background-color: #fff;
            padding: 20px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            color: #000;
            text-align: left; /* Align text within context div to left */
        }
        .context strong {
            color: #007bff;
        }
        form {
            margin-bottom: 20px;
            text-align: center; /* Center align form elements */
        }
        input[type="text"], input[type="submit"] {
            margin-right: 10px;
            padding: 5px;
            border-radius: 3px;
            border: 1px solid #ccc;
        }
        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
        .result {
            margin-bottom: 20px;
            text-align: center; /* Center align result content */
        }
    </style>
    </style>
</head>
<body>
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
  <h1>Défi de la Bibliothèque Numérique - Injection SQL</h1>
    <!-- Contexte du challenge -->
    <div class="context">
    Bienvenue dans le défi de la bibliothèque numérique ! Vous êtes un jeune stagiaire chargé d'effectuer un audit de sécurité sur le système de recherche de livres. La base de données "bibliotheque.db" contient une table "books" avec des informations sur des ouvrages classiques tels que <strong>Le Petit Prince</strong>, <strong>1984</strong>, et <strong>Le Seigneur des Anneaux</strong>.</p> Nous avons inséré des informations "confidentielles" dans notre base de données, simulant des données sensibles.</p>
        <p>Votre objectif est d'utiliser vos compétences en matière d'injection SQL pour retrouver le titre d'au moins un de ces ouvrages confidentiels. </p>
        <p>Utilisez le formulaire de recherche pour tester la vulnérabilité et le formulaire de vérification pour confirmer la découverte d'un ouvrage confidentiel. Bonne chance !</p>

        Indice : La recherche de livre est déja définit par le commande " SELECT * FROM books WHERE title LIKE '% "
        <br>
        Une condition peut être toujours valide 
    </div>

    <!-- Formulaire de recherche -->
    <form method="get">
        <input type="text" name="search" placeholder="Rechercher un livre...">
        <input type="submit" value="Rechercher">
    </form>

    <?php
    // Vérifie si le formulaire de recherche a été soumis
    if (isset($_GET['search'])) {
        $search = $_GET['search'];

        // Requête de base vulnérable à l'injection SQL
        $sql = "SELECT * FROM books WHERE title LIKE '%$search%'";

        echo "<h2>Résultats pour: " . htmlspecialchars($search) . "</h2><div class='result'>";

        // Exécution de la requête
        $result = $db->query($sql);

        // Affichage des résultats
        if ($result) {
            foreach ($result as $row) {
                echo "<p>" . htmlspecialchars($row['title']) . " par " . htmlspecialchars($row['author']) . "</p>";
            }
        } else {
            echo "<p>Aucun résultat trouvé.</p>";
        }

        echo "</div>";
    }
    ?>

    <!-- Formulaire de vérification -->
    <form method="get">
        <input type="text" name="verify" placeholder="Nom de l'ouvrage confidentiel découvert...">
        <input type="submit" value="Vérifier">
    </form>

    <?php
    // Vérification de la découverte d'un ouvrage confidentiel
    
    $bdd= new PDO('mysql:host=193.203.168.3;dbname=u677866956_prod;charset=utf8;', 'u677866956_compte_prod', '!bEn7eS76=R%');
    if (isset($_GET['verify'])) {
        $verify = $_GET['verify'];
        $confidentialTitles = ['Projet Secret Alpha', 'Mémoires d\'un Bibliothécaire', 'Guide de Sécurité Interne'];
        
        if (in_array($verify, $confidentialTitles)) {
            echo "<div><strong>Bravo !</strong> Vous avez découvert un ouvrage confidentiel :  " . htmlspecialchars($verify) . "<br>Gain : 30xp ; 50$ ; 20 pts</div>";
    
            // Incrémentation des valeurs d'XP, d'argent et de score
            $_SESSION['xp'] = isset($_SESSION['xp']) ? $_SESSION['xp'] + 30 : 30;
            $_SESSION['argent'] = isset($_SESSION['argent']) ? $_SESSION['argent'] + 50 : 50;
            $_SESSION['score'] = isset($_SESSION['score']) ? $_SESSION['score'] + 20 : 20;

            // Mise à jour des valeurs dans la base de données
            $stmt = $bdd->prepare('UPDATE users SET xp = xp + 30, argent = argent + 50, score = score + 20 WHERE username = :username');
            $stmt->execute(array(':username' => $_SESSION['username']));

        } else {
            echo "<div>Désolé, " . htmlspecialchars($verify) . " n'est pas un des ouvrages confidentiels recherchés.</div>";

            // Déduction du score
            $_SESSION['score'] = isset($_SESSION['score']) ? $_SESSION['score'] - 10 : -10;
            
            // Mise à jour du score dans la base de données
            $stmt = $bdd->prepare('UPDATE users SET score = score - 10 WHERE username = :username');
            $stmt->execute(array(':username' => $_SESSION['username']));
        }
    }
    ?>
</body>
</html>
