<?php

namespace protecno\escuelaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * articuloTienda
 */
class articuloTienda
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nombreDelElemento;

    /**
     * @var string
     */
    private $codigo;

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
    private $impuestosPorcentaje;

    /**
     * @var integer
     */
    private $noDeLote;

    /**
     * @var boolean
     */
    private $vendible;

    /**
     * @var \protecno\escuelaBundle\Entity\tienda
     */
    private $tienda;


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
     * Set nombreDelElemento
     *
     * @param string $nombreDelElemento
     * @return articuloTienda
     */
    public function setNombreDelElemento($nombreDelElemento)
    {
        $this->nombreDelElemento = $nombreDelElemento;
    
        return $this;
    }

    /**
     * Get nombreDelElemento
     *
     * @return string 
     */
    public function getNombreDelElemento()
    {
        return $this->nombreDelElemento;
    }

    /**
     * Set codigo
     *
     * @param string $codigo
     * @return articuloTienda
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
     * Set cantidad
     *
     * @param integer $cantidad
     * @return articuloTienda
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
     * @return articuloTienda
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
     * Set impuestosPorcentaje
     *
     * @param integer $impuestosPorcentaje
     * @return articuloTienda
     */
    public function setImpuestosPorcentaje($impuestosPorcentaje)
    {
        $this->impuestosPorcentaje = $impuestosPorcentaje;
    
        return $this;
    }

    /**
     * Get impuestosPorcentaje
     *
     * @return integer 
     */
    public function getImpuestosPorcentaje()
    {
        return $this->impuestosPorcentaje;
    }

    /**
     * Set noDeLote
     *
     * @param integer $noDeLote
     * @return articuloTienda
     */
    public function setNoDeLote($noDeLote)
    {
        $this->noDeLote = $noDeLote;
    
        return $this;
    }

    /**
     * Get noDeLote
     *
     * @return integer 
     */
    public function getNoDeLote()
    {
        return $this->noDeLote;
    }

    /**
     * Set vendible
     *
     * @param boolean $vendible
     * @return articuloTienda
     */
    public function setVendible($vendible)
    {
        $this->vendible = $vendible;
    
        return $this;
    }

    /**
     * Get vendible
     *
     * @return boolean 
     */
    public function getVendible()
    {
        return $this->vendible;
    }

    /**
     * Set tienda
     *
     * @param \protecno\escuelaBundle\Entity\tienda $tienda
     * @return articuloTienda
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
}