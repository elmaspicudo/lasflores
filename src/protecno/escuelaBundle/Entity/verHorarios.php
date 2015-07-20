<?php

namespace protecno\escuelaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * verHorarios
 */
class verHorarios
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $descripcion;


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
     * Set descripcion
     *
     * @param string $descripcion
     * @return verHorarios
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    
        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $nuevoHorario;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $lotes;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->nuevoHorario = new \Doctrine\Common\Collections\ArrayCollection();
        $this->lotes = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add nuevoHorario
     *
     * @param \protecno\escuelaBundle\Entity\nuevoHorario $nuevoHorario
     * @return verHorarios
     */
    public function addNuevoHorario(\protecno\escuelaBundle\Entity\nuevoHorario $nuevoHorario)
    {
        $this->nuevoHorario[] = $nuevoHorario;
    
        return $this;
    }

    /**
     * Remove nuevoHorario
     *
     * @param \protecno\escuelaBundle\Entity\nuevoHorario $nuevoHorario
     */
    public function removeNuevoHorario(\protecno\escuelaBundle\Entity\nuevoHorario $nuevoHorario)
    {
        $this->nuevoHorario->removeElement($nuevoHorario);
    }

    /**
     * Get nuevoHorario
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getNuevoHorario()
    {
        return $this->nuevoHorario;
    }

    /**
     * Add lotes
     *
     * @param \protecno\escuelaBundle\Entity\lotes $lotes
     * @return verHorarios
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