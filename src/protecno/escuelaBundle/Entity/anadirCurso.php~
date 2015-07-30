<?php

namespace protecno\escuelaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * anadirCurso
 */
class anadirCurso
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $puntajeMinimo;

    /**
     * @var string
     */
    private $cantidad;

    /**
     * @var boolean
     */
    private $estaActivo;

    /**
     * @var boolean
     */
    private $estaActivoEnElSistemaPin;

    /**
     * @var boolean
     */
    private $habilitarSistemaDeAprobacion;

    /**
     * @var boolean
     */
    private $registrstroBasadoAsunto;

    /**
     * @var boolean
     */
    private $incluyaDetalles;

    /**
     * @var boolean
     */
    private $transferirArchivosAdjuntosMientrasAsignacion;


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
     * Set puntajeMinimo
     *
     * @param string $puntajeMinimo
     * @return anadirCurso
     */
    public function setPuntajeMinimo($puntajeMinimo)
    {
        $this->puntajeMinimo = $puntajeMinimo;
    
        return $this;
    }

    /**
     * Get puntajeMinimo
     *
     * @return string 
     */
    public function getPuntajeMinimo()
    {
        return $this->puntajeMinimo;
    }

    /**
     * Set cantidad
     *
     * @param string $cantidad
     * @return anadirCurso
     */
    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;
    
        return $this;
    }

    /**
     * Get cantidad
     *
     * @return string 
     */
    public function getCantidad()
    {
        return $this->cantidad;
    }

    /**
     * Set estaActivo
     *
     * @param boolean $estaActivo
     * @return anadirCurso
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
     * Set estaActivoEnElSistemaPin
     *
     * @param boolean $estaActivoEnElSistemaPin
     * @return anadirCurso
     */
    public function setEstaActivoEnElSistemaPin($estaActivoEnElSistemaPin)
    {
        $this->estaActivoEnElSistemaPin = $estaActivoEnElSistemaPin;
    
        return $this;
    }

    /**
     * Get estaActivoEnElSistemaPin
     *
     * @return boolean 
     */
    public function getEstaActivoEnElSistemaPin()
    {
        return $this->estaActivoEnElSistemaPin;
    }

    /**
     * Set habilitarSistemaDeAprobacion
     *
     * @param boolean $habilitarSistemaDeAprobacion
     * @return anadirCurso
     */
    public function setHabilitarSistemaDeAprobacion($habilitarSistemaDeAprobacion)
    {
        $this->habilitarSistemaDeAprobacion = $habilitarSistemaDeAprobacion;
    
        return $this;
    }

    /**
     * Get habilitarSistemaDeAprobacion
     *
     * @return boolean 
     */
    public function getHabilitarSistemaDeAprobacion()
    {
        return $this->habilitarSistemaDeAprobacion;
    }

    /**
     * Set registrstroBasadoAsunto
     *
     * @param boolean $registrstroBasadoAsunto
     * @return anadirCurso
     */
    public function setRegistrstroBasadoAsunto($registrstroBasadoAsunto)
    {
        $this->registrstroBasadoAsunto = $registrstroBasadoAsunto;
    
        return $this;
    }

    /**
     * Get registrstroBasadoAsunto
     *
     * @return boolean 
     */
    public function getRegistrstroBasadoAsunto()
    {
        return $this->registrstroBasadoAsunto;
    }

    /**
     * Set incluyaDetalles
     *
     * @param boolean $incluyaDetalles
     * @return anadirCurso
     */
    public function setIncluyaDetalles($incluyaDetalles)
    {
        $this->incluyaDetalles = $incluyaDetalles;
    
        return $this;
    }

    /**
     * Get incluyaDetalles
     *
     * @return boolean 
     */
    public function getIncluyaDetalles()
    {
        return $this->incluyaDetalles;
    }

    /**
     * Set transferirArchivosAdjuntosMientrasAsignacion
     *
     * @param boolean $transferirArchivosAdjuntosMientrasAsignacion
     * @return anadirCurso
     */
    public function setTransferirArchivosAdjuntosMientrasAsignacion($transferirArchivosAdjuntosMientrasAsignacion)
    {
        $this->transferirArchivosAdjuntosMientrasAsignacion = $transferirArchivosAdjuntosMientrasAsignacion;
    
        return $this;
    }

    /**
     * Get transferirArchivosAdjuntosMientrasAsignacion
     *
     * @return boolean 
     */
    public function getTransferirArchivosAdjuntosMientrasAsignacion()
    {
        return $this->transferirArchivosAdjuntosMientrasAsignacion;
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
     * @return anadirCurso
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