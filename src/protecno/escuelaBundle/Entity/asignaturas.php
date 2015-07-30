<?php

namespace protecno\escuelaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * asignaturas
 */
class asignaturas
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
    private $codigo;

    /**
     * @var integer
     */
    private $clasesPorSemana;

    /**
     * @var string
     */
    private $examen;


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
     * @return asignaturas
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
     * Set codigo
     *
     * @param string $codigo
     * @return asignaturas
     */
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;
    
        return $this;
    }

    /**
     * Get codigo
     *
     * @return string 
     */
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * Set clasesPorSemana
     *
     * @param integer $clasesPorSemana
     * @return asignaturas
     */
    public function setClasesPorSemana($clasesPorSemana)
    {
        $this->clasesPorSemana = $clasesPorSemana;
    
        return $this;
    }

    /**
     * Get clasesPorSemana
     *
     * @return integer 
     */
    public function getClasesPorSemana()
    {
        return $this->clasesPorSemana;
    }

    /**
     * Set examen
     *
     * @param string $examen
     * @return asignaturas
     */
    public function setExamen($examen)
    {
        $this->examen = $examen;
    
        return $this;
    }

    /**
     * Get examen
     *
     * @return string 
     */
    public function getExamen()
    {
        return $this->examen;
    }
}