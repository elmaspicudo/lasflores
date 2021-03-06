<?php

namespace protecno\escuelaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * nivelesDeClasificacion
 */
class nivelesDeClasificacion
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
     * @var integer
     */
    private $numeroDeSujetos;

    /**
     * @var boolean
     */
    private $considereTodosLosLotesAnteriores;


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
     * @return nivelesDeClasificacion
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
     * @return nivelesDeClasificacion
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

    /**
     * Set numeroDeSujetos
     *
     * @param integer $numeroDeSujetos
     * @return nivelesDeClasificacion
     */
    public function setNumeroDeSujetos($numeroDeSujetos)
    {
        $this->numeroDeSujetos = $numeroDeSujetos;
    
        return $this;
    }

    /**
     * Get numeroDeSujetos
     *
     * @return integer 
     */
    public function getNumeroDeSujetos()
    {
        return $this->numeroDeSujetos;
    }

    /**
     * Set considereTodosLosLotesAnteriores
     *
     * @param boolean $considereTodosLosLotesAnteriores
     * @return nivelesDeClasificacion
     */
    public function setConsidereTodosLosLotesAnteriores($considereTodosLosLotesAnteriores)
    {
        $this->considereTodosLosLotesAnteriores = $considereTodosLosLotesAnteriores;
    
        return $this;
    }

    /**
     * Get considereTodosLosLotesAnteriores
     *
     * @return boolean 
     */
    public function getConsidereTodosLosLotesAnteriores()
    {
        return $this->considereTodosLosLotesAnteriores;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $curso;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->curso = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add curso
     *
     * @param \protecno\escuelaBundle\Entity\curso $curso
     * @return nivelesDeClasificacion
     */
    public function addCurso(\protecno\escuelaBundle\Entity\curso $curso)
    {
        $this->curso[] = $curso;
    
        return $this;
    }

    /**
     * Remove curso
     *
     * @param \protecno\escuelaBundle\Entity\curso $curso
     */
    public function removeCurso(\protecno\escuelaBundle\Entity\curso $curso)
    {
        $this->curso->removeElement($curso);
    }

    /**
     * Get curso
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCurso()
    {
        return $this->curso;
    }
}