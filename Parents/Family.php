<?php

/**
 * Created by PhpStorm.
 * User: samundra
 * Date: 6/15/2016
 * Time: 12:05 AM
 */
require_once 'MoreDetails.php';

abstract class Family implements FamilyInterface
{
    private $gender;
    private $relation;
    private $name;

    /**
     * Creates and returns Family Members
     * @param $name
     * @param $gender
     * @param $relation
     * @return $this
     */
    public function make($name, $gender, $relation)
    {
        $this->setGender($gender);
        $this->setName($name);
        $this->setRelation($relation);
        return $this;
    }

    /**
     * @return mixed
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * @param mixed $gender
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
    }

    /**
     * @return mixed
     */
    public function getRelation()
    {
        return $this->relation;
    }

    /**
     * @param mixed $relation
     */
    public function setRelation($relation)
    {
        $this->relation = $relation;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    
}
