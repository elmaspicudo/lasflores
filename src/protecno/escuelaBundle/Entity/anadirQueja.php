<?php

namespace protecno\escuelaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * anadirQueja
 */
class anadirQueja
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $quejaNo;

    /**
     * @var string
     */
    private $titulo;

    /**
     * @var string
     */
    private $descripcion;

    /**
     * @var \DateTime
     */
    private $juicioFecha;

    /**
     * @var string
     */
    private $motivoDeLaQueja;

    /**
     * @var string
     */
    private $demanda;

    /**
     * @var string
     */
    private $jurado;

    /**
     * @var string
     */
    private $autoridadesResponsables;


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
     * Set quejaNo
     *
     * @param string $quejaNo
     * @return anadirQueja
     */
    public function setQuejaNo($quejaNo)
    {
        $this->quejaNo = $quejaNo;
    
        return $this;
    }

    /**
     * Get quejaNo
     *
     * @return string 
     */
    public function getQuejaNo()
    {
        return $this->quejaNo;
    }

    /**
     * Set titulo
     *
     * @param string $titulo
     * @return anadirQueja
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
     * @return anadirQueja
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
     * Set juicioFecha
     *
     * @param \DateTime $juicioFecha
     * @return anadirQueja
     */
    public function setJuicioFecha($juicioFecha)
    {
        $this->juicioFecha = $juicioFecha;
    
        return $this;
    }

    /**
     * Get juicioFecha
     *
     * @return \DateTime 
     */
    public function getJuicioFecha()
    {
        return $this->juicioFecha;
    }

    /**
     * Set motivoDeLaQueja
     *
     * @param string $motivoDeLaQueja
     * @return anadirQueja
     */
    public function setMotivoDeLaQueja($motivoDeLaQueja)
    {
        $this->motivoDeLaQueja = $motivoDeLaQueja;
    
        return $this;
    }

    /**
     * Get motivoDeLaQueja
     *
     * @return string 
     */
    public function getMotivoDeLaQueja()
    {
        return $this->motivoDeLaQueja;
    }

    /**
     * Set demanda
     *
     * @param string $demanda
     * @return anadirQueja
     */
    public function setDemanda($demanda)
    {
        $this->demanda = $demanda;
    
        return $this;
    }

    /**
     * Get demanda
     *
     * @return string 
     */
    public function getDemanda()
    {
        return $this->demanda;
    }

    /**
     * Set jurado
     *
     * @param string $jurado
     * @return anadirQueja
     */
    public function setJurado($jurado)
    {
        $this->jurado = $jurado;
    
        return $this;
    }

    /**
     * Get jurado
     *
     * @return string 
     */
    public function getJurado()
    {
        return $this->jurado;
    }

    /**
     * Set autoridadesResponsables
     *
     * @param string $autoridadesResponsables
     * @return anadirQueja
     */
    public function setAutoridadesResponsables($autoridadesResponsables)
    {
        $this->autoridadesResponsables = $autoridadesResponsables;
    
        return $this;
    }

    /**
     * Get autoridadesResponsables
     *
     * @return string 
     */
    public function getAutoridadesResponsables()
    {
        return $this->autoridadesResponsables;
    }
}