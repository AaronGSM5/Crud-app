<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$host = 'mysql-db';
$dbname = 'my_app';
$user = 'aaron';
$pass = 'aaronsecret';
$charset = 'utf8mb4';

$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

// Step 1: Establish the database connection
try {
     $dsn = "mysql:host=$host;dbname=$dbname;charset=$charset";
     $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
     // If the connection fails, stop everything and display a clear error.
     throw new \PDOException($e->getMessage(), (int)$e->getCode());
}

// Step 2: Try to create the table
try {
    $sql = "CREATE TABLE IF NOT EXISTS `users` (
      `id` int(11) NOT NULL AUTO_INCREMENT,
      `name` varchar(255) NOT NULL,
      `email` varchar(255) NOT NULL,
      PRIMARY KEY (`id`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;";

    // Execute the query to create the table
    $pdo->exec($sql);

} catch (\PDOException $e) {
    // If table creation fails, display a specific error.
    die("DATABASE ERROR: Could not create the 'users' table. " . $e->getMessage());
}
?>
