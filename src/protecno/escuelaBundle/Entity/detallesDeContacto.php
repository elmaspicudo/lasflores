<?php

namespace protecno\escuelaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * detallesDeContacto
 */
class detallesDeContacto
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $direccionLinea1;

    /**
     * @var string
     */
    private $direccionLinea2;

    /**
     * @var string
     */
    private $ciudad;

    /**
     * @var string
     */
    private $estado;

    /**
     * @var string
     */
    private $codigoPIN;

    /**
     * @var integer
     */
    private $telefono;

    /**
     * @var integer
     */
    private $movil;

    /**
     * @var string
     */
    private $eMail;
        /**
     * @var string
     */
    private $pais;

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
     * Set direccionLinea1
     *
     * @param string $direccionLinea1
     * @return detallesDeContacto
     */
    public function setDireccionLinea1($direccionLinea1)
    {
        $this->direccionLinea1 = $direccionLinea1;
    
        return $this;
    }

    /**
     * Get direccionLinea1
     *
     * @return string 
     */
    public function getDireccionLinea1()
    {
        return $this->direccionLinea1;
    }

    /**
     * Set direccionLinea2
     *
     * @param string $direccionLinea2
     * @return detallesDeContacto
     */
    public function setDireccionLinea2($direccionLinea2)
    {
        $this->direccionLinea2 = $direccionLinea2;
    
        return $this;
    }

    /**
     * Get direccionLinea2
     *
     * @return string 
     */
    public function getDireccionLinea2()
    {
        return $this->direccionLinea2;
    }

    /**
     * Set ciudad
     *
     * @param string $ciudad
     * @return detallesDeContacto
     */
    public function setCiudad($ciudad)
    {
        $this->ciudad = $ciudad;
    
        return $this;
    }

    /**
     * Get ciudad
     *
     * @return string 
     */
    public function getCiudad()
    {
        return $this->ciudad;
    }

    /**
     * Set estado
     *
     * @param string $estado
     * @return detallesDeContacto
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;
    
        return $this;
    }

    /**
     * Get estado
     *
     * @return string 
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set codigoPIN
     *
     * @param string $codigoPIN
     * @return detallesDeContacto
     */
    public function setCodigoPIN($codigoPIN)
    {
        $this->codigoPIN = $codigoPIN;
    
        return $this;
    }

    /**
     * Get codigoPIN
     *
     * @return string 
     */
    public function getCodigoPIN()
    {
        return $this->codigoPIN;
    }

    /**
     * Set telefono
     *
     * @param integer $telefono
     * @return detallesDeContacto
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;
    
        return $this;
    }

    /**
     * Get telefono
     *
     * @return integer 
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set movil
     *
     * @param integer $movil
     * @return detallesDeContacto
     */
    public function setMovil($movil)
    {
        $this->movil = $movil;
    
        return $this;
    }

    /**
     * Get movil
     *
     * @return integer 
     */
    public function getMovil()
    {
        return $this->movil;
    }

    /**
     * Set eMail
     *
     * @param string $eMail
     * @return detallesDeContacto
     */
    public function setEMail($eMail)
    {
        $this->eMail = $eMail;
    
        return $this;
    }

    /**
     * Get eMail
     *
     * @return string 
     */
    public function getEMail()
    {
        return $this->eMail;
    }

    /**
     * Set pais
     *
     * @param \protecno\escuelaBundle\Entity\pais $pais
     * @return detallesDeContacto
     */
    public function setPais(\protecno\escuelaBundle\Entity\pais $pais = null)
    {
        $this->pais = $pais;
    
        return $this;
    }

    /**
     * Get pais
     *
     * @return \protecno\escuelaBundle\Entity\pais 
     */
    public function getPais()
    {
        return $this->pais;
    }
}