<?php

/**
 * Created by PhpStorm.
 * User: brandenkaestner
 * Date: 11/7/16
 * Time: 9:44 PM
 */
interface RoomStorageInterface
{
    /**
     * Returns an array of Rooms with the following Keys
     *  * id
     *  * building
     *  * Room Number
     *  * hasProjector
     *  * lampHours
     *
     * @return array
     */
    public function getAllRoomData();

    /**
     * Returns a single room
     *
     * @param $id
     * @return array
     */
    public function getOneRoomData($id);
}