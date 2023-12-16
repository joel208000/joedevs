<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paiement Canal Dinero</title>
    <!-- <link rel="stylesheet" href="./style.css"> -->
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        *, *::before, *::after {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}



body{
    font-family: 'Tw Cen Mt';
    font-size: 14px;
    margin: 0;
}

header{
    max-width: 80%;
    margin-right: auto;
    margin-left: auto;
}

nav {
    display: flex;
    justify-content: space-between;
    align-items: center;
    width: 100%;
    padding-top: 2rem;
    padding-bottom: 2rem;
    font-size: calc(0.5rem + 1.5vw);
}

nav .logo{
    width: 170px;
}
#icons {
    display: none;
    cursor: pointer;
}

nav ul{
    display: flex;
    justify-content: space-between;
    width:60%;

}
nav ul li{
    list-style: none;
    margin-left: 20px;
}
nav ul li a {
    text-decoration: none;
    color: rgb(36, 36, 36);
    transition: .3s;
}
nav ul li a:hover{
    color: #2eb0f0;
}
/* Services */
.paie, .faites {
    text-align: center;
    margin-top: 2rem;
    margin-bottom: 1.5rem;
    font-size: 2rem;
}
p {
    text-align: center;
    margin-top: 2rem;
    margin-bottom: 1rem;
    font-size: 1.5rem;
}

.numero-de-depot {
    text-align: center;
    margin-bottom: 2rem;
}

.numero-de-depot p {
    margin-bottom: 10px;
    font-size: 1rem;
    font-weight: bold;
}

.numero-de-depot img {
    vertical-align: middle;
}

.formule {
    display: flex;
    justify-content: space-around;
    margin-bottom: 2rem;
}


.formule span {
    font-weight: bold;
}

.gold {
    color:red;
}
.diamond {
    color: darkturquoise;
}
.argent {
    color: rgb(9, 16, 16);
}

form {
    width: 80%;
    margin: auto;
    background-color: #fff;
    padding: 2rem;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

form label,
form input {
    display: block;
    margin-bottom: 1rem;
}

form input[type="text"],
form input[type="submit"] {
    width: calc(100% - 20px);
    padding: 10px;
    border-radius: 5px;
    border: 1px solid #ccc;
}

form input[type="submit"] {
    cursor: pointer;
    background-color:#121212;
    color: #fff;
    border: none;
    transition: background-color 0.3s ease-in-out;
}

form input[type="submit"]:hover {
    background-color:#121212;
}

/*RESPONSIVE */

/*Home Page */

@media screen and (max-width:1024px) {
    
   
    nav .logo{
        max-width: 90%;
    }
    
    .text h1{
        font-size: 55px;
        flex-wrap: wrap;
    }

    .text p {
        font-size: 1.5rem;
        line-height: 1.2;
        flex-wrap: wrap;   
    }

    .text a {
        font-size: 1.5rem;
        padding: 15px 22px;
    }
    
}

@media  screen and (max-width:950px) {
    nav ul {
        padding: 0;
    }
}

@media  screen and (max-width: 768px) {
    .text h1 {
        font-size: 3.5rem;
        line-height: 1;
    }
    .text p {
        margin-top: 4rem;
    }
   #icons {
    display: block;
    z-index: 5;
   }
  

   #icons::before {
    content: "\2630";
   }

   .active #icons::before {
        content: "\2715";

   }

   nav ul {
    position: fixed;
    flex-direction: column;
    color: rgb(27, 27, 27);
    background-color: rgb(255, 255, 255);
    width: 100%;
    left: -100%;
    top: 5%;
    text-align: center;
    transition: 0.25s;
    padding-bottom: 1rem;
   }

   nav li {
    padding: 3px 0;
   }


   nav.active ul {
    left: 0;
   }

   .text h1 {
    font-size: 40px; 
}

.text p {
    font-size: 1.2rem; 
    margin-bottom: 1rem;
}

.text a {
    font-size: 1.2rem; 
    padding: 6px 12px; 
    margin-right: 15px; 
}

.reseaux {
    width: 90%; 
}
.reseaux img {
    width: 100px; 
    height: 100px;
}

.overlayy .lorem {
    font-size: 16px;
    margin-left: 10px;
    margin-right: 10px;
}

}

@media screen and (max-width: 480px) {
    .reseaux {
        width: 90%;
    }
    .reseaux img {
        width: 80px;
        height: 80px;
    }

    .overlayy .lorem {
        font-size: 15px;
        margin-left: 5px;
        margin-right: 5px;
    }
    .overlayy img {
        width: 50%;
    }
}

@media screen and (max-width: 435px) {
    nav .logo {
        max-width: 80%;
    }

    .text {
        padding-top: 6rem;
    }

    .text h1 {
        font-size: 8vw;
        margin-bottom: 1.5rem;
    }

    .text p {
        font-size: 0.9rem;
        line-height: 1.4;
        margin-bottom: 1rem;
    }

    .text a {
        font-size: 0.9rem;
        padding: 6px 12px;
        margin-right: 15px;
    }

}

    </style>
