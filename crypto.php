<?php
session_start();
if(!$_SESSION['id']){
    header("location:deconnexion.php");
};

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['password'])) {
    function crackme($pass)
    {
        $a1 = $a2 = $a3 = '';

        for ($i = 0; $i < strlen($pass); $i++) {
            $a1 .= chr((ord($pass[$i]) + 28) % 256);

            $a2 .= chr(ord($a1[$i]) ^ 226);
        }

        $a3 = base64_encode($a2);

        return ($a3 == "h42DvXW8bLJwro6uc2y9rY5srWtnrWy9ZrJqaq1oYa17");
    }

    $password = $_POST['password'];
    $result = crackme($password) ? 'Bravo!' : 'Incorrect!';

    // Si la réponse est correcte, affichez un popup en JavaScript
    if (crackme($password)) {
        echo "<script>
                window.onload = function() {
                    var popup = document.getElementById('popup');
                    popup.style.display = 'block';
                }
              </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cryptographie</title>
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">
    <link type="text/css" rel="stylesheet" href="assets/css/reset.css?1609499614"/>
    <link type="text/css" rel="stylesheet" href="assets/css/bootstrap.min.css?1609499613"/>
    <link type="text/css" rel="stylesheet" href="assets/css/style.css?1609499615"/>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,300i,400,400i,600&amp;subset=latin-ext"
          rel="stylesheet">
    <style>
        /* Custom styles */
        body {
            margin: 0;
            padding: 0;
            font-family: 'Josefin Sans', sans-serif;
        }
        .container {
            width: 80%;
            margin: auto;
            text-align: center;
            padding-top: 50px;
        }
        h1 {
            margin-bottom: 20px;
        }
        form {
            margin-bottom: 20px;
        }
        form p {
            font-size: 30px; /* Remplacez la valeur par celle qui vous convient */
   
            margin-bottom: 30px;
            font-weight: bold;
        }

        form div {
        margin-bottom: 20px; /* Ajoute une marge de 20px entre chaque groupe de réponses */
        }
        form label {
        margin-bottom: 10px; /* Add margin-bottom to create space between radio choices */
        display: block; /* Ensures each radio choice appears on a new line */
        }

        input[type="radio"] {
            margin-right: 10px;
        }
        input[type="submit"] {
            margin-top: 10px;
            padding: 10px 20px;
            background-color: #007bff;
            border: none;
            color: black;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
        /* Popup styles */
        .popup {
            color:black;
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 20px;
            background: white;
            border: 2px solid #333;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            z-index: 999;
            transition: opacity 0.5s;
            cursor: pointer;
        }
        .close-btn {
            position: absolute;
            top: 10px;
            right: 10px;
            cursor: pointer;
            font-size: 24px;
        }
        .popup-content {
            text-align: center;
        }
        .popup-button {
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #007bff;
            border: none;
            color: white;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .popup-button:hover {
            background-color: #0056b3;
        }
        /* Additional styles for the popup */
        .popup-content img {
            max-width: 100px;
            margin-right: 20px;
            vertical-align: middle;
        }
        .popup-content h2 {
            color: black; /* Change the color of "Félicitations" to black */
            display: inline; /* Ensures that the image and text are on the same line */
        }
        input[type="text"] {
            color: black; /* Couleur du texte noire */
        }
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
        <h1>Challenge de cryptographie</h1>
        <h3>Un mot de passe se cache dans l’image ci-dessous, saurez-vous le trouver ? Indice : le mot de passe a pour format ISEC{xxxxxxx}, une fois trouvé, écrivez le mot de passe sur le champ en dessous.</h3>
        <img src="crypto.png" alt="Image">
        <form method="post">
        <div>
            <input type="text" name="password" />
            <input type="submit" value="Envoyer" />
        </div>
    </form>
    </div>

    <!-- Popup pour afficher la réponse correcte -->
    <div id="popup" class="popup">
        <div class="popup-content">
            <span class="close-btn" onclick="closePopup()">&times;</span>
            <img src="assets/img/iris.png" alt="Iris" /> <!-- Add the image on the left -->
            <h2>Félicitations, bonne réponse !</h2>
            <div id="popup-text">
                <!-- Le texte du pop-up variera en fonction de la situation -->
            </div>
            <button id="popup-button" class="popup-button" onclick="redirectToSections()">Retourner aux sections</button>
        </div>
    </div>

    <script>
        // Fonction pour fermer le popup
        function closePopup() {
            var popup = document.getElementById('popup');
            popup.style.display = 'none';
        }
        
        function redirectToSections() {
            window.location.href = "section.php";
        }
    </script>
</body>
</html>
