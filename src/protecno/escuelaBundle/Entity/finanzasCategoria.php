<?php

namespace protecno\escuelaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * finanzasCategoria
 */
class finanzasCategoria
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
    private $descripcion;

    /**
     * @var boolean
     */
    private $esEstoBajoIngreso;


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
     * @return finanzasCategoria
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
     * Set descripcion
     *
     * @param string $descripcion
     * @return finanzasCategoria
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
     * Set esEstoBajoIngreso
     *
     * @param boolean $esEstoBajoIngreso
     * @return finanzasCategoria
     */
    public function setEsEstoBajoIngreso($esEstoBajoIngreso)
    {
        $this->esEstoBajoIngreso = $esEstoBajoIngreso;
    
        return $this;
    }

    /**
     * Get esEstoBajoIngreso
     *
     * @return boolean 
     */
    public function getEsEstoBajoIngreso()
    {
        return $this->esEstoBajoIngreso;
    }
}