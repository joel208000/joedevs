<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $numero = $_POST['numero'];
    $numeroDepot = $_POST['numero_depot'];
    $numeroWhatsApp = $_POST['numero_whatsapp'];

    // Affiche les valeurs pour le débogage
    echo "Nom: " . $nom . "<br>";
    echo "Prénom: " . $prenom . "<br>";
    echo "Numéro: " . $numero . "<br>";
    echo "Numéro de dépôt: " . $numeroDepot . "<br>";
    echo "Numéro WhatsApp: " . $numeroWhatsApp . "<br>";

    $conn = new mysqli("localhost", "root", "", "database");

    if ($conn->connect_error) {
        die("Erreur de connexion à la base de données : " . $conn->connect_error);
    }

    $stmt = $conn->prepare("INSERT INTO donnee (nom, prenom, numero, numero_depot, numero_whatsapp) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $nom, $prenom, $numero, $numeroDepot, $numeroWhatsApp);

    if ($stmt->execute()) {
        echo "Données enregistrées avec succès.";
    } else {
        echo "Erreur lors de l'enregistrement des données : " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
    exit();
}
?>
