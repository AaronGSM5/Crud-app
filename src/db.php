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

try {
	$dsn = "mysql:host=$host;dbname=$dbname;charset=$charset";
	$pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
	throw new \PDOException($e->getMessage(), (int)$e->getCode());
}

try {
	$userSql = "CREATE TABLE IF NOT EXISTS `users` (
      `id` int(11) NOT NULL AUTO_INCREMENT,
      `name` varchar(255) NOT NULL,
      `email` varchar(255) NOT NULL,
      `birthday` date NOT NULL,
      PRIMARY KEY (`id`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;";

	$addressesSql = "CREATE TABLE IF NOT EXISTS `addresses` (
    	`id` INT AUTO_INCREMENT PRIMARY KEY,
      `user_id` INT,
      `street` varchar(255),
      `house_number` varchar(10),
      `postal_code` varchar(20),
      `city` varchar(255),
      FOREIGN KEY (user_id)
			REFERENCES users(id)
			ON DELETE CASCADE
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;";

	$pdo->exec($userSql);
	$pdo->exec($addressesSql);
} catch (\PDOException $e) {
	die("DATABASE ERROR: Could not create the 'users' table. " . $e->getMessage());
}
