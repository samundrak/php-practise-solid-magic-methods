<?php
/**
 * Created by PhpStorm.
 * User: samundra
 * Date: 6/15/2016
 * Time: 12:14 AM
 */
class Home
{

    protected $address;
    protected $floors;
    protected $members;
    protected $relatives;

    public function __construct()
    {
        $this->members = [];
        $this->relatives = [];
    }


    public function addMember($members)
    {
        $this->members[] = $members;
    }

    public function addRelative($relatives)
    {
        $this->relatives[] = $relatives;
    }

    /**
     * @return mixed
     */
    public function getRelatives()
    {
        return $this->relatives;
    }

    /**
     * @param mixed $relatives
     */
    public function setRelatives($relatives)
    {
        $this->relatives = $relatives;
    }


    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * @return mixed
     */
    public function getFloors()
    {
        return $this->floors;
    }

    /**
     * @param mixed $floors
     */
    public function setFloors($floors)
    {
        $this->floors = $floors;
    }

    /**
     * @return mixed
     */
    public function getMembers()
    {
        return $this->members;
    }

    /**
     * @param mixed $members
     */
    public function setMembers($members)
    {
        $this->members = $members;
    }


}
