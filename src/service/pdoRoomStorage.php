<?php

/**
 * Created by PhpStorm.
 * User: brandenkaestner
 * Date: 11/7/16
 * Time: 9:54 PM
 */
class pdoRoomStorage implements RoomStorageInterface
{
    private $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function getAllRoomData() {
        $statement = $this->pdo->prepare('SELECT * FROM room');
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getOneRoomData($id) {
        $statement = $this->pdo->prepare('SELECT * FROM room WHERE id = :id');
        $statement->execute(array('id' => $id));
        $shipArray = $statement->fetch(PDO::FETCH_ASSOC);

        if (!$shipArray) return null;
        return $shipArray;
    }

    /**
     * @return PDO
     */
    public function getPdo()
    {
        return $this->pdo;
    }

}