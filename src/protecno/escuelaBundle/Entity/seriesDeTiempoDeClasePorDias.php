<?php

namespace protecno\escuelaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * seriesDeTiempoDeClasePorDias
 */
class seriesDeTiempoDeClasePorDias
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var boolean
     */
    private $domingo;

    /**
     * @var boolean
     */
    private $lunes;

    /**
     * @var boolean
     */
    private $martes;

    /**
     * @var boolean
     */
    private $miercoles;

    /**
     * @var boolean
     */
    private $jueves;

    /**
     * @var boolean
     */
    private $viernes;

    /**
     * @var boolean
     */
    private $sabado;

    /**
     * @var \DateTime
     */
    private $aplicableApartirDel;


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
     * Set domingo
     *
     * @param boolean $domingo
     * @return seriesDeTiempoDeClasePorDias
     */
    public function setDomingo($domingo)
    {
        $this->domingo = $domingo;
    
        return $this;
    }

    /**
     * Get domingo
     *
     * @return boolean 
     */
    public function getDomingo()
    {
        return $this->domingo;
    }

    /**
     * Set lunes
     *
     * @param boolean $lunes
     * @return seriesDeTiempoDeClasePorDias
     */
    public function setLunes($lunes)
    {
        $this->lunes = $lunes;
    
        return $this;
    }

    /**
     * Get lunes
     *
     * @return boolean 
     */
    public function getLunes()
    {
        return $this->lunes;
    }

    /**
     * Set martes
     *
     * @param boolean $martes
     * @return seriesDeTiempoDeClasePorDias
     */
    public function setMartes($martes)
    {
        $this->martes = $martes;
    
        return $this;
    }

    /**
     * Get martes
     *
     * @return boolean 
     */
    public function getMartes()
    {
        return $this->martes;
    }

    /**
     * Set miercoles
     *
     * @param boolean $miercoles
     * @return seriesDeTiempoDeClasePorDias
     */
    public function setMiercoles($miercoles)
    {
        $this->miercoles = $miercoles;
    
        return $this;
    }

    /**
     * Get miercoles
     *
     * @return boolean 
     */
    public function getMiercoles()
    {
        return $this->miercoles;
    }

    /**
     * Set jueves
     *
     * @param boolean $jueves
     * @return seriesDeTiempoDeClasePorDias
     */
    public function setJueves($jueves)
    {
        $this->jueves = $jueves;
    
        return $this;
    }

    /**
     * Get jueves
     *
     * @return boolean 
     */
    public function getJueves()
    {
        return $this->jueves;
    }

    /**
     * Set viernes
     *
     * @param boolean $viernes
     * @return seriesDeTiempoDeClasePorDias
     */
    public function setViernes($viernes)
    {
        $this->viernes = $viernes;
    
        return $this;
    }

    /**
     * Get viernes
     *
     * @return boolean 
     */
    public function getViernes()
    {
        return $this->viernes;
    }

    /**
     * Set sabado
     *
     * @param boolean $sabado
     * @return seriesDeTiempoDeClasePorDias
     */
    public function setSabado($sabado)
    {
        $this->sabado = $sabado;
    
        return $this;
    }

    /**
     * Get sabado
     *
     * @return boolean 
     */
    public function getSabado()
    {
        return $this->sabado;
    }

    /**
     * Set aplicableApartirDel
     *
     * @param \DateTime $aplicableApartirDel
     * @return seriesDeTiempoDeClasePorDias
     */
    public function setAplicableApartirDel($aplicableApartirDel)
    {
        $this->aplicableApartirDel = $aplicableApartirDel;
    
        return $this;
    }

    /**
     * Get aplicableApartirDel
     *
     * @return \DateTime 
     */
    public function getAplicableApartirDel()
    {
        return $this->aplicableApartirDel;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $curso;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $lotes;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->curso = new \Doctrine\Common\Collections\ArrayCollection();
        $this->lotes = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add curso
     *
     * @param \protecno\escuelaBundle\Entity\curso $curso
     * @return seriesDeTiempoDeClasePorDias
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

    /**
     * Add lotes
     *
     * @param \protecno\escuelaBundle\Entity\lotes $lotes
     * @return seriesDeTiempoDeClasePorDias
     */
    public function addLote(\protecno\escuelaBundle\Entity\lotes $lotes)
    {
        $this->lotes[] = $lotes;
    
        return $this;
    }

    /**
     * Remove lotes
     *
     * @param \protecno\escuelaBundle\Entity\lotes $lotes
     */
    public function removeLote(\protecno\escuelaBundle\Entity\lotes $lotes)
    {
        $this->lotes->removeElement($lotes);
    }

    /**
     * Get lotes
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getLotes()
    {
        return $this->lotes;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $temporizacionDeClase;


    /**
     * Add temporizacionDeClase
     *
     * @param \protecno\escuelaBundle\Entity\temporizacionDeClase $temporizacionDeClase
     * @return seriesDeTiempoDeClasePorDias
     */
    public function addTemporizacionDeClase(\protecno\escuelaBundle\Entity\temporizacionDeClase $temporizacionDeClase)
    {
        $this->temporizacionDeClase[] = $temporizacionDeClase;
    
        return $this;
    }

    /**
     * Remove temporizacionDeClase
     *
     * @param \protecno\escuelaBundle\Entity\temporizacionDeClase $temporizacionDeClase
     */
    public function removeTemporizacionDeClase(\protecno\escuelaBundle\Entity\temporizacionDeClase $temporizacionDeClase)
    {
        $this->temporizacionDeClase->removeElement($temporizacionDeClase);
    }

    /**
     * Get temporizacionDeClase
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTemporizacionDeClase()
    {
        return $this->temporizacionDeClase;
    }
}