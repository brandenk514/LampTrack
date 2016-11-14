<?php

/*
 * SETTINGS!
 */
$databaseName = 'rooms';
$databaseUser = 'root';
$databasePassword = 'root';

try {

    /*
     * CREATE THE DATABASE
     */
    $pdoDatabase = new PDO('mysql:host=localhost', $databaseUser, $databasePassword);
    $pdoDatabase->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdoDatabase->exec('CREATE DATABASE IF NOT EXISTS rooms');

    /*
     * CREATE THE TABLE
     */
    $pdo = new PDO('mysql:host=localhost;dbname=' . $databaseName, $databaseUser, $databasePassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // initialize the table
    $pdo->exec('DROP TABLE IF EXISTS room;');

    $pdo->exec('CREATE TABLE `room` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `building` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
 `roomNum` int(4) NOT NULL,
 `hasProjector` boolean NOT NULL,
 `projectorHours` int(4) NOT NULL,
 PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci');

    /*
     * Data
     */
    $pdo->exec('INSERT INTO ship
    (building, roomNum, hasProjector, projectorHours) VALUES
    ("Julia Rogers", 277, TRUE, 789)'
    );

    echo "Ding!\n";
} catch (PDOException $e) {
    echo $e->getMessage();
}
