<?php

namespace protecno\escuelaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * alumno
 */
class alumno
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $noDeAdmision;

    /**
     * @var \DateTime 
     */
    private $fechaDeAdmision;

    /**
     * @var string
     */
    private $nombre;

    /**
     * @var string
     */
    private $segundoNombre;

    /**
     * @var string
     */
    private $apellidoPaterno;

    /**
     * @var string
     */
    private $apellidoMaterno;

    /**
     * @var string
     */
    private $genero;

    /**
     * @var string
     */
    private $grupoSanguineo;

    /**
     * @var string
     */
    private $lugarDeNacimiento;

    /**
     * @var string
     */
    private $nacionalidad;

 /**
     * @var \protecno\escuelaBundle\Entity\anadirUsuario
     */
    private $agrego;

    /**
     * @var \protecno\escuelaBundle\Entity\anadirUsuario
     */
    private $modifico;

    /**
     * @var \protecno\escuelaBundle\Entity\archivo
     */
    private $archivo;
    
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
     * Set noDeAdmision
     *
     * @param integer $noDeAdmision
     * @return admision
     */
    public function setNoDeAdmision($noDeAdmision)
    {
        $this->noDeAdmision = $noDeAdmision;
    
        return $this;
    }

    /**
     * Get noDeAdmision
     *
     * @return integer 
     */
    public function getNoDeAdmision()
    {
        return $this->noDeAdmision;
    }

    /**
     * Set fechaDeAdmision
     *
     * @param \DateTime $fechaDeAdmision
     * @return admision
     */
    public function setFechaDeAdmision($fechaDeAdmision)
    {
        $this->fechaDeAdmision = $fechaDeAdmision;
    
        return $this;
    }

    /**
     * Get fechaDeAdmision
     *
     * @return \DateTime 
     */
    public function getFechaDeAdmision()
    {
        return $this->fechaDeAdmision;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return admision
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    
        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set segundoNombre
     *
     * @param string $segundoNombre
     * @return admision
     */
    public function setSegundoNombre($segundoNombre)
    {
        $this->segundoNombre = $segundoNombre;
    
        return $this;
    }

    /**
     * Get segundoNombre
     *
     * @return string 
     */
    public function getSegundoNombre()
    {
        return $this->segundoNombre;
    }

    /**
     * Set apellidoPaterno
     *
     * @param string $apellidoPaterno
     * @return admision
     */
    public function setApellidoPaterno($apellidoPaterno)
    {
        $this->apellidoPaterno = $apellidoPaterno;
    
        return $this;
    }

    /**
     * Get apellidoPaterno
     *
     * @return string 
     */
    public function getApellidoPaterno()
    {
        return $this->apellidoPaterno;
    }

    /**
     * Set apellidoMaterno
     *
     * @param string $apellidoMaterno
     * @return admision
     */
    public function setApellidoMaterno($apellidoMaterno)
    {
        $this->apellidoMaterno = $apellidoMaterno;
    
        return $this;
    }

    /**
     * Get apellidoMaterno
     *
     * @return string 
     */
    public function getApellidoMaterno()
    {
        return $this->apellidoMaterno;
    }

    /**
     * Set genero
     *
     * @param string $genero
     * @return admision
     */
    public function setGenero($genero)
    {
        $this->genero = $genero;
    
        return $this;
    }

    /**
     * Get genero
     *
     * @return string 
     */
    public function getGenero()
    {
        return $this->genero;
    }

    /**
     * Set grupoSanguineo
     *
     * @param string $grupoSanguineo
     * @return admision
     */
    public function setGrupoSanguineo($grupoSanguineo)
    {
        $this->grupoSanguineo = $grupoSanguineo;
    
        return $this;
    }

    /**
     * Get grupoSanguineo
     *
     * @return string 
     */
    public function getGrupoSanguineo()
    {
        return $this->grupoSanguineo;
    }

    /**
     * Set lugarDeNacimiento
     *
     * @param string $lugarDeNacimiento
     * @return admision
     */
    public function setLugarDeNacimiento($lugarDeNacimiento)
    {
        $this->lugarDeNacimiento = $lugarDeNacimiento;
    
        return $this;
    }

    /**
     * Get lugarDeNacimiento
     *
     * @return string 
     */
    public function getLugarDeNacimiento()
    {
        return $this->lugarDeNacimiento;
    }

    /**
     * Set nacionalidad
     *
     * @param string $nacionalidad
     * @return admision
     */
    public function setNacionalidad($nacionalidad)
    {
        $this->nacionalidad = $nacionalidad;
    
        return $this;
    }

    /**
     * Get nacionalidad
     *
     * @return string 
     */
    public function getNacionalidad()
    {
        return $this->nacionalidad;
    }
   
    /**
     * Set agrego
     *
     * @param \protecno\escuelaBundle\Entity\anadirUsuario $agrego
     * @return alumno
     */
    public function setAgrego(\protecno\escuelaBundle\Entity\anadirUsuario $agrego = null)
    {
        $this->agrego = $agrego;
    
        return $this;
    }

    /**
     * Get agrego
     *
     * @return \protecno\escuelaBundle\Entity\anadirUsuario 
     */
    public function getAgrego()
    {
        return $this->agrego;
    }

    /**
     * Set modifico
     *
     * @param \protecno\escuelaBundle\Entity\anadirUsuario $modifico
     * @return alumno
     */
    public function setModifico(\protecno\escuelaBundle\Entity\anadirUsuario $modifico = null)
    {
        $this->modifico = $modifico;
    
        return $this;
    }

    /**
     * Get modifico
     *
     * @return \protecno\escuelaBundle\Entity\anadirUsuario 
     */
    public function getModifico()
    {
        return $this->modifico;
    }

    /**
     * Set archivo
     *
     * @param \protecno\escuelaBundle\Entity\archivo $archivo
     * @return alumno
     */
    public function setArchivo(\protecno\escuelaBundle\Entity\archivo $archivo = null)
    {
        $this->archivo = $archivo;
    
        return $this;
    }

    /**
     * Get archivo
     *
     * @return \protecno\escuelaBundle\Entity\archivo 
     */
    public function getArchivo()
    {
        return $this->archivo;
    }
    /**
     * @var \DateTime
     */
    private $fechaDeNacimiento;


    /**
     * Set fechaDeNacimiento
     *
     * @param \DateTime $fechaDeNacimiento
     * @return alumno
     */
    public function setFechaDeNacimiento($fechaDeNacimiento)
    {
        $this->fechaDeNacimiento = $fechaDeNacimiento;
    
        return $this;
    }

    /**
     * Get fechaDeNacimiento
     *
     * @return \DateTime 
     */
    public function getFechaDeNacimiento()
    {
        return $this->fechaDeNacimiento;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function __toString()
    {
        return $this->nombre.' '.$this->apellidoPaterno.' '.$this->apellidoMaterno;
    }
}