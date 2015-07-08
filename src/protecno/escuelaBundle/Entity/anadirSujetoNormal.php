<?php

namespace protecno\escuelaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * anadirSujetoNormal
 */
class anadirSujetoNormal
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
     * @var integer
     */
    private $maxClasesSemanales;

    /**
     * @var boolean
     */
    private $sinExamen;


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
     * @return anadirSujetoNormal
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
     * @return anadirSujetoNormal
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
     * Set maxClasesSemanales
     *
     * @param integer $maxClasesSemanales
     * @return anadirSujetoNormal
     */
    public function setMaxClasesSemanales($maxClasesSemanales)
    {
        $this->maxClasesSemanales = $maxClasesSemanales;
    
        return $this;
    }

    /**
     * Get maxClasesSemanales
     *
     * @return integer 
     */
    public function getMaxClasesSemanales()
    {
        return $this->maxClasesSemanales;
    }

    /**
     * Set sinExamen
     *
     * @param boolean $sinExamen
     * @return anadirSujetoNormal
     */
    public function setSinExamen($sinExamen)
    {
        $this->sinExamen = $sinExamen;
    
        return $this;
    }

    /**
     * Get sinExamen
     *
     * @return boolean 
     */
    public function getSinExamen()
    {
        return $this->sinExamen;
    }
}