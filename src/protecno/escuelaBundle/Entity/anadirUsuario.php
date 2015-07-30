<?php

namespace protecno\escuelaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
/**
 * anadirUsuario
 */
class anadirUsuario implements UserInterface
{
   
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nombreDelUsuario;
   
    /**
     * @var string
     */
    private $password; 

    /**
     * @var string
     */
    private $salt;

    /**
     * @var integer
     */
    private $idPerfil;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $roles;

    /**
     * @var integer
     */
    private $role;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->roles = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
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
     * Set nombreDelUsuario
     *
     * @param string $nombreDelUsuario
     * @return anadirUsuario
     */
    public function setNombreDelUsuario($nombreDelUsuario)
    {
        $this->nombreDelUsuario = $nombreDelUsuario;
    
        return $this;
    }

    /**
     * Get nombreDelUsuario
     *
     * @return string 
     */
    public function getNombreDelUsuario()
    {
        return $this->nombreDelUsuario;
    }

       /**
     * Set password
     *
     * @param string $password
     * @return anadirUsuario
     */
    public function setPassword($password)
    {
        $this->password = $password;
    
        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }
  

    /**
     * Set salt
     *
     * @param string $salt
     * @return anadirUsuario
     */
    public function setSalt($salt)
    {
        $this->salt = $salt;
    
        return $this;
    }

    /**
     * Get salt
     *
     * @return string 
     */
    public function getSalt()
    {
        return $this->salt;
    }

    /**
     * Set idPerfil
     *
     * @param integer $idPerfil
     * @return anadirUsuario
     */
    public function setIdPerfil($idPerfil)
    {
        $this->idPerfil = $idPerfil;
    
        return $this;
    }

    /**
     * Get idPerfil
     *
     * @return integer 
     */
    public function getIdPerfil()
    {
        return $this->idPerfil;
    }

    /**
     * Add roles
     *
     * @param \protecno\escuelaBundle\Entity\role $roles
     * @return anadirUsuario
     */
    public function addRole(\protecno\escuelaBundle\Entity\role $roles)
    {
        $this->roles[] = $roles;
    
        return $this;
    }

    /**
     * Remove roles
     *
     * @param \protecno\escuelaBundle\Entity\role $roles
     */
    public function removeRole(\protecno\escuelaBundle\Entity\role $roles)
    {
        $this->roles->removeElement($roles);
    }

    /**
     * Get roles
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getRoles()
    {
        $losroles=array();
        foreach ($this->roles as $key) {
            $losroles[]=$key->getName();
        }
        return $losroles;
    }

     /**
     * set role
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function setRole($role)
    {
        $this->role=$role;
        return $this;
    }

     /**
     * Get roles
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getRole()
    {
        return $this->role;
    }

      /**
     * Get username
     *
     * @return string 
     */
    public function getUsername()
    {
        return $this->nombreDelUsuario;
    }
    function eraseCredentials(){}
}