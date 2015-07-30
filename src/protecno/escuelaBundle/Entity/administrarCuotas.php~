<?php

namespace protecno\escuelaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * administrarCuotas
 */
class administrarCuotas
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
    private $lotes;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $cuotaColeccion;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->lotes = new \Doctrine\Common\Collections\ArrayCollection();
        $this->cuotaColeccion = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add lotes
     *
     * @param \protecno\escuelaBundle\Entity\lotes $lotes
     * @return administrarCuotas
     */
    public function addLote(\protecno\escuelaBundle\Entity\lotes $lotes)
    {
        $this->lotes[] = $lotes;
    
        return $this;
    }

    /**
     * Remove lotes
     *
     * @param \protecno\escuelaBundle\Entity\lotes $lotes
     */
    public function removeLote(\protecno\escuelaBundle\Entity\lotes $lotes)
    {
        $this->lotes->removeElement($lotes);
    }

    /**
     * Get lotes
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getLotes()
    {
        return $this->lotes;
    }

    /**
     * Add cuotaColeccion
     *
     * @param \protecno\escuelaBundle\Entity\cuotaColeccion $cuotaColeccion
     * @return administrarCuotas
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