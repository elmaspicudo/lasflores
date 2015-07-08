<?php

namespace protecno\escuelaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * crearNuevaEncuesta
 */
class crearNuevaEncuesta
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $titulo;

    /**
     * @var string
     */
    private $descripcion;

    /**
     * @var boolean
     */
    private $permitrirRepuestas;


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
     * Set titulo
     *
     * @param string $titulo
     * @return crearNuevaEncuesta
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    
        return $this;
    }

    /**
     * Get titulo
     *
     * @return string 
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return crearNuevaEncuesta
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
     * Set permitrirRepuestas
     *
     * @param boolean $permitrirRepuestas
     * @return crearNuevaEncuesta
     */
    public function setPermitrirRepuestas($permitrirRepuestas)
    {
        $this->permitrirRepuestas = $permitrirRepuestas;
    
        return $this;
    }

    /**
     * Get permitrirRepuestas
     *
     * @return boolean 
     */
    public function getPermitrirRepuestas()
    {
        return $this->permitrirRepuestas;
    }
}