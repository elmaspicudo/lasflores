<?php

namespace protecno\escuelaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * examenCursoSabio
 */
class examenCursoSabio
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nombreDelExamen;


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
     * Set nombreDelExamen
     *
     * @param string $nombreDelExamen
     * @return examenCursoSabio
     */
    public function setNombreDelExamen($nombreDelExamen)
    {
        $this->nombreDelExamen = $nombreDelExamen;
    
        return $this;
    }

    /**
     * Get nombreDelExamen
     *
     * @return string 
     */
    public function getNombreDelExamen()
    {
        return $this->nombreDelExamen;
    }
}