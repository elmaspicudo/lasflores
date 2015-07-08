<?php

namespace protecno\escuelaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * compararCon
 */
class compararCon
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
    private $selccionarFechaDeFinalizacion;


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
     * @return compararCon
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
     * Set selccionarFechaDeFinalizacion
     *
     * @param \DateTime $selccionarFechaDeFinalizacion
     * @return compararCon
     */
    public function setSelccionarFechaDeFinalizacion($selccionarFechaDeFinalizacion)
    {
        $this->selccionarFechaDeFinalizacion = $selccionarFechaDeFinalizacion;
    
        return $this;
    }

    /**
     * Get selccionarFechaDeFinalizacion
     *
     * @return \DateTime 
     */
    public function getSelccionarFechaDeFinalizacion()
    {
        return $this->selccionarFechaDeFinalizacion;
    }
}