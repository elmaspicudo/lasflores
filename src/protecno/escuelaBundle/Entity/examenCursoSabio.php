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
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $curso;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $lotes;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->curso = new \Doctrine\Common\Collections\ArrayCollection();
        $this->lotes = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add curso
     *
     * @param \protecno\escuelaBundle\Entity\curso $curso
     * @return examenCursoSabio
     */
    public function addCurso(\protecno\escuelaBundle\Entity\curso $curso)
    {
        $this->curso[] = $curso;
    
        return $this;
    }

    /**
     * Remove curso
     *
     * @param \protecno\escuelaBundle\Entity\curso $curso
     */
    public function removeCurso(\protecno\escuelaBundle\Entity\curso $curso)
    {
        $this->curso->removeElement($curso);
    }

    /**
     * Get curso
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCurso()
    {
        return $this->curso;
    }

    /**
     * Add lotes
     *
     * @param \protecno\escuelaBundle\Entity\lotes $lotes
     * @return examenCursoSabio
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
}