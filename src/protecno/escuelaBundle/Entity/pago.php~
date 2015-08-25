<?php

namespace protecno\escuelaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * pago
 */
class pago
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $fechaDePago;

    /**
     * @var integer
     */
    private $estatus;

    /**
     * @var integer
     */
    private $descuento;

    /**
     * @var \protecno\escuelaBundle\Entity\alumno
     */
    private $alumno;

    /**
     * @var \protecno\escuelaBundle\Entity\cuotaColeccion
     */
    private $cuota;

    /**
     * @var \protecno\escuelaBundle\Entity\archivo
     */
    private $archivo;


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
     * Set fechaDePago
     *
     * @param \DateTime $fechaDePago
     * @return pago
     */
    public function setFechaDePago($fechaDePago)
    {
        $this->fechaDePago = $fechaDePago;
    
        return $this;
    }

    /**
     * Get fechaDePago
     *
     * @return \DateTime 
     */
    public function getFechaDePago()
    {
        return $this->fechaDePago;
    }

    /**
     * Set estatus
     *
     * @param integer $estatus
     * @return pago
     */
    public function setEstatus($estatus)
    {
        $this->estatus = $estatus;
    
        return $this;
    }

    /**
     * Get estatus
     *
     * @return integer 
     */
    public function getEstatus()
    {
        return $this->estatus;
    }

    /**
     * Set descuento
     *
     * @param integer $descuento
     * @return pago
     */
    public function setDescuento($descuento)
    {
        $this->descuento = $descuento;
    
        return $this;
    }

    /**
     * Get descuento
     *
     * @return integer 
     */
    public function getDescuento()
    {
        return $this->descuento;
    }

    /**
     * Set alumno
     *
     * @param \protecno\escuelaBundle\Entity\alumno $alumno
     * @return pago
     */
    public function setAlumno(\protecno\escuelaBundle\Entity\alumno $alumno = null)
    {
        $this->alumno = $alumno;
    
        return $this;
    }

    /**
     * Get alumno
     *
     * @return \protecno\escuelaBundle\Entity\alumno 
     */
    public function getAlumno()
    {
        return $this->alumno;
    }

    /**
     * Set cuota
     *
     * @param \protecno\escuelaBundle\Entity\cuotaColeccion $cuota
     * @return pago
     */
    public function setCuota(\protecno\escuelaBundle\Entity\cuotaColeccion $cuota = null)
    {
        $this->cuota = $cuota;
    
        return $this;
    }

    /**
     * Get cuota
     *
     * @return \protecno\escuelaBundle\Entity\cuotaColeccion 
     */
    public function getCuota()
    {
        return $this->cuota;
    }

    /**
     * Set archivo
     *
     * @param \protecno\escuelaBundle\Entity\archivo $archivo
     * @return pago
     */
    public function setArchivo(\protecno\escuelaBundle\Entity\archivo $archivo = null)
    {
        $this->archivo = $archivo;
    
        return $this;
    }

    /**
     * Get archivo
     *
     * @return \protecno\escuelaBundle\Entity\archivo 
     */
    public function getArchivo()
    {
        return $this->archivo;
    }
    /**
     * @var string
     */
    private $monto;


    /**
     * Set monto
     *
     * @param string $monto
     * @return pago
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
     * @var string
     */
    private $montoDescuento;


    /**
     * Set montoDescuento
     *
     * @param string $montoDescuento
     * @return pago
     */
    public function setMontoDescuento($montoDescuento)
    {
        $this->montoDescuento = $montoDescuento;
    
        return $this;
    }

    /**
     * Get montoDescuento
     *
     * @return string 
     */
    public function getMontoDescuento()
    {
        return $this->montoDescuento;
    }
}