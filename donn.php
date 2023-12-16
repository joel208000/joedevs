
<?php
$conn = new mysqli("localhost", "root", "", "database");

if ($conn->connect_error) {
    die("Erreur de connexion à la base de données : " . $conn->connect_error);
}

$result = $conn->query("SELECT * FROM donnee");
?>
<!-- Afficher les données soumises -->
<?php while ($row = $result->fetch_assoc()) : ?>
    <div class="element-a-supprimer" data-id="<?php echo $row['id']; ?>">
        <h2>Données soumises :</h2>
        <p>Nom : <?php echo $row['nom']; ?></p>
        <p>Prénom : <?php echo $row['prenom']; ?></p>
        <p>Numéro sur lequel vous avez effectué le Dépôt : <?php echo $row['numero']; ?></p>
        <p>Numero ayant effectué le dépôt :  <?php echo $row['numero_depot']; ?></p>
        <p>Numéro WhatsApp : <?php echo $row['numero_whatsapp']; ?></p>

        <!-- Ajouter un bouton de suppression pour chaque élément -->
        <button class="supprimer" data-id="<?php echo $row['id']; ?>">Supprimer</button>
    </div>
<?php endwhile; ?>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    // Fonction pour supprimer un élément
    function supprimerElement(id) {
        $.ajax({
            type: 'POST',
            url: 'supp.php',
            data: { id: id },
            success: function(response) {
                console.log(response);
                // Actualiser la page ou masquer l'élément supprimé
                // Exemple avec masquage : 
                $(".element-a-supprimer[data-id='" + id + "']").hide();
            },
            error: function(error) {
                console.log(error);
            }
        });
    }

    // Attacher un gestionnaire d'événement de clic à chaque bouton de suppression
    $(document).on("click", ".supprimer", function() {
        var id = $(this).data("id");
        supprimerElement(id);
    });
</script>

<!-- ... Autres codes ... -->
<?php
$conn->close();
?>