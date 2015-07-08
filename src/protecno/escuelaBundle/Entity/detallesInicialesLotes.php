<?php

namespace protecno\escuelaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * detallesInicialesLotes
 */
class detallesInicialesLotes
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nombreDelLote;

    /**
     * @var \DateTime
     */
    private $fechaDeInicio;

    /**
     * @var \DateTime
     */
    private $fachaFinal;


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
     * Set nombreDelLote
     *
     * @param string $nombreDelLote
     * @return detallesInicialesLotes
     */
    public function setNombreDelLote($nombreDelLote)
    {
        $this->nombreDelLote = $nombreDelLote;
    
        return $this;
    }

    /**
     * Get nombreDelLote
     *
     * @return string 
     */
    public function getNombreDelLote()
    {
        return $this->nombreDelLote;
    }

    /**
     * Set fechaDeInicio
     *
     * @param \DateTime $fechaDeInicio
     * @return detallesInicialesLotes
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
     * Set fachaFinal
     *
     * @param \DateTime $fachaFinal
     * @return detallesInicialesLotes
     */
    public function setFachaFinal($fachaFinal)
    {
        $this->fachaFinal = $fachaFinal;
    
        return $this;
    }

    /**
     * Get fachaFinal
     *
     * @return \DateTime 
     */
    public function getFachaFinal()
    {
        return $this->fachaFinal;
    }
}