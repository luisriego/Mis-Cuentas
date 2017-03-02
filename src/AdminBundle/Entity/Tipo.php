<?php

namespace AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tipo
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Tipo
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=255)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="slug", type="string", length=255)
     */
    private $slug;

    /**
     * @var boolean
     *
     * @ORM\Column(name="operacion", type="boolean")
     */
    private $operacion;

    /**
     * @var boolean
     *
     * @ORM\Column(name="fijo", type="boolean")
     */
    private $fijo;

    /**
     * @var integer
     *
     * @ORM\ManyToOne(targetEntity="AdminBundle\Entity\Grupo")
     */
    private $grupo;


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
     * Set nombre
     *
     * @param string $nombre
     * @return Tipo
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
     * Set slug
     *
     * @param string $slug
     * @return Tipo
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get slug
     *
     * @return string 
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Set operacion
     *
     * @param boolean $operacion
     * @return Tipo
     */
    public function setOperacion($operacion)
    {
        $this->operacion = $operacion;

        return $this;
    }

    /**
     * Get operacion
     *
     * @return boolean 
     */
    public function getOperacion()
    {
        return $this->operacion;
    }

    /**
     * Set fijo
     *
     * @param boolean $fijo
     * @return Tipo
     */
    public function setFijo($fijo)
    {
        $this->fijo = $fijo;

        return $this;
    }

    /**
     * Get fijo
     *
     * @return boolean 
     */
    public function getFijo()
    {
        return $this->fijo;
    }

    /**
     * Set grupo
     *
     * @param integer $grupo
     * @return Tipo
     */
    public function setGrupo($grupo)
    {
        $this->grupo = $grupo;

        return $this;
    }

    /**
     * Get grupo
     *
     * @return integer
     */
    public function getGrupoo()
    {
        return $this->grupo;
    }

    public function __toString()
    {
        return $this->getNombre();
    }
}
