<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Page Utilisateur</title>


</head>
<body class="ut">

    <header>
        <nav  id="nav">
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
    
    

    <!-- Affiche les photos depuis la base de données -->
   
    <?php
    $conn = new mysqli("localhost", "root", "", "database");

    if ($conn->connect_error) {
        die("Erreur de connexion à la base de données : " . $conn->connect_error);
    }

    $result = $conn->query("SELECT * FROM photos ORDER BY date_ajout DESC");

    echo '<div class="image-container">'; // Conteneur pour les images

    $count = 0; // Compteur pour gérer les groupes de trois images

    while ($row = $result->fetch_assoc()) {
        echo '<div>';
        echo '<img src="uploads/' . $row["nom_fichier"] . '" alt=" width="300" height="300">';
        echo '<p>' . $row["description"] . '</p>';           
        echo '</div>';

        $count++;

        if ($count % 3 === 0) {
            // Si trois images ont été affichées, commencez un nouveau groupe
            echo '</div><div class="image-container">';
        }
    }

    echo '</div>'; // Fermez le dernier conteneur

    $conn->close();
    ?>
    <script src="./index.js"></script>
</body>
</html>
