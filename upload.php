<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_FILES["photo"]) && $_FILES["photo"]["error"] == 0) {
        $dossierCible = "uploads/";
        $nomFichierOriginal = $_FILES["photo"]["name"];
        $cheminFichierCible = $dossierCible . basename($nomFichierOriginal);

        // Générer un nom de fichier unique en ajoutant un timestamp
        $timestamp = time();
        $nomFichierUnique = $timestamp . "_" . $nomFichierOriginal;
        $cheminFichierCible = $dossierCible . $nomFichierUnique;

        // Déplacer le fichier téléchargé vers le dossier cible
        move_uploaded_file($_FILES["photo"]["tmp_name"], $cheminFichierCible);

        $connexion = new mysqli("localhost", "root", "", "database");

        if ($connexion->connect_error) {
            die("Erreur de connexion à la base de données : " . $connexion->connect_error);
        }

        $description = isset($_POST["description"]) ? $_POST["description"] : "";

        // Utilisation de la fonction NOW() pour insérer la date actuelle
        $connexion->query("INSERT INTO photos (nom_fichier, description, date_ajout) VALUES ('$nomFichierUnique', '$description', NOW())");

        $connexion->close();

        header("Location: ad.php");
        exit();
    } else {
        echo "Erreur lors du téléchargement de la photo.";
    }
}
?>
