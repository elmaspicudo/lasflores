<?php

namespace protecno\escuelaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * crearFeeColeccion
 */
class crearFeeColeccion
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $cuotaNombreDeLaColeccion;

    /**
     * @var \DateTime
     */
    private $fechaDeInicio;

    /**
     * @var \DateTime
     */
    private $fechaFinal;

    /**
     * @var \DateTime
     */
    private $fechaDeVencimiento;


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
     * Set cuotaNombreDeLaColeccion
     *
     * @param string $cuotaNombreDeLaColeccion
     * @return crearFeeColeccion
     */
    public function setCuotaNombreDeLaColeccion($cuotaNombreDeLaColeccion)
    {
        $this->cuotaNombreDeLaColeccion = $cuotaNombreDeLaColeccion;
    
        return $this;
    }

    /**
     * Get cuotaNombreDeLaColeccion
     *
     * @return string 
     */
    public function getCuotaNombreDeLaColeccion()
    {
        return $this->cuotaNombreDeLaColeccion;
    }

    /**
     * Set fechaDeInicio
     *
     * @param \DateTime $fechaDeInicio
     * @return crearFeeColeccion
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
     * @return crearFeeColeccion
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

    /**
     * Set fechaDeVencimiento
     *
     * @param \DateTime $fechaDeVencimiento
     * @return crearFeeColeccion
     */
    public function setFechaDeVencimiento($fechaDeVencimiento)
    {
        $this->fechaDeVencimiento = $fechaDeVencimiento;
    
        return $this;
    }

    /**
     * Get fechaDeVencimiento
     *
     * @return \DateTime 
     */
    public function getFechaDeVencimiento()
    {
        return $this->fechaDeVencimiento;
    }
}