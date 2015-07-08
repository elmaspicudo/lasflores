<?php

namespace protecno\escuelaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * anadirAdmisionDetallesAdicionales
 */
class anadirAdmisionDetallesAdicionales
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
     * @var boolean
     */
    private $esObligatorio;


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
     * @return anadirAdmisionDetallesAdicionales
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
     * @return anadirAdmisionDetallesAdicionales
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
     * Set esObligatorio
     *
     * @param boolean $esObligatorio
     * @return anadirAdmisionDetallesAdicionales
     */
    public function setEsObligatorio($esObligatorio)
    {
        $this->esObligatorio = $esObligatorio;
    
        return $this;
    }

    /**
     * Get esObligatorio
     *
     * @return boolean 
     */
    public function getEsObligatorio()
    {
        return $this->esObligatorio;
    }
}