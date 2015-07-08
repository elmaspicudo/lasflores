<?php

namespace protecno\escuelaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * crearInformes
 */
class crearInformes
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $desde;

    /**
     * @var \DateTime
     */
    private $a;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set desde
     *
     * @param \DateTime $desde
     * @return crearInformes
     */
    public function setDesde($desde)
    {
        $this->desde = $desde;
    
        return $this;
    }

    /**
     * Get desde
     *
     * @return \DateTime 
     */
    public function getDesde()
    {
        return $this->desde;
    }

    /**
     * Set a
     *
     * @param \DateTime $a
     * @return crearInformes
     */
    public function setA($a)
    {
        $this->a = $a;
    
        return $this;
    }

    /**
     * Get a
     *
     * @return \DateTime 
     */
    public function getA()
    {
        return $this->a;
    }
}