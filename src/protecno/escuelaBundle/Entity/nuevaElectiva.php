<?php

namespace protecno\escuelaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * nuevaElectiva
 */
class nuevaElectiva
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
     * @var \DateTime
     */
    private $ultimaFechaParaElegirElectiva;


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
     * Set ultimaFechaParaElegirElectiva
     *
     * @param \DateTime $ultimaFechaParaElegirElectiva
     * @return nuevaElectiva
     */
    public function setUltimaFechaParaElegirElectiva($ultimaFechaParaElegirElectiva)
    {
        $this->ultimaFechaParaElegirElectiva = $ultimaFechaParaElegirElectiva;
    
        return $this;
    }

    /**
     * Get ultimaFechaParaElegirElectiva
     *
     * @return \DateTime 
     */
    public function getUltimaFechaParaElegirElectiva()
    {
        return $this->ultimaFechaParaElegirElectiva;
    }


    /**
     * Set nombre
     *
     * @param string $nombre
     * @return nuevaElectiva
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
}