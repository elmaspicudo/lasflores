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
     * @var \protecno\escuelaBundle\Entity\detallesDeContacto
     */
    private $detallesDeContacto;

    /**
     * @var \protecno\escuelaBundle\Entity\curso
     */
    private $curso;
    /**
     * @var string
     */
    private $identificacionBiometrica;

    /**
     * @var boolean
     */
    private $habilitarFuncionesDeCorreoElectronico;


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
     * Set identificacionBiometrica
     *
     * @param string $identificacionBiometrica
     * @return admisionDeEstudiantes
     */
    public function setIdentificacionBiometrica($identificacionBiometrica)
    {
        $this->identificacionBiometrica = $identificacionBiometrica;
    
        return $this;
    }

    /**
     * Get identificacionBiometrica
     *
     * @return string 
     */
    public function getIdentificacionBiometrica()
    {
        return $this->identificacionBiometrica;
    }

    /**
     * Set habilitarFuncionesDeCorreoElectronico
     *
     * @param boolean $habilitarFuncionesDeCorreoElectronico
     * @return admisionDeEstudiantes
     */
    public function setHabilitarFuncionesDeCorreoElectronico($habilitarFuncionesDeCorreoElectronico)
    {
        $this->habilitarFuncionesDeCorreoElectronico = $habilitarFuncionesDeCorreoElectronico;
    
        return $this;
    }

    /**
     * Get habilitarFuncionesDeCorreoElectronico
     *
     * @return boolean 
     */
    public function getHabilitarFuncionesDeCorreoElectronico()
    {
        return $this->habilitarFuncionesDeCorreoElectronico;
    }
}