<?php
include('../../src/setup.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $titre = isset($_POST['titre']) ? $_POST['titre'] : '';
    $description = isset($_POST['description']) ? $_POST['description'] : '';
    $adresse = isset($_POST['addresse']) ? $_POST['addresse'] : '';
    $prix = isset($_POST['prix']) ? $_POST['prix'] : '';
    $statut_bien = isset($_POST['statut_bien']) ? $_POST['statut_bien'] : '';
    $image = '';

    // Vérifier que les champs obligatoires ne sont pas vides
    if (!empty($titre) && !empty($adresse) && !empty($prix)) {
        // Gérer l'upload de l'image
        /*if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
            $image = 'uploads/' . basename($_FILES['image']['name']);
            move_uploaded_file($_FILES['image']['tmp_name'], $image);
        }*/

        // Créer un tableau associatif pour stocker les données
        $annonce = [
            'titre' => $titre,
            'description' => $description,
            'prix' => $prix,
            'address' => $adresse,
            'image' => $image,
            'statut_bien' => $statut_bien
        ];

        // Convertir le tableau en JSON
        $annonce_json = json_encode($annonce);

        // Insérer les données JSON dans la base de données
        $sql = "INSERT INTO annonces (data) VALUES ('$annonce_json')";

        if ($conn->query($sql) === TRUE) {
            echo "L'annonce a été ajoutée avec succès.";
            header("Location: ../../dashboard.html");
            exit();
        } else {
            echo "Erreur : " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "Tous les champs obligatoires doivent être remplis.";
    }
}
?>