<?php

namespace protecno\escuelaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * padresInformacionDeContacto
 */
class padresInformacionDeContacto
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $oficinaDireccioLinea1;

    /**
     * @var string
     */
    private $oficinaDireccionLinea2;

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
    private $pais;

    /**
     * @var string
     */
    private $telefonoDeLaOficina1;

    /**
     * @var integer
     */
    private $telefonoDeLaOficina2;

    /**
     * @var integer
     */
    private $telefonoMovilNo;


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
     * Set oficinaDireccioLinea1
     *
     * @param string $oficinaDireccioLinea1
     * @return padresInformacionDeContacto
     */
    public function setOficinaDireccioLinea1($oficinaDireccioLinea1)
    {
        $this->oficinaDireccioLinea1 = $oficinaDireccioLinea1;
    
        return $this;
    }

    /**
     * Get oficinaDireccioLinea1
     *
     * @return string 
     */
    public function getOficinaDireccioLinea1()
    {
        return $this->oficinaDireccioLinea1;
    }

    /**
     * Set oficinaDireccionLinea2
     *
     * @param string $oficinaDireccionLinea2
     * @return padresInformacionDeContacto
     */
    public function setOficinaDireccionLinea2($oficinaDireccionLinea2)
    {
        $this->oficinaDireccionLinea2 = $oficinaDireccionLinea2;
    
        return $this;
    }

    /**
     * Get oficinaDireccionLinea2
     *
     * @return string 
     */
    public function getOficinaDireccionLinea2()
    {
        return $this->oficinaDireccionLinea2;
    }

    /**
     * Set ciudad
     *
     * @param string $ciudad
     * @return padresInformacionDeContacto
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
     * @return padresInformacionDeContacto
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
     * Set pais
     *
     * @param string $pais
     * @return padresInformacionDeContacto
     */
    public function setPais($pais)
    {
        $this->pais = $pais;
    
        return $this;
    }

    /**
     * Get pais
     *
     * @return string 
     */
    public function getPais()
    {
        return $this->pais;
    }

    /**
     * Set telefonoDeLaOficina1
     *
     * @param string $telefonoDeLaOficina1
     * @return padresInformacionDeContacto
     */
    public function setTelefonoDeLaOficina1($telefonoDeLaOficina1)
    {
        $this->telefonoDeLaOficina1 = $telefonoDeLaOficina1;
    
        return $this;
    }

    /**
     * Get telefonoDeLaOficina1
     *
     * @return string 
     */
    public function getTelefonoDeLaOficina1()
    {
        return $this->telefonoDeLaOficina1;
    }

    /**
     * Set telefonoDeLaOficina2
     *
     * @param integer $telefonoDeLaOficina2
     * @return padresInformacionDeContacto
     */
    public function setTelefonoDeLaOficina2($telefonoDeLaOficina2)
    {
        $this->telefonoDeLaOficina2 = $telefonoDeLaOficina2;
    
        return $this;
    }

    /**
     * Get telefonoDeLaOficina2
     *
     * @return integer 
     */
    public function getTelefonoDeLaOficina2()
    {
        return $this->telefonoDeLaOficina2;
    }

    /**
     * Set telefonoMovilNo
     *
     * @param integer $telefonoMovilNo
     * @return padresInformacionDeContacto
     */
    public function setTelefonoMovilNo($telefonoMovilNo)
    {
        $this->telefonoMovilNo = $telefonoMovilNo;
    
        return $this;
    }

    /**
     * Get telefonoMovilNo
     *
     * @return integer 
     */
    public function getTelefonoMovilNo()
    {
        return $this->telefonoMovilNo;
    }
}