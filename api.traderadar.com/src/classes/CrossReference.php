<?php
/**
 * file(//src/classes/CrossReference.php)
 * @author: Luciano Murruni //2014-03-27
 */

class CrossReference
{
    /**
    * Property
    */
    
    /**
     * @var int
     */
    protected $id;
    
    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $description;

    /**
     * @var DateTime
     */
    protected $last_update;

    /**
     * @var [type]
     */
    protected $user_id;



    /**
    * Lista delle funzioni GET / SET
    */
    public function getId()
    {
        return $this->id;
    }

    /* NAME */ 
    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    /* DESCRIPTION */ 
    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    
    /* LAST UPDATE DATE */ 
    public function getLastUpdate()
    {
        return $this->last_update;
    }

    public function setLastUpdate(DateTime $last_update)
    {
        $this->last_update = $last_update;
    }

    /* LAST UPDATE DATE */ 
    public function getUserID()
    {
        return $this->user_id;
    }

    public function setUserID($user_id)
    {
        $this->user_id = $user_id;
    }

}