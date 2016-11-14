<?php

/**
 * Created by PhpStorm.
 * User: brandenkaestner
 * Date: 11/7/16
 * Time: 10:17 PM
 */
class Container
{
    private $config;
    private $pdo;
    private $roomStorage;
    private $roomLoader;

    public function __construct(array $configuration)
    {
        $this->config = $configuration;
    }

    public function getPDO() {
        if ($this->pdo === null) {
            $this->pdo = new PDO(
                $this->config['db_dsn'],
                $this->config['db_name'],
                $this->config['db_pass']
            );
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        return $this->pdo;
    }

    public function getRoomStorage() {
        if ($this->roomStorage === null) {
            $this->roomStorage = new pdoRoomStorage($this->getPDO());
        }

        return $this->roomStorage;
    }

    public function getRoomLoader() {
        if ($this->roomLoader === null) {
            $this->roomLoader = new RoomLoader($this->getRoomStorage());
        }

        return $this->roomStorage;
    }
}