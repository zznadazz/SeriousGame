<?php

session_start();
if(!$_SESSION['id']){
    header("location:deconnexion.php");
}
;
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz sur le Protocole ARP</title>
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
        margin-bottom: 0px; /* Add margin-bottom to create space between radio choices */
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
            color: white;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
        /* Popup styles */
        .popup {
            color: black; /* Change the color of "Félicitations" to black */
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
    </style>
</head>
<body>
<div class="container">
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

    <h1>Quiz sur le Protocole DHCP</h1>
    <img src="assets/img/logo.png" class="main-logo" style="max-width:300px; width:100%; margin-top:-60px; margin-bottom:20px" />
    <form onsubmit="submitForm(event)">
        <p>Quelle est la fonction principale du protocole DHCP (Dynamic Host Configuration Protocol) ?</p>
        <div>
             <input type="radio" name="reponse" value="a" label for="reponse_a"> Attribution dynamique des adresses IP aux appareils du réseau.<br>
        </div>
        <div>
             <input type="radio" name="reponse" value="b" label for="reponse_b"> Routage des paquets de données sur Internet.<br>
        </div>
        <div>
            <input type="radio" name="reponse" value="c" label for="reponse_c">Traduction des noms de domaine en adresses IP.<br>
         </div>
        <div>
            <input type="radio" name="reponse" value="d" label for="reponse_d">Chiffrement des communications réseau pour assurer la confidentialité des données.<br>
        </div>
        <input type="submit" value="Soumettre">
    </form>

    <!-- Afficher le résultat sans recharger la page -->
    <div id="result"></div>

    <!-- Le pop-up -->
    <div id="popup" class="popup">
        <div class="popup-content">
            <span class="close-btn" onclick="closePopup()">&times;</span>
            <img src="assets/img/iris.png" alt="Iris" /> <!-- Add the image on the left -->
            <h2>Félicitations, bonne réponse !</h2>
            <div id="popup-text">
                <!-- Le texte du pop-up variera en fonction de la situation -->
            </div>
            <button id="popup-button" class="popup-button" onclick="popupButtonClick()">Répondre à la prochaine question</button>
        </div>
    </div>
</div>

<script>
    var currentQuestion = 1;

    function playSound(response) {
        var audio = new Audio(response + '.mp3');
        audio.play();
    }

    function showPopup() {
        var popup = document.getElementById('popup');
        popup.style.display = 'block';
        setTimeout(function() {
            popup.style.opacity = 1;
        }, 10);

        // Ajout de l'événement de clic pour fermer le pop-up
        popup.addEventListener('click', closePopup);
    }

    function closePopup() {
        var popup = document.getElementById('popup');
        popup.style.opacity = 0;
        setTimeout(function() {
            popup.style.display = 'none';
        }, 500); // La transition de fondu dure 0.5 seconde
    }

    function changeQuestion() {
        var popup = document.getElementById('popup');
        popup.style.opacity = 0;
        setTimeout(function() {
            popup.style.display = 'none';
            currentQuestion++;
            showNextQuestion();
        }, 500); // La transition de fondu dure 0.5 seconde
    }

    function showNextQuestion() {
        var questionElement = document.querySelector('p');
        var radioElements = document.querySelectorAll('input[type="radio"]');

        switch (currentQuestion) {
                case 2:
                    questionElement.innerHTML = "Quel est le mécanisme utilisé par DHCP pour éviter les conflits d'adresses IP ?";
                    radioElements[0].nextSibling.nodeValue = "Enregistrement des adresses IP dans une base de données centrale.";
                    radioElements[1].nextSibling.nodeValue = "Renouvellement périodique des adresses IP.";
                    radioElements[2].nextSibling.nodeValue = "Utilisation de baux DHCP avec une durée limitée.";
                    radioElements[3].nextSibling.nodeValue = "Attribution d'adresses IP statiques à chaque appareil.";
                    // Mettez à jour la réponse correcte et les mauvaises réponses
                    radioElements[0].value = "c"; 
                    radioElements[1].value = "a";// Réponse correcte
                    radioElements[2].value = "b";
                    radioElements[3].value = "d";
                    break;
                case 3:
                    questionElement.innerHTML = "Quel est le port utilisé par le protocole DHCP pour les communications ?";
                    radioElements[0].nextSibling.nodeValue = "Port 80";
                    radioElements[1].nextSibling.nodeValue = "Port 443";
                    radioElements[2].nextSibling.nodeValue = "Port 53";
                    radioElements[3].nextSibling.nodeValue = "Port 67/68";
                    // Mettez à jour la réponse correcte et les mauvaises réponses
                    radioElements[0].value = "d"; 
                    radioElements[1].value = "b";
                    radioElements[2].value = "c";
                    radioElements[3].value = "a";// Réponse correcte
                    break;
                case 4:
                    questionElement.innerHTML = "Quelle est la conséquence d'une panne du serveur DHCP ?";
                    radioElements[0].nextSibling.nodeValue = "Tous les appareils perdent leur connexion réseau.";
                    radioElements[1].nextSibling.nodeValue = "Les adresses IP attribuées expireront et les appareils devront redemander une adresse.";
                    radioElements[2].nextSibling.nodeValue = "Les appareils conserveront leurs adresses IP actuelles jusqu'à la résolution du problème.";
                    radioElements[3].nextSibling.nodeValue = "Le serveur DNS prendra en charge la distribution des adresses IP.";
                    // Mettez à jour la réponse correcte et les mauvaises réponses
                    radioElements[0].value = "b"; 
                    radioElements[1].value = "c";// Réponse correcte
                    radioElements[2].value = "a";
                    radioElements[3].value = "d";
                    break;
                default:
                    // Si toutes les questions ont été posées, réinitialisez la variable currentQuestion
                    currentQuestion = 1;
                    closePopup(); // Fermer le pop-up si toutes les questions ont été posées
                    break;
            }

        // Réinitialisez la sélection des réponses
        for (var i = 0; i < radioElements.length; i++) {
            radioElements[i].checked = false;
        }
    }

    function popupButtonClick() {
        if (currentQuestion < 4) {
            changeQuestion();
        } else {
            showPopupFinal();
        }
    }

    function showPopupFinal() {
        var popupButton = document.getElementById('popup-button');
        
        // Redirigez vers la page "section.php" lorsque le bouton est cliqué
        popupButton.onclick = function() {
            window.location.href = "section.php";
        };

        var popupText = document.getElementById('popup-text');
        popupText.innerHTML = "Bravo, tu es désormais un vrai professionnel du protocole ARP.<br>Voulez-vous retourner aux sections ou en savoir plus sur le protocole ARP ?";
        popupButton.innerHTML = "Retourner aux sections";
        // Ajout du bouton "En savoir plus sur ce protocole"
        var learnMoreButton = document.createElement('button');
        learnMoreButton.innerHTML = "En savoir plus sur ce protocole";
        learnMoreButton.onclick = function() {
    // Ouvre le lien dans une nouvelle fenêtre
    window.open("https://fr.wikipedia.org/wiki/Dynamic_Host_Configuration_Protocol", "_blank");
};

        popupText.appendChild(document.createElement('br'));
        popupText.appendChild(learnMoreButton);

        showPopup();
    }

    function submitForm(event) {
        event.preventDefault(); // Empêche le rechargement de la page
        var reponse = document.querySelector('input[name="reponse"]:checked').value;

        // Vérifiez la réponse et affichez le résultat
        if (reponse == "a") { // Vérifie si la réponse sélectionnée est correcte
            document.getElementById('result').innerHTML = "<p>C'est correct !</p>";
            playSound("correct");
            if (currentQuestion < 4) {
                showPopup();
            } else {
                showPopupFinal();
            }
        } else {
            document.getElementById('result').innerHTML = "<p>Désolé, c'est incorrect.</p>";
            playSound("incorrect");
        }
    }
</script>
</body>
</html>
