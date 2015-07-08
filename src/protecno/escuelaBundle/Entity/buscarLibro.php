<?php

namespace protecno\escuelaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * buscarLibro
 */
class buscarLibro
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $buscar;


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
     * Set buscar
     *
     * @param string $buscar
     * @return buscarLibro
     */
    public function setBuscar($buscar)
    {
        $this->buscar = $buscar;
    
        return $this;
    }

    /**
     * Get buscar
     *
     * @return string 
     */
    public function getBuscar()
    {
        return $this->buscar;
    }
}