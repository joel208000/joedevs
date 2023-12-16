<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Administrateur</title>
    <link rel="stylesheet" href="admin.css">
   
</head>
<body>

    <!-- Formulaire pour télécharger des photos -->
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <label for="photo">Choisissez une photo :</label>
        <input type="file" name="photo" accept="image/*" required>
        <br>
        <label for="description">Description :</label>
        <input type="text" name="description">
        <br>
        <button type="submit">Télécharger</button>
    </form>

    <form action="login.php" method="post">
        <button type="submit">Déconnexion</button>
    </form>
    

    <?php
    $conn = new mysqli("localhost", "root", "", "database");

    if ($conn->connect_error) {
        die("Erreur de connexion à la base de données : " . $conn->connect_error);
    }

    $result = $conn->query("SELECT * FROM photos ORDER BY date_ajout DESC");

    while ($row = $result->fetch_assoc()) {
        echo '<div>';
        echo '<div style="margin-bottom: 20px;">'; 
        echo '<div style="margin-left: 10px;">'; 
        echo '<img src="uploads/' . $row["nom_fichier"] . '" alt=" width="300" height="300">';   
        echo '<p>' . $row["description"] . '</p>';           
        echo '<form action="delete.php" method="post" style="display:inline;">';
        echo '<input type="hidden" name="id" value="' . $row["id"] . '">';
        echo '<button type="submit" class="btn">Supprimer</button>';
        echo '</form>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
    }

    $conn->close();
?>

</body>
</html>
