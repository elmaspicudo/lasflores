<?php

namespace protecno\escuelaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * reciboDeSueldoDelEmpleado
 */
class reciboDeSueldoDelEmpleado
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
     * @var \protecno\escuelaBundle\Entity\anadirDepartamentoEmpleo
     */
    private $anadirDepartamentoEmpleo;


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
     * @return reciboDeSueldoDelEmpleado
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
     * Set anadirDepartamentoEmpleo
     *
     * @param \protecno\escuelaBundle\Entity\anadirDepartamentoEmpleo $anadirDepartamentoEmpleo
     * @return reciboDeSueldoDelEmpleado
     */
    public function setAnadirDepartamentoEmpleo(\protecno\escuelaBundle\Entity\anadirDepartamentoEmpleo $anadirDepartamentoEmpleo = null)
    {
        $this->anadirDepartamentoEmpleo = $anadirDepartamentoEmpleo;
    
        return $this;
    }

    /**
     * Get anadirDepartamentoEmpleo
     *
     * @return \protecno\escuelaBundle\Entity\anadirDepartamentoEmpleo 
     */
    public function getAnadirDepartamentoEmpleo()
    {
        return $this->anadirDepartamentoEmpleo;
    }
}