<?php

namespace protecno\escuelaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * nuevoGrupoPin
 */
class nuevoGrupoPin
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $validaDesde;

    /**
     * @var \DateTime
     */
    private $validoHasta;

    /**
     * @var string
     */
    private $nombre;

    /**
     * @var string
     */
    private $numeroDePines;

    /**
     * @var boolean
     */
    private $estaActivo;


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
     * Set validaDesde
     *
     * @param \DateTime $validaDesde
     * @return nuevoGrupoPin
     */
    public function setValidaDesde($validaDesde)
    {
        $this->validaDesde = $validaDesde;
    
        return $this;
    }

    /**
     * Get validaDesde
     *
     * @return \DateTime 
     */
    public function getValidaDesde()
    {
        return $this->validaDesde;
    }

    /**
     * Set validoHasta
     *
     * @param \DateTime $validoHasta
     * @return nuevoGrupoPin
     */
    public function setValidoHasta($validoHasta)
    {
        $this->validoHasta = $validoHasta;
    
        return $this;
    }

    /**
     * Get validoHasta
     *
     * @return \DateTime 
     */
    public function getValidoHasta()
    {
        return $this->validoHasta;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return nuevoGrupoPin
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
     * Set numeroDePines
     *
     * @param string $numeroDePines
     * @return nuevoGrupoPin
     */
    public function setNumeroDePines($numeroDePines)
    {
        $this->numeroDePines = $numeroDePines;
    
        return $this;
    }

    /**
     * Get numeroDePines
     *
     * @return string 
     */
    public function getNumeroDePines()
    {
        return $this->numeroDePines;
    }

    /**
     * Set estaActivo
     *
     * @param boolean $estaActivo
     * @return nuevoGrupoPin
     */
    public function setEstaActivo($estaActivo)
    {
        $this->estaActivo = $estaActivo;
    
        return $this;
    }

    /**
     * Get estaActivo
     *
     * @return boolean 
     */
    public function getEstaActivo()
    {
        return $this->estaActivo;
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
     * @return nuevoGrupoPin
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