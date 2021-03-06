<?php

namespace protecno\escuelaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * nuevaDonacion
 */
class nuevaDonacion
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $donanteNombre;

    /**
     * @var string
     */
    private $descripcion;

    /**
     * @var \DateTime
     */
    private $fechaDeTransaccion;

    /**
     * @var integer
     */
    private $importe;


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
     * Set donanteNombre
     *
     * @param string $donanteNombre
     * @return nuevaDonacion
     */
    public function setDonanteNombre($donanteNombre)
    {
        $this->donanteNombre = $donanteNombre;
    
        return $this;
    }

    /**
     * Get donanteNombre
     *
     * @return string 
     */
    public function getDonanteNombre()
    {
        return $this->donanteNombre;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return nuevaDonacion
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
     * Set fechaDeTransaccion
     *
     * @param \DateTime $fechaDeTransaccion
     * @return nuevaDonacion
     */
    public function setFechaDeTransaccion($fechaDeTransaccion)
    {
        $this->fechaDeTransaccion = $fechaDeTransaccion;
    
        return $this;
    }

    /**
     * Get fechaDeTransaccion
     *
     * @return \DateTime 
     */
    public function getFechaDeTransaccion()
    {
        return $this->fechaDeTransaccion;
    }

    /**
     * Set importe
     *
     * @param integer $importe
     * @return nuevaDonacion
     */
    public function setImporte($importe)
    {
        $this->importe = $importe;
    
        return $this;
    }

    /**
     * Get importe
     *
     * @return integer 
     */
    public function getImporte()
    {
        return $this->importe;
    }
}