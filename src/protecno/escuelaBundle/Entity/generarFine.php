<?php

namespace protecno\escuelaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * generarFine
 */
class generarFine
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $bellasNombre;

    /**
     * @var string
     */
    private $diasDespuesDeLaFechaDeVencimiento;

    /**
     * @var integer
     */
    private $bellasCantidad;

    /**
     * @var boolean
     */
    private $modo;


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
     * Set bellasNombre
     *
     * @param string $bellasNombre
     * @return generarFine
     */
    public function setBellasNombre($bellasNombre)
    {
        $this->bellasNombre = $bellasNombre;
    
        return $this;
    }

    /**
     * Get bellasNombre
     *
     * @return string 
     */
    public function getBellasNombre()
    {
        return $this->bellasNombre;
    }

    /**
     * Set diasDespuesDeLaFechaDeVencimiento
     *
     * @param string $diasDespuesDeLaFechaDeVencimiento
     * @return generarFine
     */
    public function setDiasDespuesDeLaFechaDeVencimiento($diasDespuesDeLaFechaDeVencimiento)
    {
        $this->diasDespuesDeLaFechaDeVencimiento = $diasDespuesDeLaFechaDeVencimiento;
    
        return $this;
    }

    /**
     * Get diasDespuesDeLaFechaDeVencimiento
     *
     * @return string 
     */
    public function getDiasDespuesDeLaFechaDeVencimiento()
    {
        return $this->diasDespuesDeLaFechaDeVencimiento;
    }

    /**
     * Set bellasCantidad
     *
     * @param integer $bellasCantidad
     * @return generarFine
     */
    public function setBellasCantidad($bellasCantidad)
    {
        $this->bellasCantidad = $bellasCantidad;
    
        return $this;
    }

    /**
     * Get bellasCantidad
     *
     * @return integer 
     */
    public function getBellasCantidad()
    {
        return $this->bellasCantidad;
    }

    /**
     * Set modo
     *
     * @param boolean $modo
     * @return generarFine
     */
    public function setModo($modo)
    {
        $this->modo = $modo;
    
        return $this;
    }

    /**
     * Get modo
     *
     * @return boolean 
     */
    public function getModo()
    {
        return $this->modo;
    }
}