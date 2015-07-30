<?php

namespace protecno\escuelaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * estructuraDeTarifas
 */
class estructuraDeTarifas
{
    /**
     * @var integer
     */
    private $id;


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
     * @var \Doctrine\Common\Collections\Collection
     */
    private $cuotaColeccion;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->cuotaColeccion = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add cuotaColeccion
     *
     * @param \protecno\escuelaBundle\Entity\cuotaColeccion $cuotaColeccion
     * @return estructuraDeTarifas
     */
    public function addCuotaColeccion(\protecno\escuelaBundle\Entity\cuotaColeccion $cuotaColeccion)
    {
        $this->cuotaColeccion[] = $cuotaColeccion;
    
        return $this;
    }

    /**
     * Remove cuotaColeccion
     *
     * @param \protecno\escuelaBundle\Entity\cuotaColeccion $cuotaColeccion
     */
    public function removeCuotaColeccion(\protecno\escuelaBundle\Entity\cuotaColeccion $cuotaColeccion)
    {
        $this->cuotaColeccion->removeElement($cuotaColeccion);
    }

    /**
     * Get cuotaColeccion
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCuotaColeccion()
    {
        return $this->cuotaColeccion;
    }
}