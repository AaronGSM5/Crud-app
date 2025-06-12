<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require 'db.php';

    $name = $_POST['name'];
    $email = $_POST['email'];

    $sql = "INSERT INTO users (name, email) VALUES (?, ?)";
    $stmt= $pdo->prepare($sql);
    $stmt->execute([$name, $email]);

    header("Location: index.php");
    exit();
}
?>