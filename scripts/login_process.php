<?php

declare(strict_types=1);

require_once '../config/Database.php';

$email = $_POST['email'];

$password = $_POST['password'];

$pdo = Database::connect();

$sql = "SELECT * FROM users
        WHERE email = ?";

$stmt = $pdo->prepare($sql);

$stmt->execute([$email]);

$user = $stmt->fetch();

if ($user) {

    echo "Connexion réussie";
} else {

    echo "Utilisateur introuvable";
}