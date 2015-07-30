<?php

namespace protecno\escuelaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * crearParticulares
 */
class crearParticulares
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
    private $descripcion;

    /**
     * @var boolean
     */
    private $crearUsando;

    /**
     * @var integer
     */
    private $importe;


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
     * @return crearParticulares
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
     * Set descripcion
     *
     * @param string $descripcion
     * @return crearParticulares
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
     * Set crearUsando
     *
     * @param boolean $crearUsando
     * @return crearParticulares
     */
    public function setCrearUsando($crearUsando)
    {
        $this->crearUsando = $crearUsando;
    
        return $this;
    }

    /**
     * Get crearUsando
     *
     * @return boolean 
     */
    public function getCrearUsando()
    {
        return $this->crearUsando;
    }

    /**
     * Set importe
     *
     * @param integer $importe
     * @return crearParticulares
     */
    public function setImporte($importe)
    {
        $this->importe = $importe;
    
        return $this;
    }

    /**
     * Get importe
     *
     * @return integer 
     */
    public function getImporte()
    {
        return $this->importe;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $categoriaHonorarios;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->categoriaHonorarios = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add categoriaHonorarios
     *
     * @param \protecno\escuelaBundle\Entity\categoriaHonorarios $categoriaHonorarios
     * @return crearParticulares
     */
    public function addCategoriaHonorario(\protecno\escuelaBundle\Entity\categoriaHonorarios $categoriaHonorarios)
    {
        $this->categoriaHonorarios[] = $categoriaHonorarios;
    
        return $this;
    }

    /**
     * Remove categoriaHonorarios
     *
     * @param \protecno\escuelaBundle\Entity\categoriaHonorarios $categoriaHonorarios
     */
    public function removeCategoriaHonorario(\protecno\escuelaBundle\Entity\categoriaHonorarios $categoriaHonorarios)
    {
        $this->categoriaHonorarios->removeElement($categoriaHonorarios);
    }

    /**
     * Get categoriaHonorarios
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCategoriaHonorarios()
    {
        return $this->categoriaHonorarios;
    }
}