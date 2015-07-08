<?php

namespace protecno\escuelaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * anadirDepartamentoEmpleo
 */
class anadirDepartamentoEmpleo
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
    private $codigoDeDepartamento;

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
     * @return anadirDepartamentoEmpleo
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
     * Set codigoDeDepartamento
     *
     * @param string $codigoDeDepartamento
     * @return anadirDepartamentoEmpleo
     */
    public function setCodigoDeDepartamento($codigoDeDepartamento)
    {
        $this->codigoDeDepartamento = $codigoDeDepartamento;
    
        return $this;
    }

    /**
     * Get codigoDeDepartamento
     *
     * @return string 
     */
    public function getCodigoDeDepartamento()
    {
        return $this->codigoDeDepartamento;
    }

    /**
     * Set estado
     *
     * @param boolean $estado
     * @return anadirDepartamentoEmpleo
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