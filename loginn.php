<?php
// loginn.php

// Vérifie si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupère les valeurs soumises
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Vérifie les informations d'identification (vous devrez implémenter votre propre logique ici)
    if ($username === "marco" && $password === "dinerobet") {
        // Authentification réussie, redirige vers la page d'administration
        header("Location: best.php");
        exit();
    } else {
        // Authentification échouée, affiche un message d'erreur
        echo "Nom d'utilisateur ou mot de passe incorrect.";
    }
}
?>
