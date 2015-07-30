<?php

namespace protecno\escuelaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * tienda
 */
class tienda
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
    private $codigo;

    /**
     * @var string
     */
    private $facturaPrefijo;


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
     * @return tienda
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
     * Set codigo
     *
     * @param string $codigo
     * @return tienda
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
     * Set facturaPrefijo
     *
     * @param string $facturaPrefijo
     * @return tienda
     */
    public function setFacturaPrefijo($facturaPrefijo)
    {
        $this->facturaPrefijo = $facturaPrefijo;
    
        return $this;
    }

    /**
     * Get facturaPrefijo
     *
     * @return string 
     */
    public function getFacturaPrefijo()
    {
        return $this->facturaPrefijo;
    }
    /**
     * @var \protecno\escuelaBundle\Entity\tiendaCategorias
     */
    private $tiendaCategorias;

    /**
     * @var \protecno\escuelaBundle\Entity\tipoDeTienda
     */
    private $tipoDeTienda;


    /**
     * Set tiendaCategorias
     *
     * @param \protecno\escuelaBundle\Entity\tiendaCategorias $tiendaCategorias
     * @return tienda
     */
    public function setTiendaCategorias(\protecno\escuelaBundle\Entity\tiendaCategorias $tiendaCategorias = null)
    {
        $this->tiendaCategorias = $tiendaCategorias;
    
        return $this;
    }

    /**
     * Get tiendaCategorias
     *
     * @return \protecno\escuelaBundle\Entity\tiendaCategorias 
     */
    public function getTiendaCategorias()
    {
        return $this->tiendaCategorias;
    }

    /**
     * Set tipoDeTienda
     *
     * @param \protecno\escuelaBundle\Entity\tipoDeTienda $tipoDeTienda
     * @return tienda
     */
    public function setTipoDeTienda(\protecno\escuelaBundle\Entity\tipoDeTienda $tipoDeTienda = null)
    {
        $this->tipoDeTienda = $tipoDeTienda;
    
        return $this;
    }

    /**
     * Get tipoDeTienda
     *
     * @return \protecno\escuelaBundle\Entity\tipoDeTienda 
     */
    public function getTipoDeTienda()
    {
        return $this->tipoDeTienda;
    }
}