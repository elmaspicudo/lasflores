<?php

namespace protecno\escuelaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ventas
 */
class ventas
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $cantidad;

    /**
     * @var integer
     */
    private $precioPorUnidad;

    /**
     * @var integer
     */
    private $precioTotal;


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
     * Set cantidad
     *
     * @param integer $cantidad
     * @return ventas
     */
    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;
    
        return $this;
    }

    /**
     * Get cantidad
     *
     * @return integer 
     */
    public function getCantidad()
    {
        return $this->cantidad;
    }

    /**
     * Set precioPorUnidad
     *
     * @param integer $precioPorUnidad
     * @return ventas
     */
    public function setPrecioPorUnidad($precioPorUnidad)
    {
        $this->precioPorUnidad = $precioPorUnidad;
    
        return $this;
    }

    /**
     * Get precioPorUnidad
     *
     * @return integer 
     */
    public function getPrecioPorUnidad()
    {
        return $this->precioPorUnidad;
    }

    /**
     * Set precioTotal
     *
     * @param integer $precioTotal
     * @return ventas
     */
    public function setPrecioTotal($precioTotal)
    {
        $this->precioTotal = $precioTotal;
    
        return $this;
    }

    /**
     * Get precioTotal
     *
     * @return integer 
     */
    public function getPrecioTotal()
    {
        return $this->precioTotal;
    }
    /**
     * @var \dscorp\administradorBundle\Entity\tienda
     */
    private $tienda;

    /**
     * @var \dscorp\administradorBundle\Entity\articuloTienda
     */
    private $articuloTienda;


    /**
     * Set tienda
     *
     * @param \dscorp\administradorBundle\Entity\tienda $tienda
     * @return ventas
     */
    public function setTienda(\dscorp\administradorBundle\Entity\tienda $tienda = null)
    {
        $this->tienda = $tienda;
    
        return $this;
    }

    /**
     * Get tienda
     *
     * @return \dscorp\administradorBundle\Entity\tienda 
     */
    public function getTienda()
    {
        return $this->tienda;
    }

    /**
     * Set articuloTienda
     *
     * @param \dscorp\administradorBundle\Entity\articuloTienda $articuloTienda
     * @return ventas
     */
    public function setArticuloTienda(\dscorp\administradorBundle\Entity\articuloTienda $articuloTienda = null)
    {
        $this->articuloTienda = $articuloTienda;
    
        return $this;
    }

    /**
     * Get articuloTienda
     *
     * @return \dscorp\administradorBundle\Entity\articuloTienda 
     */
    public function getArticuloTienda()
    {
        return $this->articuloTienda;
    }
}