<?php

namespace protecno\escuelaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * configuracionesGenerales
 */
class configuracionesGenerales
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nombreDelColegio;

    /**
     * @var string
     */
    private $direccionDelColegio;

    /**
     * @var string
     */
    private $telefonoDelColegio;

    /**
     * @var \DateTime
     */
    private $ejercicioFechaDeInicio;

    /**
     * @var \DateTime
     */
    private $ejercicioFechaDelFinal;

    /**
     * @var string
     */
    private $numeroDeReciboPartir;

    /**
     * @var string
     */
    private $tipoDeMoneda;

    /**
     * @var boolean
     */
    private $habilitarIncrementoAutomaticoDeAdmisionEstudiantilNo;

    /**
     * @var boolean
     */
    private $habilitarIncrementoAutomaticoDelEmpleadoNo;

    /**
     * @var boolean
     */
    private $habilitarNoticiasModeracionDeComentarios;

    /**
     * @var boolean
     */
    private $habilitarHermano;

    /**
     * @var boolean
     */
    private $habilitarCambiDeContrasenaEnElPrimerInicioDeSesion;

    /**
     * @var boolean
     */
    private $activarNumeroDeRolloParaEstudiantes;

    /**
     * @var boolean
     */
    private $habilitarOauth;


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
     * Set nombreDelColegio
     *
     * @param string $nombreDelColegio
     * @return configuracionesGenerales
     */
    public function setNombreDelColegio($nombreDelColegio)
    {
        $this->nombreDelColegio = $nombreDelColegio;
    
        return $this;
    }

    /**
     * Get nombreDelColegio
     *
     * @return string 
     */
    public function getNombreDelColegio()
    {
        return $this->nombreDelColegio;
    }

    /**
     * Set direccionDelColegio
     *
     * @param string $direccionDelColegio
     * @return configuracionesGenerales
     */
    public function setDireccionDelColegio($direccionDelColegio)
    {
        $this->direccionDelColegio = $direccionDelColegio;
    
        return $this;
    }

    /**
     * Get direccionDelColegio
     *
     * @return string 
     */
    public function getDireccionDelColegio()
    {
        return $this->direccionDelColegio;
    }

    /**
     * Set telefonoDelColegio
     *
     * @param string $telefonoDelColegio
     * @return configuracionesGenerales
     */
    public function setTelefonoDelColegio($telefonoDelColegio)
    {
        $this->telefonoDelColegio = $telefonoDelColegio;
    
        return $this;
    }

    /**
     * Get telefonoDelColegio
     *
     * @return string 
     */
    public function getTelefonoDelColegio()
    {
        return $this->telefonoDelColegio;
    }

    /**
     * Set ejercicioFechaDeInicio
     *
     * @param \DateTime $ejercicioFechaDeInicio
     * @return configuracionesGenerales
     */
    public function setEjercicioFechaDeInicio($ejercicioFechaDeInicio)
    {
        $this->ejercicioFechaDeInicio = $ejercicioFechaDeInicio;
    
        return $this;
    }

    /**
     * Get ejercicioFechaDeInicio
     *
     * @return \DateTime 
     */
    public function getEjercicioFechaDeInicio()
    {
        return $this->ejercicioFechaDeInicio;
    }

    /**
     * Set ejercicioFechaDelFinal
     *
     * @param \DateTime $ejercicioFechaDelFinal
     * @return configuracionesGenerales
     */
    public function setEjercicioFechaDelFinal($ejercicioFechaDelFinal)
    {
        $this->ejercicioFechaDelFinal = $ejercicioFechaDelFinal;
    
        return $this;
    }

    /**
     * Get ejercicioFechaDelFinal
     *
     * @return \DateTime 
     */
    public function getEjercicioFechaDelFinal()
    {
        return $this->ejercicioFechaDelFinal;
    }

    /**
     * Set numeroDeReciboPartir
     *
     * @param string $numeroDeReciboPartir
     * @return configuracionesGenerales
     */
    public function setNumeroDeReciboPartir($numeroDeReciboPartir)
    {
        $this->numeroDeReciboPartir = $numeroDeReciboPartir;
    
        return $this;
    }

    /**
     * Get numeroDeReciboPartir
     *
     * @return string 
     */
    public function getNumeroDeReciboPartir()
    {
        return $this->numeroDeReciboPartir;
    }

    /**
     * Set tipoDeMoneda
     *
     * @param string $tipoDeMoneda
     * @return configuracionesGenerales
     */
    public function setTipoDeMoneda($tipoDeMoneda)
    {
        $this->tipoDeMoneda = $tipoDeMoneda;
    
        return $this;
    }

    /**
     * Get tipoDeMoneda
     *
     * @return string 
     */
    public function getTipoDeMoneda()
    {
        return $this->tipoDeMoneda;
    }

    /**
     * Set habilitarIncrementoAutomaticoDeAdmisionEstudiantilNo
     *
     * @param boolean $habilitarIncrementoAutomaticoDeAdmisionEstudiantilNo
     * @return configuracionesGenerales
     */
    public function setHabilitarIncrementoAutomaticoDeAdmisionEstudiantilNo($habilitarIncrementoAutomaticoDeAdmisionEstudiantilNo)
    {
        $this->habilitarIncrementoAutomaticoDeAdmisionEstudiantilNo = $habilitarIncrementoAutomaticoDeAdmisionEstudiantilNo;
    
        return $this;
    }

    /**
     * Get habilitarIncrementoAutomaticoDeAdmisionEstudiantilNo
     *
     * @return boolean 
     */
    public function getHabilitarIncrementoAutomaticoDeAdmisionEstudiantilNo()
    {
        return $this->habilitarIncrementoAutomaticoDeAdmisionEstudiantilNo;
    }

    /**
     * Set habilitarIncrementoAutomaticoDelEmpleadoNo
     *
     * @param boolean $habilitarIncrementoAutomaticoDelEmpleadoNo
     * @return configuracionesGenerales
     */
    public function setHabilitarIncrementoAutomaticoDelEmpleadoNo($habilitarIncrementoAutomaticoDelEmpleadoNo)
    {
        $this->habilitarIncrementoAutomaticoDelEmpleadoNo = $habilitarIncrementoAutomaticoDelEmpleadoNo;
    
        return $this;
    }

    /**
     * Get habilitarIncrementoAutomaticoDelEmpleadoNo
     *
     * @return boolean 
     */
    public function getHabilitarIncrementoAutomaticoDelEmpleadoNo()
    {
        return $this->habilitarIncrementoAutomaticoDelEmpleadoNo;
    }

    /**
     * Set habilitarNoticiasModeracionDeComentarios
     *
     * @param boolean $habilitarNoticiasModeracionDeComentarios
     * @return configuracionesGenerales
     */
    public function setHabilitarNoticiasModeracionDeComentarios($habilitarNoticiasModeracionDeComentarios)
    {
        $this->habilitarNoticiasModeracionDeComentarios = $habilitarNoticiasModeracionDeComentarios;
    
        return $this;
    }

    /**
     * Get habilitarNoticiasModeracionDeComentarios
     *
     * @return boolean 
     */
    public function getHabilitarNoticiasModeracionDeComentarios()
    {
        return $this->habilitarNoticiasModeracionDeComentarios;
    }

    /**
     * Set habilitarHermano
     *
     * @param boolean $habilitarHermano
     * @return configuracionesGenerales
     */
    public function setHabilitarHermano($habilitarHermano)
    {
        $this->habilitarHermano = $habilitarHermano;
    
        return $this;
    }

    /**
     * Get habilitarHermano
     *
     * @return boolean 
     */
    public function getHabilitarHermano()
    {
        return $this->habilitarHermano;
    }

    /**
     * Set habilitarCambiDeContrasenaEnElPrimerInicioDeSesion
     *
     * @param boolean $habilitarCambiDeContrasenaEnElPrimerInicioDeSesion
     * @return configuracionesGenerales
     */
    public function setHabilitarCambiDeContrasenaEnElPrimerInicioDeSesion($habilitarCambiDeContrasenaEnElPrimerInicioDeSesion)
    {
        $this->habilitarCambiDeContrasenaEnElPrimerInicioDeSesion = $habilitarCambiDeContrasenaEnElPrimerInicioDeSesion;
    
        return $this;
    }

    /**
     * Get habilitarCambiDeContrasenaEnElPrimerInicioDeSesion
     *
     * @return boolean 
     */
    public function getHabilitarCambiDeContrasenaEnElPrimerInicioDeSesion()
    {
        return $this->habilitarCambiDeContrasenaEnElPrimerInicioDeSesion;
    }

    /**
     * Set activarNumeroDeRolloParaEstudiantes
     *
     * @param boolean $activarNumeroDeRolloParaEstudiantes
     * @return configuracionesGenerales
     */
    public function setActivarNumeroDeRolloParaEstudiantes($activarNumeroDeRolloParaEstudiantes)
    {
        $this->activarNumeroDeRolloParaEstudiantes = $activarNumeroDeRolloParaEstudiantes;
    
        return $this;
    }

    /**
     * Get activarNumeroDeRolloParaEstudiantes
     *
     * @return boolean 
     */
    public function getActivarNumeroDeRolloParaEstudiantes()
    {
        return $this->activarNumeroDeRolloParaEstudiantes;
    }

    /**
     * Set habilitarOauth
     *
     * @param boolean $habilitarOauth
     * @return configuracionesGenerales
     */
    public function setHabilitarOauth($habilitarOauth)
    {
        $this->habilitarOauth = $habilitarOauth;
    
        return $this;
    }

    /**
     * Get habilitarOauth
     *
     * @return boolean 
     */
    public function getHabilitarOauth()
    {
        return $this->habilitarOauth;
    }
    /**
     * @var boolean
     */
    private $incrementoDeAdmisionEstudiantilNo;

    /**
     * @var boolean
     */
    private $incrementoDelEmpleadoNo;

    /**
     * @var boolean
     */
    private $noticiasModeracionDeComentarios;

    /**
     * @var boolean
     */
    private $cambioDeContrasenaInicioDeSesion;


    /**
     * Set incrementoDeAdmisionEstudiantilNo
     *
     * @param boolean $incrementoDeAdmisionEstudiantilNo
     * @return configuracionesGenerales
     */
    public function setIncrementoDeAdmisionEstudiantilNo($incrementoDeAdmisionEstudiantilNo)
    {
        $this->incrementoDeAdmisionEstudiantilNo = $incrementoDeAdmisionEstudiantilNo;
    
        return $this;
    }

    /**
     * Get incrementoDeAdmisionEstudiantilNo
     *
     * @return boolean 
     */
    public function getIncrementoDeAdmisionEstudiantilNo()
    {
        return $this->incrementoDeAdmisionEstudiantilNo;
    }

    /**
     * Set incrementoDelEmpleadoNo
     *
     * @param boolean $incrementoDelEmpleadoNo
     * @return configuracionesGenerales
     */
    public function setIncrementoDelEmpleadoNo($incrementoDelEmpleadoNo)
    {
        $this->incrementoDelEmpleadoNo = $incrementoDelEmpleadoNo;
    
        return $this;
    }

    /**
     * Get incrementoDelEmpleadoNo
     *
     * @return boolean 
     */
    public function getIncrementoDelEmpleadoNo()
    {
        return $this->incrementoDelEmpleadoNo;
    }

    /**
     * Set noticiasModeracionDeComentarios
     *
     * @param boolean $noticiasModeracionDeComentarios
     * @return configuracionesGenerales
     */
    public function setNoticiasModeracionDeComentarios($noticiasModeracionDeComentarios)
    {
        $this->noticiasModeracionDeComentarios = $noticiasModeracionDeComentarios;
    
        return $this;
    }

    /**
     * Get noticiasModeracionDeComentarios
     *
     * @return boolean 
     */
    public function getNoticiasModeracionDeComentarios()
    {
        return $this->noticiasModeracionDeComentarios;
    }

    /**
     * Set cambioDeContrasenaInicioDeSesion
     *
     * @param boolean $cambioDeContrasenaInicioDeSesion
     * @return configuracionesGenerales
     */
    public function setCambioDeContrasenaInicioDeSesion($cambioDeContrasenaInicioDeSesion)
    {
        $this->cambioDeContrasenaInicioDeSesion = $cambioDeContrasenaInicioDeSesion;
    
        return $this;
    }

    /**
     * Get cambioDeContrasenaInicioDeSesion
     *
     * @return boolean 
     */
    public function getCambioDeContrasenaInicioDeSesion()
    {
        return $this->cambioDeContrasenaInicioDeSesion;
    }
}