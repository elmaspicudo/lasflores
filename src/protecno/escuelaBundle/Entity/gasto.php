<?php

namespace protecno\escuelaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * gasto
 */
class gasto
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $seleccionarFechaDeInicio;

    /**
     * @var \DateTime
     */
    private $seleccionarFechaDeFinalizacion;


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
     * Set seleccionarFechaDeInicio
     *
     * @param \DateTime $seleccionarFechaDeInicio
     * @return gasto
     */
    public function setSeleccionarFechaDeInicio($seleccionarFechaDeInicio)
    {
        $this->seleccionarFechaDeInicio = $seleccionarFechaDeInicio;
    
        return $this;
    }

    /**
     * Get seleccionarFechaDeInicio
     *
     * @return \DateTime 
     */
    public function getSeleccionarFechaDeInicio()
    {
        return $this->seleccionarFechaDeInicio;
    }

    /**
     * Set seleccionarFechaDeFinalizacion
     *
     * @param \DateTime $seleccionarFechaDeFinalizacion
     * @return gasto
     */
    public function setSeleccionarFechaDeFinalizacion($seleccionarFechaDeFinalizacion)
    {
        $this->seleccionarFechaDeFinalizacion = $seleccionarFechaDeFinalizacion;
    
        return $this;
    }

    /**
     * Get seleccionarFechaDeFinalizacion
     *
     * @return \DateTime 
     */
    public function getSeleccionarFechaDeFinalizacion()
    {
        return $this->seleccionarFechaDeFinalizacion;
    }
}