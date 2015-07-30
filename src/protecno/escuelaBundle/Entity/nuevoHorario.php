<?php

namespace protecno\escuelaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * nuevoHorario
 */
class nuevoHorario
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
    private $fechaFinal;


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
     * @return nuevoHorario
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
     * Set fechaFinal
     *
     * @param \DateTime $fechaFinal
     * @return nuevoHorario
     */
    public function setFechaFinal($fechaFinal)
    {
        $this->fechaFinal = $fechaFinal;
    
        return $this;
    }

    /**
     * Get fechaFinal
     *
     * @return \DateTime 
     */
    public function getFechaFinal()
    {
        return $this->fechaFinal;
    }
}