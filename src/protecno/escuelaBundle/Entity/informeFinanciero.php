<?php

namespace protecno\escuelaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * informeFinanciero
 */
class informeFinanciero
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
     * @var \DateTime
     */
    private $fechaDeInicio;

    /**
     * @var \DateTime
     */
    private $fechaDeFinalizacion;


    /**
     * Set fechaDeInicio
     *
     * @param \DateTime $fechaDeInicio
     * @return informeFinanciero
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
     * @return informeFinanciero
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