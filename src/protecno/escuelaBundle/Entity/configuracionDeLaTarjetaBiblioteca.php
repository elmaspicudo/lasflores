<?php

namespace protecno\escuelaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * configuracionDeLaTarjetaBiblioteca
 */
class configuracionDeLaTarjetaBiblioteca
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $librosEmisionCondicionada;

    /**
     * @var integer
     */
    private $periodoDeTiempoDias;


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
     * Set librosEmisionCondicionada
     *
     * @param string $librosEmisionCondicionada
     * @return configuracionDeLaTarjetaBiblioteca
     */
    public function setLibrosEmisionCondicionada($librosEmisionCondicionada)
    {
        $this->librosEmisionCondicionada = $librosEmisionCondicionada;
    
        return $this;
    }

    /**
     * Get librosEmisionCondicionada
     *
     * @return string 
     */
    public function getLibrosEmisionCondicionada()
    {
        return $this->librosEmisionCondicionada;
    }

    /**
     * Set periodoDeTiempoDias
     *
     * @param integer $periodoDeTiempoDias
     * @return configuracionDeLaTarjetaBiblioteca
     */
    public function setPeriodoDeTiempoDias($periodoDeTiempoDias)
    {
        $this->periodoDeTiempoDias = $periodoDeTiempoDias;
    
        return $this;
    }

    /**
     * Get periodoDeTiempoDias
     *
     * @return integer 
     */
    public function getPeriodoDeTiempoDias()
    {
        return $this->periodoDeTiempoDias;
    }
}