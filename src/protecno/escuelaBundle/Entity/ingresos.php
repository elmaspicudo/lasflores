<?php

namespace protecno\escuelaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ingresos
 */
class ingresos
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $fechaDeInicio;

    /**
     * @var \DateTime
     */
    private $fechaDeFinalizacion;


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
     * Set fechaDeInicio
     *
     * @param \DateTime $fechaDeInicio
     * @return ingresos
     */
    public function setFechaDeInicio($fechaDeInicio)
    {
        $this->fechaDeInicio = $fechaDeInicio;
    
        return $this;
    }

    /**
     * Get fechaDeInicio
     *
     * @return \DateTime 
     */
    public function getFechaDeInicio()
    {
        return $this->fechaDeInicio;
    }

    /**
     * Set fechaDeFinalizacion
     *
     * @param \DateTime $fechaDeFinalizacion
     * @return ingresos
     */
    public function setFechaDeFinalizacion($fechaDeFinalizacion)
    {
        $this->fechaDeFinalizacion = $fechaDeFinalizacion;
    
        return $this;
    }

    /**
     * Get fechaDeFinalizacion
     *
     * @return \DateTime 
     */
    public function getFechaDeFinalizacion()
    {
        return $this->fechaDeFinalizacion;
    }
}