<?php

namespace protecno\escuelaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * admisionDelEmpleado
 */
class admisionDelEmpleado
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $nuemeroDelEmpleado;

    /**
     * @var \DateTime
     */
    private $diaDeIngreso;

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
    private $eMail;

    /**
     * @var boolean
     */
    private $genero;

    /**
     * @var \DateTime
     */
    private $fechaDeNacimiento;

    /**
     * @var string
     */
    private $tituloProfesional;

    /**
     * @var string
     */
    private $calificacion;

    /**
     * @var string
     */
    private $experienciaInfo;

    /**
     * @var \DateTime
     */
    private $experienciaTotal;

    /**
     * @var string
     */
    private $estadoCivil;

    /**
     * @var string
     */
    private $nombreDelPadre;

    /**
     * @var string
     */
    private $nombreDeLaMadre;

    /**
     * @var string
     */
    private $celular;

    /**
     * @var string
     */
    private $telefonoDeCasa;


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
     * Set nuemeroDelEmpleado
     *
     * @param integer $nuemeroDelEmpleado
     * @return admisionDelEmpleado
     */
    public function setNuemeroDelEmpleado($nuemeroDelEmpleado)
    {
        $this->nuemeroDelEmpleado = $nuemeroDelEmpleado;
    
        return $this;
    }

    /**
     * Get nuemeroDelEmpleado
     *
     * @return integer 
     */
    public function getNuemeroDelEmpleado()
    {
        return $this->nuemeroDelEmpleado;
    }

    /**
     * Set diaDeIngreso
     *
     * @param \DateTime $diaDeIngreso
     * @return admisionDelEmpleado
     */
    public function setDiaDeIngreso($diaDeIngreso)
    {
        $this->diaDeIngreso = $diaDeIngreso;
    
        return $this;
    }

    /**
     * Get diaDeIngreso
     *
     * @return \DateTime 
     */
    public function getDiaDeIngreso()
    {
        return $this->diaDeIngreso;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return admisionDelEmpleado
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
     * @return admisionDelEmpleado
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
     * @return admisionDelEmpleado
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
     * Set eMail
     *
     * @param string $eMail
     * @return admisionDelEmpleado
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
     * Set genero
     *
     * @param boolean $genero
     * @return admisionDelEmpleado
     */
    public function setGenero($genero)
    {
        $this->genero = $genero;
    
        return $this;
    }

    /**
     * Get genero
     *
     * @return boolean 
     */
    public function getGenero()
    {
        return $this->genero;
    }

    /**
     * Set fechaDeNacimiento
     *
     * @param \DateTime $fechaDeNacimiento
     * @return admisionDelEmpleado
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
     * Set tituloProfesional
     *
     * @param string $tituloProfesional
     * @return admisionDelEmpleado
     */
    public function setTituloProfesional($tituloProfesional)
    {
        $this->tituloProfesional = $tituloProfesional;
    
        return $this;
    }

    /**
     * Get tituloProfesional
     *
     * @return string 
     */
    public function getTituloProfesional()
    {
        return $this->tituloProfesional;
    }

    /**
     * Set calificacion
     *
     * @param string $calificacion
     * @return admisionDelEmpleado
     */
    public function setCalificacion($calificacion)
    {
        $this->calificacion = $calificacion;
    
        return $this;
    }

    /**
     * Get calificacion
     *
     * @return string 
     */
    public function getCalificacion()
    {
        return $this->calificacion;
    }

    /**
     * Set experienciaInfo
     *
     * @param string $experienciaInfo
     * @return admisionDelEmpleado
     */
    public function setExperienciaInfo($experienciaInfo)
    {
        $this->experienciaInfo = $experienciaInfo;
    
        return $this;
    }

    /**
     * Get experienciaInfo
     *
     * @return string 
     */
    public function getExperienciaInfo()
    {
        return $this->experienciaInfo;
    }

    /**
     * Set experienciaTotal
     *
     * @param \DateTime $experienciaTotal
     * @return admisionDelEmpleado
     */
    public function setExperienciaTotal($experienciaTotal)
    {
        $this->experienciaTotal = $experienciaTotal;
    
        return $this;
    }

    /**
     * Get experienciaTotal
     *
     * @return \DateTime 
     */
    public function getExperienciaTotal()
    {
        return $this->experienciaTotal;
    }

    /**
     * Set estadoCivil
     *
     * @param string $estadoCivil
     * @return admisionDelEmpleado
     */
    public function setEstadoCivil($estadoCivil)
    {
        $this->estadoCivil = $estadoCivil;
    
        return $this;
    }

    /**
     * Get estadoCivil
     *
     * @return string 
     */
    public function getEstadoCivil()
    {
        return $this->estadoCivil;
    }

    /**
     * Set nombreDelPadre
     *
     * @param string $nombreDelPadre
     * @return admisionDelEmpleado
     */
    public function setNombreDelPadre($nombreDelPadre)
    {
        $this->nombreDelPadre = $nombreDelPadre;
    
        return $this;
    }

    /**
     * Get nombreDelPadre
     *
     * @return string 
     */
    public function getNombreDelPadre()
    {
        return $this->nombreDelPadre;
    }

    /**
     * Set nombreDeLaMadre
     *
     * @param string $nombreDeLaMadre
     * @return admisionDelEmpleado
     */
    public function setNombreDeLaMadre($nombreDeLaMadre)
    {
        $this->nombreDeLaMadre = $nombreDeLaMadre;
    
        return $this;
    }

    /**
     * Get nombreDeLaMadre
     *
     * @return string 
     */
    public function getNombreDeLaMadre()
    {
        return $this->nombreDeLaMadre;
    }

    /**
     * Set celular
     *
     * @param string $celular
     * @return admisionDelEmpleado
     */
    public function setCelular($celular)
    {
        $this->celular = $celular;
    
        return $this;
    }

    /**
     * Get celular
     *
     * @return string 
     */
    public function getCelular()
    {
        return $this->celular;
    }

    /**
     * Set telefonoDeCasa
     *
     * @param string $telefonoDeCasa
     * @return admisionDelEmpleado
     */
    public function setTelefonoDeCasa($telefonoDeCasa)
    {
        $this->telefonoDeCasa = $telefonoDeCasa;
    
        return $this;
    }

    /**
     * Get telefonoDeCasa
     *
     * @return string 
     */
    public function getTelefonoDeCasa()
    {
        return $this->telefonoDeCasa;
    }
    /**
     * @var \protecno\escuelaBundle\Entity\anadirEmpleadoCategoria
     */
    private $anadirEmpleadoCategoria;

    /**
     * @var \protecno\escuelaBundle\Entity\anadirDepartamentoEmpleo
     */
    private $anadirDepartamentoEmpleo;

    /**
     * @var \protecno\escuelaBundle\Entity\anadirEmpleadoPosicion
     */
    private $anadirEmpleadoPosicion;

    /**
     * @var \protecno\escuelaBundle\Entity\anadirEmpleadoGrado
     */
    private $anadirEmpleadoGrado;


    /**
     * Set anadirEmpleadoCategoria
     *
     * @param \protecno\escuelaBundle\Entity\anadirEmpleadoCategoria $anadirEmpleadoCategoria
     * @return admisionDelEmpleado
     */
    public function setAnadirEmpleadoCategoria(\protecno\escuelaBundle\Entity\anadirEmpleadoCategoria $anadirEmpleadoCategoria = null)
    {
        $this->anadirEmpleadoCategoria = $anadirEmpleadoCategoria;
    
        return $this;
    }

    /**
     * Get anadirEmpleadoCategoria
     *
     * @return \protecno\escuelaBundle\Entity\anadirEmpleadoCategoria 
     */
    public function getAnadirEmpleadoCategoria()
    {
        return $this->anadirEmpleadoCategoria;
    }

    /**
     * Set anadirDepartamentoEmpleo
     *
     * @param \protecno\escuelaBundle\Entity\anadirDepartamentoEmpleo $anadirDepartamentoEmpleo
     * @return admisionDelEmpleado
     */
    public function setAnadirDepartamentoEmpleo(\protecno\escuelaBundle\Entity\anadirDepartamentoEmpleo $anadirDepartamentoEmpleo = null)
    {
        $this->anadirDepartamentoEmpleo = $anadirDepartamentoEmpleo;
    
        return $this;
    }

    /**
     * Get anadirDepartamentoEmpleo
     *
     * @return \protecno\escuelaBundle\Entity\anadirDepartamentoEmpleo 
     */
    public function getAnadirDepartamentoEmpleo()
    {
        return $this->anadirDepartamentoEmpleo;
    }

    /**
     * Set anadirEmpleadoPosicion
     *
     * @param \protecno\escuelaBundle\Entity\anadirEmpleadoPosicion $anadirEmpleadoPosicion
     * @return admisionDelEmpleado
     */
    public function setAnadirEmpleadoPosicion(\protecno\escuelaBundle\Entity\anadirEmpleadoPosicion $anadirEmpleadoPosicion = null)
    {
        $this->anadirEmpleadoPosicion = $anadirEmpleadoPosicion;
    
        return $this;
    }

    /**
     * Get anadirEmpleadoPosicion
     *
     * @return \protecno\escuelaBundle\Entity\anadirEmpleadoPosicion 
     */
    public function getAnadirEmpleadoPosicion()
    {
        return $this->anadirEmpleadoPosicion;
    }

    /**
     * Set anadirEmpleadoGrado
     *
     * @param \protecno\escuelaBundle\Entity\anadirEmpleadoGrado $anadirEmpleadoGrado
     * @return admisionDelEmpleado
     */
    public function setAnadirEmpleadoGrado(\protecno\escuelaBundle\Entity\anadirEmpleadoGrado $anadirEmpleadoGrado = null)
    {
        $this->anadirEmpleadoGrado = $anadirEmpleadoGrado;
    
        return $this;
    }

    /**
     * Get anadirEmpleadoGrado
     *
     * @return \protecno\escuelaBundle\Entity\anadirEmpleadoGrado 
     */
    public function getAnadirEmpleadoGrado()
    {
        return $this->anadirEmpleadoGrado;
    }
}