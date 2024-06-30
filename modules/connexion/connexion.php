<?php
include('../../src/setup.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Vérifier si l'utilisateur existe
    $sql = "SELECT * FROM utilisateurs WHERE email='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        // Vérifier le mot de passe
        if (password_verify($password, $row['mdp'])) {
            // Connexion réussie, rediriger vers add-property
            header("Location: http://immob/add-property.php");
            exit();
        } else {
            echo "Mot de passe invalide.";
        }
    } else {
        echo "Aucun utilisateur trouvé avec cet e-mail.";
    }
}
?>