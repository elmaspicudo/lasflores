<?php

namespace protecno\escuelaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * departamentoRestableser
 */
class departamentoRestableser
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
     * @return departamentoRestableser
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
    private $anadirDepartamentoEmpleo;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->anadirDepartamentoEmpleo = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add anadirDepartamentoEmpleo
     *
     * @param \protecno\escuelaBundle\Entity\anadirDepartamentoEmpleo $anadirDepartamentoEmpleo
     * @return departamentoRestableser
     */
    public function addAnadirDepartamentoEmpleo(\protecno\escuelaBundle\Entity\anadirDepartamentoEmpleo $anadirDepartamentoEmpleo)
    {
        $this->anadirDepartamentoEmpleo[] = $anadirDepartamentoEmpleo;
    
        return $this;
    }

    /**
     * Remove anadirDepartamentoEmpleo
     *
     * @param \protecno\escuelaBundle\Entity\anadirDepartamentoEmpleo $anadirDepartamentoEmpleo
     */
    public function removeAnadirDepartamentoEmpleo(\protecno\escuelaBundle\Entity\anadirDepartamentoEmpleo $anadirDepartamentoEmpleo)
    {
        $this->anadirDepartamentoEmpleo->removeElement($anadirDepartamentoEmpleo);
    }

    /**
     * Get anadirDepartamentoEmpleo
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAnadirDepartamentoEmpleo()
    {
        return $this->anadirDepartamentoEmpleo;
    }
}