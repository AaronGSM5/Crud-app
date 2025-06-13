<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require 'db.php';

    $name = $_POST['name'];
    $email = $_POST['email'];
    $birthday = $_POST['birthday'];
    $street = $_POST['street'];
    $house_number = $_POST['house_number'];
    $postal_code = $_POST['postal_code'];
    $city = $_POST['city'];

    $pdo->beginTransaction();

    try {
        $sqlUser = "INSERT INTO users (name, email, birthday) VALUES (?, ?, ?)";
        $stmtUser = $pdo->prepare($sqlUser);
        $stmtUser->execute([$name, $email, $birthday]);

        $userId = $pdo->lastInsertId();

        $sqlAddress = "INSERT INTO addresses (user_id, street, house_number, postal_code, city) VALUES (?, ?, ?, ?, ?)";
        $stmtAddress = $pdo->prepare($sqlAddress);
        $stmtAddress->execute([$userId, $street, $house_number, $postal_code, $city]);

        $pdo->commit();

        header("Location: index.php");
        exit();
    } catch (Exception $e) {
        $pdo->rollBack();
        die("Error creating user: " . $e->getMessage());
    }
}
