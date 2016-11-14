<?php

/**
 * Created by PhpStorm.
 * User: brandenkaestner
 * Date: 11/7/16
 * Time: 9:27 PM
 */
class Room
{
    private $roomNum;
    private $building;
    private $hasProjector;
    private $lampHours;

    /**
     * Room constructor.
     * @param String $b
     * @param int $r
     * @param bool $p
     */
    public function __construct(String $b, int $r, bool $p)
    {
        $this->building = $b;
        $this->roomNum = $r;
        $this->hasProjector = $p;
        if ($this->hasProjector == false) {
            $this->lampHours = 0;
        }
    }

    /**
     * @return int
     */
    public function getRoomNum(): int
    {
        return $this->roomNum;
    }

    /**
     * @param int $roomNum
     */
    public function setRoomNum(int $roomNum)
    {
        $this->roomNum = $roomNum;
    }

    /**
     * @return String
     */
    public function getBuilding(): String
    {
        return $this->building;
    }

    /**
     * @param String $building
     */
    public function setBuilding(String $building)
    {
        $this->building = $building;
    }

    /**
     * @return boolean
     */
    public function isHasProjector(): bool
    {
        return $this->hasProjector;
    }

    /**
     * @param boolean $hasProjector
     */
    public function setHasProjector(bool $hasProjector)
    {
        $this->hasProjector = $hasProjector;
    }

    /**
     * @return int
     */
    public function getLampHours(): int
    {
        return $this->lampHours;
    }

    /**
     * @param int $lampHours
     */
    public function setLampHours(int $lampHours)
    {
        $this->lampHours = $lampHours;
    }
}