<?php
/**
 * Created by PhpStorm.
 * User: brandenkaestner
 * Date: 11/11/16
 * Time: 11:27 AM
 */

$configuration = array(
    'db_dsn' => 'mysql:host=localhost;dbname=rooms',
    'db_user' => 'root',
    'db_pass' => 'root',
);

require_once __DIR__ . '/src/service/Container.php';
require_once __DIR__ . '/src/service/pdoRoomStorage.php';
require_once __DIR__ . '/src/service/RoomLoader.php';
require_once __DIR__ . '/src/service/RoomStorageInterface.php';
require_once __DIR__ . '/src/model/Room.php';