<?php

/**
 * Created by PhpStorm.
 * User: samundra
 * Date: 6/15/2016
 * Time: 12:06 AM
 */
interface FamilyInterface
{

    /**Family have name
     * @return mixed
     */
    public function getName();

    /**
     * Family have a gender
     *
     * @return mixed
     */
    public function getGender();

    /**
     * Family has Relation
     * 
     * @return mixed
     */
    public function getRelation();
}
