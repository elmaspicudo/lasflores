<?php

namespace protecno\escuelaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * designacionDeClase
 */
class designacionDeClase
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
     * @var string
     */
    private $marcas;


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
     * @return designacionDeClase
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
     * Set marcas
     *
     * @param string $marcas
     * @return designacionDeClase
     */
    public function setMarcas($marcas)
    {
        $this->marcas = $marcas;
    
        return $this;
    }

    /**
     * Get marcas
     *
     * @return string 
     */
    public function getMarcas()
    {
        return $this->marcas;
    }
}