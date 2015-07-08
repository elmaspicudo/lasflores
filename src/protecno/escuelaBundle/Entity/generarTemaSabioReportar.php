<?php

namespace protecno\escuelaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * generarTemaSabioReportar
 */
class generarTemaSabioReportar
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $desde;

    /**
     * @var \DateTime
     */
    private $hasta;

    /**
     * @var boolean
     */
    private $estatusDePago;


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
     * Set desde
     *
     * @param \DateTime $desde
     * @return generarTemaSabioReportar
     */
    public function setDesde($desde)
    {
        $this->desde = $desde;
    
        return $this;
    }

    /**
     * Get desde
     *
     * @return \DateTime 
     */
    public function getDesde()
    {
        return $this->desde;
    }

    /**
     * Set hasta
     *
     * @param \DateTime $hasta
     * @return generarTemaSabioReportar
     */
    public function setHasta($hasta)
    {
        $this->hasta = $hasta;
    
        return $this;
    }

    /**
     * Get hasta
     *
     * @return \DateTime 
     */
    public function getHasta()
    {
        return $this->hasta;
    }

    /**
     * Set estatusDePago
     *
     * @param boolean $estatusDePago
     * @return generarTemaSabioReportar
     */
    public function setEstatusDePago($estatusDePago)
    {
        $this->estatusDePago = $estatusDePago;
    
        return $this;
    }

    /**
     * Get estatusDePago
     *
     * @return boolean 
     */
    public function getEstatusDePago()
    {
        return $this->estatusDePago;
    }
}