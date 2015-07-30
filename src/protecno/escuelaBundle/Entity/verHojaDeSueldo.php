<?php

namespace protecno\escuelaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * verHojaDeSueldo
 */
class verHojaDeSueldo
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $mes;

    /**
     * @var \protecno\escuelaBundle\Entity\anadirDepartamentoEmpleo
     */
    private $anadirDepartamentoEmpleo;


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
     * Set mes
     *
     * @param \DateTime $mes
     * @return verHojaDeSueldo
     */
    public function setMes($mes)
    {
        $this->mes = $mes;
    
        return $this;
    }

    /**
     * Get mes
     *
     * @return \DateTime 
     */
    public function getMes()
    {
        return $this->mes;
    }

    /**
     * Set anadirDepartamentoEmpleo
     *
     * @param \protecno\escuelaBundle\Entity\anadirDepartamentoEmpleo $anadirDepartamentoEmpleo
     * @return verHojaDeSueldo
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
}