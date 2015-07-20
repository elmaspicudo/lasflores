<?php

namespace protecno\escuelaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * curso
 */
class curso
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nombreDelCurso;

    /**
     * @var string
     */
    private $nombreDeLaSeccion;

    /**
     * @var boolean
     */
    private $activarLaSeleccionElectiva;


    /**
     * Get id
     *
     * @return integer 
     */
    public function __toString()
    {
        return $this->nombreDelCurso;
    }

    /**
     * Set nombreDelCurso
     *
     * @param string $nombreDelCurso
     * @return curso
     */
    public function setNombreDelCurso($nombreDelCurso)
    {
        $this->nombreDelCurso = $nombreDelCurso;
    
        return $this;
    }

    /**
     * Get nombreDelCurso
     *
     * @return string 
     */
    public function getNombreDelCurso()
    {
        return $this->nombreDelCurso;
    }

    /**
     * Set nombreDeLaSeccion
     *
     * @param string $nombreDeLaSeccion
     * @return curso
     */
    public function setNombreDeLaSeccion($nombreDeLaSeccion)
    {
        $this->nombreDeLaSeccion = $nombreDeLaSeccion;
    
        return $this;
    }

    /**
     * Get nombreDeLaSeccion
     *
     * @return string 
     */
    public function getNombreDeLaSeccion()
    {
        return $this->nombreDeLaSeccion;
    }

    /**
     * Set activarLaSeleccionElectiva
     *
     * @param boolean $activarLaSeleccionElectiva
     * @return curso
     */
    public function setActivarLaSeleccionElectiva($activarLaSeleccionElectiva)
    {
        $this->activarLaSeleccionElectiva = $activarLaSeleccionElectiva;
    
        return $this;
    }

    /**
     * Get activarLaSeleccionElectiva
     *
     * @return boolean 
     */
    public function getActivarLaSeleccionElectiva()
    {
        return $this->activarLaSeleccionElectiva;
    }

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
     * @var \protecno\escuelaBundle\Entity\lotes
     */
    private $lotes;


    /**
     * Set lotes
     *
     * @param \protecno\escuelaBundle\Entity\lotes $lotes
     * @return curso
     */
    public function setLotes(\protecno\escuelaBundle\Entity\lotes $lotes = null)
    {
        $this->lotes = $lotes;
    
        return $this;
    }

    /**
     * Get lotes
     *
     * @return \protecno\escuelaBundle\Entity\lotes 
     */
    public function getLotes()
    {
        return $this->lotes;
    }
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
     * @return curso
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
}