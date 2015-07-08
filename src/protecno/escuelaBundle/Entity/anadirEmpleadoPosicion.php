<?php

namespace protecno\escuelaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * anadirEmpleadoPosicion
 */
class anadirEmpleadoPosicion
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nombre;

    /**
     * @var boolean
     */
    private $estado;


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
     * Set nombre
     *
     * @param string $nombre
     * @return anadirEmpleadoPosicion
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    
        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set estado
     *
     * @param boolean $estado
     * @return anadirEmpleadoPosicion
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;
    
        return $this;
    }

    /**
     * Get estado
     *
     * @return boolean 
     */
    public function getEstado()
    {
        return $this->estado;
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
     * @return anadirEmpleadoPosicion
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