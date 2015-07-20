<?php

namespace protecno\escuelaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * libro
 */
class libro
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $numeroDeLibro;

    /**
     * @var string
     */
    private $titulo;

    /**
     * @var string
     */
    private $autor;

    /**
     * @var boolean
     */
    private $etiquetas;

    /**
     * @var string
     */
    private $etiquetasPersonalizadas;

    /**
     * @var integer
     */
    private $numeroDeCopias;


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
     * Set numeroDeLibro
     *
     * @param integer $numeroDeLibro
     * @return libro
     */
    public function setNumeroDeLibro($numeroDeLibro)
    {
        $this->numeroDeLibro = $numeroDeLibro;
    
        return $this;
    }

    /**
     * Get numeroDeLibro
     *
     * @return integer 
     */
    public function getNumeroDeLibro()
    {
        return $this->numeroDeLibro;
    }

    /**
     * Set titulo
     *
     * @param string $titulo
     * @return libro
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
     * Set autor
     *
     * @param string $autor
     * @return libro
     */
    public function setAutor($autor)
    {
        $this->autor = $autor;
    
        return $this;
    }

    /**
     * Get autor
     *
     * @return string 
     */
    public function getAutor()
    {
        return $this->autor;
    }

    /**
     * Set etiquetas
     *
     * @param boolean $etiquetas
     * @return libro
     */
    public function setEtiquetas($etiquetas)
    {
        $this->etiquetas = $etiquetas;
    
        return $this;
    }

    /**
     * Get etiquetas
     *
     * @return boolean 
     */
    public function getEtiquetas()
    {
        return $this->etiquetas;
    }

    /**
     * Set etiquetasPersonalizadas
     *
     * @param string $etiquetasPersonalizadas
     * @return libro
     */
    public function setEtiquetasPersonalizadas($etiquetasPersonalizadas)
    {
        $this->etiquetasPersonalizadas = $etiquetasPersonalizadas;
    
        return $this;
    }

    /**
     * Get etiquetasPersonalizadas
     *
     * @return string 
     */
    public function getEtiquetasPersonalizadas()
    {
        return $this->etiquetasPersonalizadas;
    }

    /**
     * Set numeroDeCopias
     *
     * @param integer $numeroDeCopias
     * @return libro
     */
    public function setNumeroDeCopias($numeroDeCopias)
    {
        $this->numeroDeCopias = $numeroDeCopias;
    
        return $this;
    }

    /**
     * Get numeroDeCopias
     *
     * @return integer 
     */
    public function getNumeroDeCopias()
    {
        return $this->numeroDeCopias;
    }
}