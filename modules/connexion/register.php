<?php
include('../../src/setup.php');


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    if ($password == $confirm_password) {
        // Hasher le mot de passe
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO utilisateurs (email, mdp) VALUES ('$email', '$hashed_password')";

        if ($conn->query($sql) === TRUE) {
            // Connexion réussie, rediriger vers add-property
            header("Location: http://immob/add-property.php");
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "Passwords do not match.";
    }
}
?>