</head>
<body class="serv">
<header>
        <nav>
            <a href="acc.php"><img src="./Images/capture.png" alt="" class="logo"></a>
            <ul id="nav-list">
                <li><a href="acc.php">Accueil</a></li>
                <li><a href="ut.php">Historique de gain</a></li>
                <li><a href="pro.php">A propos</a></li>
                <li><a href="service.php">Service</a></li>
            </ul>
            <div id="icons"></div>
        </nav>
    </header>

    <div>
        <h1 class="paie">Passer au paiement</h1>
        <p class="faites">Faites un bon choix et intégrez mon canal pour maximiser vos gains comme moi </p>
        <div class="numero-de-depot">
            <span>Choisissez l'un des numéros sur lequel faire le dépôt</span>
            <p>+225 XXXXXXX  <span><img src="./Images/wave-logo.png" alt="" style="width: 70px; height: auto;"></span></p>
            <p>+225 XXXXXXX  <span><img src="./Images/orange-money.png" alt="" style="width: 70px; height: auto;"></span></p>
            <p>+225 XXXXXXX  <span><img src="./Images/Moov_Africa_logo.png" alt="" style="width: 70px; height: auto;"></span></p>  
        </div>
        <div class="formule">
            <span class="gold">Formule I : <h5>100.000 Fcfa</h5></span>
            <span class="diamond">Formule II : <h5>100.000 Fcfa</h5></span>
            <span class="argent">Formule III : <h5>100.000 Fcfa</h5></span>
        </div>
    </div>

    <form id="monFormulaire">
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" placeholder="Dinero" required>

        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom" placeholder="John" required>

        <label for="numero">Numéro sur lequel vous avez effectué le Dépôt :</label>
        <input type="number" id="numero" name="numero" required placeholder="+225 xxxxxxx"><br>

        <label for="numero_depot">Numero ayant effectué le dépôt : </label>
        <input type="number" name="numero_depot" id="numero_depot" placeholder="+225 xxxxxxx" required>

        <label for="numero_whatsapp">Numéro WhatsApp :</label>
        <input type="number" id="numero_whatsapp" name="numero_whatsapp" placeholder="+225 xxxxxxx" required>

        <button type="button" onclick="envoyerFormulaire()">Envoyer</button>
    </form>
    <script src="./index.js"></script>


    <!-- Modal -->
<div class="modal" id="loadingModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body text-center">
                <div class="spinner-border" role="status">
                    <span class="sr-only">Chargement...</span>
                </div>
                <p id="messageText">Chargement...</p>
                <!-- Modifiez le bouton OK pour appeler la fonction reinitialiserFormulaire() -->
                <button type="button" class="btn btn-primary" onclick="reinitialiserFormulaire()">OK</button>
            </div>
        </div>
    </div>
</div>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.min.js"></script>
    <script>
        function envoyerFormulaire() {
            // Réinitialiser le contenu du modal
            $('#messageText').text('Chargement...');
            $('.spinner-border').show();
            $('.btn-primary').hide();

             // Vérifier si le formulaire est valide avant d'envoyer
             if ($('#monFormulaire')[0].checkValidity()) {

            // Vérifier la longueur des numéros de téléphone
            var numero = $('#numero').val();
            var numeroDepot = $('#numero_depot').val();
            var numeroWhatsApp = $('#numero_whatsapp').val();
            

            if (numero.length !== 10 || numeroDepot.length !== 10 || numeroWhatsApp.length !== 10) {
                alert('Veuillez saisir un numéro de 10 chiffres.');
                return;// Arrêter le processus d'envoi du formulaire
            }

            // Afficher le modal de chargement avec un délai d'affichage de 2 secondes
            $('#loadingModal').modal('show');
            setTimeout(function() {
                // Récupérer les données du formulaire
                var nom = $('#nom').val();
                    var prenom = $('#prenom').val();
                    var numero = $('#numero').val();
                    var numeroDepot = $('#numero_depot').val();
                    var numeroWhatsApp = $('#numero_whatsapp').val();
                                
                // Envoyer les données au serveur avec AJAX
                $.ajax({
                    type: 'POST',
                    url: 'trait.php', // Remplacez par le chemin du script de traitement sur votre serveur
                    data: {
                            nom: nom,
                            prenom: prenom,
                            numero: numero,
                            numero_depot: numeroDepot,
                            numero_whatsapp: numeroWhatsApp
                        },
                    success: function(response) {
                        // Mettre à jour le message de succès
                        $('#messageText').text('Nous examinerons votre demande. Si elle est correcte, vous serez ajouté dans le groupe privé dans les 24 heures qui suivent');

                        // Cacher le spinner
                        $('.spinner-border').hide();

                        // Afficher le bouton OK
                        $('.btn-primary').show();
                    },
                    error: function(error) {
                        // Gérer les erreurs ici
                        console.log(error);
                    }
                });
            }, 2000); // Délai d'affichage du modal de chargement (2 secondes)

        } else {
                // Afficher un message d'erreur si le formulaire n'est pas valide
                alert('Veuillez remplir tous les champs obligatoires et respecter le format attendu pour les numéros.');
            }
        }

        function reinitialiserFormulaire() {
            // Cacher le modal de chargement
            $('#loadingModal').modal('hide');

            // Réinitialiser les champs du formulaire
            $('#monFormulaire')[0].reset();
        }
    </script>
</body>
</html>
