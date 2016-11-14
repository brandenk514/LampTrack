<?php

/**
 * Created by PhpStorm.
 * User: brandenkaestner
 * Date: 11/7/16
 * Time: 10:01 PM
 */
class RoomLoader
{
    private $roomStorage;

    public function __construct(RoomStorageInterface $r)
    {
        $this->roomStorage = $r;
    }

    public function getRooms()
    {
        $rooms = [];
        $roomData = $this->queryForRoomData();

        foreach ($roomData as $r) {
            $rooms = $this->createRoomFromData($r);
        }

        return $rooms;
    }

    public function findOnebyId($id)
    {
        $roomArray = $this->roomStorage->getOneRoomData($id);
        return $this->createRoomFromData($roomArray);
    }

    private function createRoomFromData(array $roomData)
    {
        $room = new Room();

        return $room;
    }

    private function queryForRoomData()
    {
        return $this->roomStorage->getAllRoomData();
    }
}