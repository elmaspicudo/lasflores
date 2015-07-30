<?php

namespace protecno\escuelaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ordenesDeCompra
 */
class ordenesDeCompra
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $ordenDeCompraNo;

    /**
     * @var \DateTime
     */
    private $fecha;

    /**
     * @var string
     */
    private $referencia;

    /**
     * @var integer
     */
    private $precioUnitario;

    /**
     * @var integer
     */
    private $cantidad;

    /**
     * @var integer
     */
    private $descuento;

    /**
     * @var integer
     */
    private $impuestos;


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
     * Set ordenDeCompraNo
     *
     * @param integer $ordenDeCompraNo
     * @return ordenesDeCompra
     */
    public function setOrdenDeCompraNo($ordenDeCompraNo)
    {
        $this->ordenDeCompraNo = $ordenDeCompraNo;
    
        return $this;
    }

    /**
     * Get ordenDeCompraNo
     *
     * @return integer 
     */
    public function getOrdenDeCompraNo()
    {
        return $this->ordenDeCompraNo;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return ordenesDeCompra
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
     * Set referencia
     *
     * @param string $referencia
     * @return ordenesDeCompra
     */
    public function setReferencia($referencia)
    {
        $this->referencia = $referencia;
    
        return $this;
    }

    /**
     * Get referencia
     *
     * @return string 
     */
    public function getReferencia()
    {
        return $this->referencia;
    }

    /**
     * Set precioUnitario
     *
     * @param integer $precioUnitario
     * @return ordenesDeCompra
     */
    public function setPrecioUnitario($precioUnitario)
    {
        $this->precioUnitario = $precioUnitario;
    
        return $this;
    }

    /**
     * Get precioUnitario
     *
     * @return integer 
     */
    public function getPrecioUnitario()
    {
        return $this->precioUnitario;
    }

    /**
     * Set cantidad
     *
     * @param integer $cantidad
     * @return ordenesDeCompra
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
     * Set descuento
     *
     * @param integer $descuento
     * @return ordenesDeCompra
     */
    public function setDescuento($descuento)
    {
        $this->descuento = $descuento;
    
        return $this;
    }

    /**
     * Get descuento
     *
     * @return integer 
     */
    public function getDescuento()
    {
        return $this->descuento;
    }

    /**
     * Set impuestos
     *
     * @param integer $impuestos
     * @return ordenesDeCompra
     */
    public function setImpuestos($impuestos)
    {
        $this->impuestos = $impuestos;
    
        return $this;
    }

    /**
     * Get impuestos
     *
     * @return integer 
     */
    public function getImpuestos()
    {
        return $this->impuestos;
    }
    /**
     * @var \protecno\escuelaBundle\Entity\tienda
     */
    private $tienda;

    /**
     * @var \protecno\escuelaBundle\Entity\tiposDeProveedor
     */
    private $tiposDeProveedor;

    /**
     * @var \protecno\escuelaBundle\Entity\proveedores
     */
    private $proveedores;


    /**
     * Set tienda
     *
     * @param \protecno\escuelaBundle\Entity\tienda $tienda
     * @return ordenesDeCompra
     */
    public function setTienda(\protecno\escuelaBundle\Entity\tienda $tienda = null)
    {
        $this->tienda = $tienda;
    
        return $this;
    }

    /**
     * Get tienda
     *
     * @return \protecno\escuelaBundle\Entity\tienda 
     */
    public function getTienda()
    {
        return $this->tienda;
    }

    /**
     * Set tiposDeProveedor
     *
     * @param \protecno\escuelaBundle\Entity\tiposDeProveedor $tiposDeProveedor
     * @return ordenesDeCompra
     */
    public function setTiposDeProveedor(\protecno\escuelaBundle\Entity\tiposDeProveedor $tiposDeProveedor = null)
    {
        $this->tiposDeProveedor = $tiposDeProveedor;
    
        return $this;
    }

    /**
     * Get tiposDeProveedor
     *
     * @return \protecno\escuelaBundle\Entity\tiposDeProveedor 
     */
    public function getTiposDeProveedor()
    {
        return $this->tiposDeProveedor;
    }

    /**
     * Set proveedores
     *
     * @param \protecno\escuelaBundle\Entity\proveedores $proveedores
     * @return ordenesDeCompra
     */
    public function setProveedores(\protecno\escuelaBundle\Entity\proveedores $proveedores = null)
    {
        $this->proveedores = $proveedores;
    
        return $this;
    }

    /**
     * Get proveedores
     *
     * @return \protecno\escuelaBundle\Entity\proveedores 
     */
    public function getProveedores()
    {
        return $this->proveedores;
    }
    /**
     * @var \protecno\escuelaBundle\Entity\articuloTienda
     */
    private $articuloTienda;


    /**
     * Set articuloTienda
     *
     * @param \protecno\escuelaBundle\Entity\articuloTienda $articuloTienda
     * @return ordenesDeCompra
     */
    public function setArticuloTienda(\protecno\escuelaBundle\Entity\articuloTienda $articuloTienda = null)
    {
        $this->articuloTienda = $articuloTienda;
    
        return $this;
    }

    /**
     * Get articuloTienda
     *
     * @return \protecno\escuelaBundle\Entity\articuloTienda 
     */
    public function getArticuloTienda()
    {
        return $this->articuloTienda;
    }
}