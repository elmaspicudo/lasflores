<?php

namespace protecno\escuelaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * crearCarpetaEspecificaDelUsuario
 */
class crearCarpetaEspecificaDelUsuario
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nombreDeLaCarpeta;

    /**
     * @var boolean
     */
    private $categoria;

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
     * Set nombreDeLaCarpeta
     *
     * @param string $nombreDeLaCarpeta
     * @return crearCarpetaEspecificaDelUsuario
     */
    public function setNombreDeLaCarpeta($nombreDeLaCarpeta)
    {
        $this->nombreDeLaCarpeta = $nombreDeLaCarpeta;
    
        return $this;
    }

    /**
     * Get nombreDeLaCarpeta
     *
     * @return string 
     */
    public function getNombreDeLaCarpeta()
    {
        return $this->nombreDeLaCarpeta;
    }

    /**
     * Set categoria
     *
     * @param boolean $categoria
     * @return crearCarpetaEspecificaDelUsuario
     */
    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;
    
        return $this;
    }

    /**
     * Get categoria
     *
     * @return boolean 
     */
    public function getCategoria()
    {
        return $this->categoria;
    }

    /**
     * Set estado
     *
     * @param boolean $estado
     * @return crearCarpetaEspecificaDelUsuario
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
}