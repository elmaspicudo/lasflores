<?php

namespace protecno\escuelaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * cuotaColeccion
 */
class cuotaColeccion
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
     * @var integer
     */
    private $diasRecurrencia;

    /**
     * @var integer
     */
    private $diaproximo;

    /**
     * @var string
     */
    private $monto;

    /**
     * @var integer
     */
    private $tipo;
   
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
     * @return cuotaColeccion
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
     * @return cuotaColeccion
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
     * @return cuotaColeccion
     */
    public function setFechaFinal($fechaFinal)
    {
        $this->fechaFinal = $fechaFinal;
    
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
     * Set diasRecurrencia
     *
     * @param integer $diasRecurrencia
     * @return cuotaColeccion
     */
    public function setDiasRecurrencia($diasRecurrencia)
    {
        $this->diasRecurrencia = $diasRecurrencia;
    
        return $this;
    }

    /**
     * Get diasRecurrencia
     *
     * @return integer 
     */
    public function getDiasRecurrencia()
    {
        return $this->diasRecurrencia;
    }

    /**
     * Set diaproximo
     *
     * @param integer $diaproximo
     * @return cuotaColeccion
     */
    public function setDiaproximo($diaproximo)
    {
        $this->diaproximo = $diaproximo;
    
        return $this;
    }

    /**
     * Get diaproximo
     *
     * @return integer 
     */
    public function getDiaproximo()
    {
        return $this->diaproximo;
    }

    /**
     * Set monto
     *
     * @param string $monto
     * @return cuotaColeccion
     */
    public function setMonto($monto)
    {
        $this->monto = $monto;
    
        return $this;
    }

    /**
     * Get monto
     *
     * @return string 
     */
    public function getMonto()
    {
        return $this->monto;
    }

    /**
     * Set tipo
     *
     * @param integer $tipo
     * @return cuotaColeccion
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    
        return $this;
    }

    /**
     * Get tipo
     *
     * @return integer 
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    
    public function __toString()
    {
        return $this->cuotaNombreDeLaColeccion;
    }
    
}