<?php

namespace protecno\escuelaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * carpetaEspecificaDelUsuario
 */
class carpetaEspecificaDelUsuario
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
     * @return carpetaEspecificaDelUsuario
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
     * @return carpetaEspecificaDelUsuario
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
     * @return carpetaEspecificaDelUsuario
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
     * @var boolean
     */
    private $estudiante;

    /**
     * @var boolean
     */
    private $empleado;

    /**
     * @var boolean
     */
    private $activo;


    /**
     * Set estudiante
     *
     * @param boolean $estudiante
     * @return carpetaEspecificaDelUsuario
     */
    public function setEstudiante($estudiante)
    {
        $this->estudiante = $estudiante;
    
        return $this;
    }

    /**
     * Get estudiante
     *
     * @return boolean 
     */
    public function getEstudiante()
    {
        return $this->estudiante;
    }

    /**
     * Set empleado
     *
     * @param boolean $empleado
     * @return carpetaEspecificaDelUsuario
     */
    public function setEmpleado($empleado)
    {
        $this->empleado = $empleado;
    
        return $this;
    }

    /**
     * Get empleado
     *
     * @return boolean 
     */
    public function getEmpleado()
    {
        return $this->empleado;
    }

    /**
     * Set activo
     *
     * @param boolean $activo
     * @return carpetaEspecificaDelUsuario
     */
    public function setActivo($activo)
    {
        $this->activo = $activo;
    
        return $this;
    }

    /**
     * Get activo
     *
     * @return boolean 
     */
    public function getActivo()
    {
        return $this->activo;
    }
}