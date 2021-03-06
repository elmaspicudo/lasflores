<?php

namespace protecno\escuelaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ingreso
 */
class ingreso
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $titulo;

    /**
     * @var string
     */
    private $descripcion;

    /**
     * @var integer
     */
    private $importe;

    /**
     * @var \DateTime
     */
    private $fecha;


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
     * Set titulo
     *
     * @param string $titulo
     * @return ingreso
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
     * @return ingreso
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
     * Set importe
     *
     * @param integer $importe
     * @return ingreso
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
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return ingreso
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;
    
        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime 
     */
    public function getFecha()
    {
        return $this->fecha;
    }
    /**
     * @var \protecno\escuelaBundle\Entity\finanzasCategoria
     */
    private $finanzasCategoria;


    /**
     * Set finanzasCategoria
     *
     * @param \protecno\escuelaBundle\Entity\finanzasCategoria $finanzasCategoria
     * @return ingreso
     */
    public function setFinanzasCategoria(\protecno\escuelaBundle\Entity\finanzasCategoria $finanzasCategoria = null)
    {
        $this->finanzasCategoria = $finanzasCategoria;
    
        return $this;
    }

    /**
     * Get finanzasCategoria
     *
     * @return \protecno\escuelaBundle\Entity\finanzasCategoria 
     */
    public function getFinanzasCategoria()
    {
        return $this->finanzasCategoria;
    }
}