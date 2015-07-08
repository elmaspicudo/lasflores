<?php

namespace protecno\escuelaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * admisionDeEstudiantes
 */
class admisionDeEstudiantes
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
     * @var \protecno\escuelaBundle\Entity\detallesPersonales
     */
    private $detallesPersonales;


    /**
     * Set detallesPersonales
     *
     * @param \protecno\escuelaBundle\Entity\detallesPersonales $detallesPersonales
     * @return admisionDeEstudiantes
     */
    public function setDetallesPersonales(\protecno\escuelaBundle\Entity\detallesPersonales $detallesPersonales = null)
    {
        $this->detallesPersonales = $detallesPersonales;
    
        return $this;
    }

    /**
     * Get detallesPersonales
     *
     * @return \protecno\escuelaBundle\Entity\detallesPersonales 
     */
    public function getDetallesPersonales()
    {
        return $this->detallesPersonales;
    }
    /**
     * @var \protecno\escuelaBundle\Entity\admision
     */
    private $admision;

    /**
     * @var \protecno\escuelaBundle\Entity\detallesDeContacto
     */
    private $detallesDeContacto;

    /**
     * @var \protecno\escuelaBundle\Entity\curso
     */
    private $curso;

    /**
     * @var \protecno\escuelaBundle\Entity\lotes
     */
    private $lotes;

    /**
     * @var \protecno\escuelaBundle\Entity\ajutes
     */
    private $ajustes;


    /**
     * Set admision
     *
     * @param \protecno\escuelaBundle\Entity\admision $admision
     * @return admisionDeEstudiantes
     */
    public function setAdmision(\protecno\escuelaBundle\Entity\admision $admision = null)
    {
        $this->admision = $admision;
    
        return $this;
    }

    /**
     * Get admision
     *
     * @return \protecno\escuelaBundle\Entity\admision 
     */
    public function getAdmision()
    {
        return $this->admision;
    }

    /**
     * Set detallesDeContacto
     *
     * @param \protecno\escuelaBundle\Entity\detallesDeContacto $detallesDeContacto
     * @return admisionDeEstudiantes
     */
    public function setDetallesDeContacto(\protecno\escuelaBundle\Entity\detallesDeContacto $detallesDeContacto = null)
    {
        $this->detallesDeContacto = $detallesDeContacto;
    
        return $this;
    }

    /**
     * Get detallesDeContacto
     *
     * @return \protecno\escuelaBundle\Entity\detallesDeContacto 
     */
    public function getDetallesDeContacto()
    {
        return $this->detallesDeContacto;
    }

    /**
     * Set curso
     *
     * @param \protecno\escuelaBundle\Entity\curso $curso
     * @return admisionDeEstudiantes
     */
    public function setCurso(\protecno\escuelaBundle\Entity\curso $curso = null)
    {
        $this->curso = $curso;
    
        return $this;
    }

    /**
     * Get curso
     *
     * @return \protecno\escuelaBundle\Entity\curso 
     */
    public function getCurso()
    {
        return $this->curso;
    }

    /**
     * Set lotes
     *
     * @param \protecno\escuelaBundle\Entity\lotes $lotes
     * @return admisionDeEstudiantes
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
     * Set ajustes
     *
     * @param \protecno\escuelaBundle\Entity\ajutes $ajustes
     * @return admisionDeEstudiantes
     */
    public function setAjustes(\protecno\escuelaBundle\Entity\ajutes $ajustes = null)
    {
        $this->ajustes = $ajustes;
    
        return $this;
    }

    /**
     * Get ajustes
     *
     * @return \protecno\escuelaBundle\Entity\ajutes 
     */
    public function getAjustes()
    {
        return $this->ajustes;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $subirFotoDelUsuario;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->subirFotoDelUsuario = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add subirFotoDelUsuario
     *
     * @param \protecno\escuelaBundle\Entity\subirFotoDelUsuario $subirFotoDelUsuario
     * @return admisionDeEstudiantes
     */
    public function addSubirFotoDelUsuario(\protecno\escuelaBundle\Entity\subirFotoDelUsuario $subirFotoDelUsuario)
    {
        $this->subirFotoDelUsuario[] = $subirFotoDelUsuario;
    
        return $this;
    }

    /**
     * Remove subirFotoDelUsuario
     *
     * @param \protecno\escuelaBundle\Entity\subirFotoDelUsuario $subirFotoDelUsuario
     */
    public function removeSubirFotoDelUsuario(\protecno\escuelaBundle\Entity\subirFotoDelUsuario $subirFotoDelUsuario)
    {
        $this->subirFotoDelUsuario->removeElement($subirFotoDelUsuario);
    }

    /**
     * Get subirFotoDelUsuario
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSubirFotoDelUsuario()
    {
        return $this->subirFotoDelUsuario;
    }

    /**
     * Add admision
     *
     * @param \protecno\escuelaBundle\Entity\admision $admision
     * @return admisionDeEstudiantes
     */
    public function addAdmision(\protecno\escuelaBundle\Entity\admision $admision)
    {
        $this->admision[] = $admision;
    
        return $this;
    }

    /**
     * Remove admision
     *
     * @param \protecno\escuelaBundle\Entity\admision $admision
     */
    public function removeAdmision(\protecno\escuelaBundle\Entity\admision $admision)
    {
        $this->admision->removeElement($admision);
    }

    /**
     * Add curso
     *
     * @param \protecno\escuelaBundle\Entity\curso $curso
     * @return admisionDeEstudiantes
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
     * @return admisionDeEstudiantes
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