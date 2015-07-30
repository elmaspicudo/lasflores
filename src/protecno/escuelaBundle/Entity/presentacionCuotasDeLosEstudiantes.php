<?php

namespace protecno\escuelaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * presentacionCuotasDeLosEstudiantes
 */
class presentacionCuotasDeLosEstudiantes
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $descripcion;


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
     * Set descripcion
     *
     * @param string $descripcion
     * @return presentacionCuotasDeLosEstudiantes
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    
        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }
    /**
     * @var \protecno\escuelaBundle\Entity\lotes
     */
    private $lotes;

    /**
     * @var \protecno\escuelaBundle\Entity\cuotaColeccion
     */
    private $cuotaColeccion;

    /**
     * @var \protecno\escuelaBundle\Entity\admisionDeEstudiantes
     */
    private $admisionDeEstudiantes;


    /**
     * Set lotes
     *
     * @param \protecno\escuelaBundle\Entity\lotes $lotes
     * @return presentacionCuotasDeLosEstudiantes
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

    /**
     * Set cuotaColeccion
     *
     * @param \protecno\escuelaBundle\Entity\cuotaColeccion $cuotaColeccion
     * @return presentacionCuotasDeLosEstudiantes
     */
    public function setCuotaColeccion(\protecno\escuelaBundle\Entity\cuotaColeccion $cuotaColeccion = null)
    {
        $this->cuotaColeccion = $cuotaColeccion;
    
        return $this;
    }

    /**
     * Get cuotaColeccion
     *
     * @return \protecno\escuelaBundle\Entity\cuotaColeccion 
     */
    public function getCuotaColeccion()
    {
        return $this->cuotaColeccion;
    }

    /**
     * Set admisionDeEstudiantes
     *
     * @param \protecno\escuelaBundle\Entity\admisionDeEstudiantes $admisionDeEstudiantes
     * @return presentacionCuotasDeLosEstudiantes
     */
    public function setAdmisionDeEstudiantes(\protecno\escuelaBundle\Entity\admisionDeEstudiantes $admisionDeEstudiantes = null)
    {
        $this->admisionDeEstudiantes = $admisionDeEstudiantes;
    
        return $this;
    }

    /**
     * Get admisionDeEstudiantes
     *
     * @return \protecno\escuelaBundle\Entity\admisionDeEstudiantes 
     */
    public function getAdmisionDeEstudiantes()
    {
        return $this->admisionDeEstudiantes;
    }
}