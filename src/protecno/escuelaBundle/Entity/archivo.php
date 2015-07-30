<?php

namespace protecno\escuelaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * archivo
 */
class archivo
{
   
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $titulo;

    /**
     * @var string
     */
    private $path;

    /**
     * @var string
     */
    private $imagen;

    /**
     * @var \DateTime
     */
    private $updated;


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
     * Set titulo
     *
     * @param string $titulo
     * @return archivo
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    
        return $this;
    }

    /**
     * Get titulo
     *
     * @return string 
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set path
     *
     * @param string $path
     * @return archivo
     */
    public function setPath($path)
    {
        $this->path = $path;
    
        return $this;
    }

    /**
     * Get path
     *
     * @return string 
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Set imagen
     *
     * @param string $imagen
     * @return archivo
     */
    public function setImagen($imagen)
    {
        $this->imagen = $imagen;
    
        return $this;
    }

    /**
     * Get imagen
     *
     * @return string 
     */
    public function getImagen()
    {
        return $this->imagen;
    }

    /**
     * Set updated
     *
     * @param \DateTime $updated
     * @return archivo
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;
    
        return $this;
    }

    /**
     * Get updated
     *
     * @return \DateTime 
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * Manages the copying of the file to the relevant place on the server
     */
    public function upload($dir='perfil')
    {
        // the file property can be empty if the field is not required
        if (null === $this->getImagen()) {
            return;
        }

        // we use the original file name here but you should
        // sanitize it at least to avoid any security issues

        // move takes the target directory and target filename as params
        $this->getImagen()->move(
            $this->getUploadRootDir($dir),
            time().$this->getImagen()->getClientOriginalName()
        );

        // set the path property to the filename where you've saved the file
        $this->path = time().$this->getImagen()->getClientOriginalName();
        $this->setUpdated(new \DateTime("now"));
        $this->imagen=$this->getUploadRootDir($dir).$this->path;
        // clean up the f$this->path = $this->getFile()->getClientOriginalName();ile property as you won't need it anymore
        //$this->setImagen(null);
    }

     /**
     * Updates the hash value to force the preUpdate and postUpdate events to fire
     */
   
    public function getAbsolutePath()
    {
        return null === $this->path
            ? null
            : $this->getUploadRootDir().'/'.$this->path;
    }

    public function getWebPath()
    {
        return null === $this->path
            ? null
            : $this->getUploadDir().'/'.$this->path;
    }

    protected function getUploadRootDir($dir='perfil')
    {
        // the absolute directory path where uploaded
        // documents should be saved
        return __DIR__.'/../../../../web/'.$this->getUploadDir($dir);
    }

    protected function getUploadDir($dir='perfil')
    {
        // get rid of the __DIR__ so it doesn't screw up
        // when displaying uploaded doc/image in the view.
        return 'images/'.$dir;
    }

   public function __toString()
   { 
     return $this->titulo;
    }
}