<?php

namespace protecno\escuelaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * agregarFoto
 */
class agregarFoto
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $fotoNombre;


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
     * Set fotoNombre
     *
     * @param string $fotoNombre
     * @return agregarFoto
     */
    public function setFotoNombre($fotoNombre)
    {
        $this->fotoNombre = $fotoNombre;
    
        return $this;
    }

    /**
     * Get fotoNombre
     *
     * @return string 
     */
    public function getFotoNombre()
    {
        return $this->fotoNombre;
    }
    /**
     * @var \protecno\escuelaBundle\Entity\categoriaFoto
     */
    private $categoriaFoto;

    /**
     * @var \protecno\escuelaBundle\Entity\lotes
     */
    private $lotes;


    /**
     * Set categoriaFoto
     *
     * @param \protecno\escuelaBundle\Entity\categoriaFoto $categoriaFoto
     * @return agregarFoto
     */
    public function setCategoriaFoto(\protecno\escuelaBundle\Entity\categoriaFoto $categoriaFoto = null)
    {
        $this->categoriaFoto = $categoriaFoto;
    
        return $this;
    }

    /**
     * Get categoriaFoto
     *
     * @return \protecno\escuelaBundle\Entity\categoriaFoto 
     */
    public function getCategoriaFoto()
    {
        return $this->categoriaFoto;
    }

    /**
     * Set lotes
     *
     * @param \protecno\escuelaBundle\Entity\lotes $lotes
     * @return agregarFoto
     */
    public function setLotes(\protecno\escuelaBundle\Entity\lotes $lotes = null)
    {
        $this->lotes = $lotes;
    
        return $this;
    }

    /**
     * Get lotes
     *
     * @return \protecno\escuelaBundle\Entity\lotes 
     */
    public function getLotes()
    {
        return $this->lotes;
    }
}