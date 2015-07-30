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
     * @return cuotaColeccion
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
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $anadirEmpleadoCategoria;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->anadirEmpleadoCategoria = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add anadirEmpleadoCategoria
     *
     * @param \protecno\escuelaBundle\Entity\anadirEmpleadoCategoria $anadirEmpleadoCategoria
     * @return cuotaColeccion
     */
    public function addAnadirEmpleadoCategoria(\protecno\escuelaBundle\Entity\anadirEmpleadoCategoria $anadirEmpleadoCategoria)
    {
        $this->anadirEmpleadoCategoria[] = $anadirEmpleadoCategoria;
    
        return $this;
    }

    /**
     * Remove anadirEmpleadoCategoria
     *
     * @param \protecno\escuelaBundle\Entity\anadirEmpleadoCategoria $anadirEmpleadoCategoria
     */
    public function removeAnadirEmpleadoCategoria(\protecno\escuelaBundle\Entity\anadirEmpleadoCategoria $anadirEmpleadoCategoria)
    {
        $this->anadirEmpleadoCategoria->removeElement($anadirEmpleadoCategoria);
    }

    /**
     * Get anadirEmpleadoCategoria
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAnadirEmpleadoCategoria()
    {
        return $this->anadirEmpleadoCategoria;
    }
}