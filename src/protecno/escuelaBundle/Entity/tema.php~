<?php

namespace protecno\escuelaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * tema
 */
class tema
{
    /**
     * @var integer
     */
    private $id;


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
     * @var \Doctrine\Common\Collections\Collection
     */
    private $lotes;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $asignaturas;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->lotes = new \Doctrine\Common\Collections\ArrayCollection();
        $this->asignaturas = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add lotes
     *
     * @param \protecno\escuelaBundle\Entity\lotes $lotes
     * @return tema
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

    /**
     * Add asignaturas
     *
     * @param \protecno\escuelaBundle\Entity\asignaturas $asignaturas
     * @return tema
     */
    public function addAsignatura(\protecno\escuelaBundle\Entity\asignaturas $asignaturas)
    {
        $this->asignaturas[] = $asignaturas;
    
        return $this;
    }

    /**
     * Remove asignaturas
     *
     * @param \protecno\escuelaBundle\Entity\asignaturas $asignaturas
     */
    public function removeAsignatura(\protecno\escuelaBundle\Entity\asignaturas $asignaturas)
    {
        $this->asignaturas->removeElement($asignaturas);
    }

    /**
     * Get asignaturas
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAsignaturas()
    {
        return $this->asignaturas;
    }
}