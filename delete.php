<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $conn = new mysqli("localhost", "root", "", "database");

    if ($conn->connect_error) {
        die("Erreur de connexion à la base de données : " . $conn->connect_error);
    }

    $id = $_POST["id"];
    $result = $conn->query("SELECT nom_fichier FROM photos WHERE id = $id");

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $nomFichier = $row["nom_fichier"];

        // Supprime le fichier du serveur
        unlink("uploads/$nomFichier");

        // Supprime l'enregistrement de la base de données
        $conn->query("DELETE FROM photos WHERE id = $id");
    }

    $conn->close();

    header("Location: ad.php");
    exit();
}
?>
