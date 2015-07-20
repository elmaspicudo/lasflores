<?php

namespace protecno\escuelaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * carpeta
 */
class carpeta
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nombreDeLaCarpeta;


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
     * Set nombreDeLaCarpeta
     *
     * @param string $nombreDeLaCarpeta
     * @return carpeta
     */
    public function setNombreDeLaCarpeta($nombreDeLaCarpeta)
    {
        $this->nombreDeLaCarpeta = $nombreDeLaCarpeta;
    
        return $this;
    }

    /**
     * Get nombreDeLaCarpeta
     *
     * @return string 
     */
    public function getNombreDeLaCarpeta()
    {
        return $this->nombreDeLaCarpeta;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $lotes;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->lotes = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add lotes
     *
     * @param \protecno\escuelaBundle\Entity\lotes $lotes
     * @return carpeta
     */
    public function addLote(\protecno\escuelaBundle\Entity\lotes $lotes)
    {
        $this->lotes[] = $lotes;
    
        return $this;
    }

    /**
     * Remove lotes
     *
     * @param \protecno\escuelaBundle\Entity\lotes $lotes
     */
    public function removeLote(\protecno\escuelaBundle\Entity\lotes $lotes)
    {
        $this->lotes->removeElement($lotes);
    }

    /**
     * Get lotes
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getLotes()
    {
        return $this->lotes;
    }
}