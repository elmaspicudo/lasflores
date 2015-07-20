<?php

namespace protecno\escuelaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * comentariosPersonalizados
 */
class comentariosPersonalizados
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $tema;

    /**
     * @var string
     */
    private $obserbacionPor;

    /**
     * @var string
     */
    private $curso;

    /**
     * @var string
     */
    private $lotes;


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
     * Set tema
     *
     * @param string $tema
     * @return comentariosPersonalizados
     */
    public function setTema($tema)
    {
        $this->tema = $tema;
    
        return $this;
    }

    /**
     * Get tema
     *
     * @return string 
     */
    public function getTema()
    {
        return $this->tema;
    }

    /**
     * Set obserbacionPor
     *
     * @param string $obserbacionPor
     * @return comentariosPersonalizados
     */
    public function setObserbacionPor($obserbacionPor)
    {
        $this->obserbacionPor = $obserbacionPor;
    
        return $this;
    }

    /**
     * Get obserbacionPor
     *
     * @return string 
     */
    public function getObserbacionPor()
    {
        return $this->obserbacionPor;
    }
    
    /**
     * Set curso
     *
     * @param string $curso
     * @return comentariosPersonalizados
     */
    public function setCurso($curso)
    {
        $this->curso = $curso;
    
        return $this;
    }

    /**
     * Get curso
     *
     * @return string 
     */
    public function getCurso()
    {
        return $this->curso;
    }

    /**
     * Set lotes
     *
     * @param string $lotes
     * @return comentariosPersonalizados
     */
    public function setLotes($lotes)
    {
        $this->lotes = $lotes;
    
        return $this;
    }

    /**
     * Get lotes
     *
     * @return string 
     */
    public function getLotes()
    {
        return $this->lotes;
    }
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
     * @return comentariosPersonalizados
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
     * Add lotes
     *
     * @param \protecno\escuelaBundle\Entity\lotes $lotes
     * @return comentariosPersonalizados
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
}