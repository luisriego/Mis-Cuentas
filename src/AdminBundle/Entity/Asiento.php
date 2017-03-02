<?php

namespace AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Asiento
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="AdminBundle\Entity\AsientoRepository")
 */
class Asiento
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
     * @Assert\Length(min = 2)
     */
    private $slug;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="datetime")
     */
    private $fecha;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="vto", type="integer")
     */
    private $vto;

    /**
     * @var integer
     *
     * @ORM\ManyToOne(targetEntity="AdminBundle\Entity\Tipo")
     * @ORM\OrderBy({"nombre" = "ASC"})
     */
    private $tipo;

    /**
     * @var integer
     *
     * @ORM\ManyToOne(targetEntity="AdminBundle\Entity\FPago")
     */
    private $fPago;

    /**
     * @var integer
     *
     * @ORM\Column(name="parcelas", type="integer")
     */
    private $parcelas;

    /**
     * @var string
     *
     * @ORM\Column(name="importe", type="decimal", precision=2, scale=2)
     */
    private $importe;

    /**
     * @var string
     *
     * @ORM\Column(name="anotacion", type="text")
     */
    private $anotacion;

    /**
     * @var boolean
     *
     * @ORM\Column(name="vacaciones", type="boolean")
     */
    private $vacaciones;

    /**
    * @var string
    *
    * @ORM\Column(name="imagen", type="text")
    */
    private $imagen;

    /**
     * @var integer
     *
     * @ORM\Column(name="operacion", type="integer")
     */
    private $operacion;



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
     * @return Asiento
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
     * @return Asiento
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
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return Asiento
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime 
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set vto
     *
     * @param integer $vto
     * @return Asiento
     */
    public function setVto($vto)
    {
        $this->vto = $vto;

        return $this;
    }

    /**
     * Get vto
     *
     * @return integer $vto
     */
    public function getVto()
    {
        return $this->vto;
    }

    /**
     * Set tipo
     *
     * @param integer $tipo
     * @return Asiento
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return integer 
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set fPago
     *
     * @param integer $fPago
     * @return Asiento
     */
    public function setFPago($fPago)
    {
        $this->fPago = $fPago;

        return $this;
    }

    /**
     * Get fPago
     *
     * @return integer 
     */
    public function getFPago()
    {
        return $this->fPago;
    }

    /**
     * Set importe
     *
     * @param string $importe
     * @return Asiento
     */
    public function setImporte($importe)
    {
        $this->importe = $importe;

        return $this;
    }

    /**
     * Get importe
     *
     * @return string 
     */
    public function getImporte()
    {
        return $this->importe;
    }

    /**
     * Set anotacion
     *
     * @param string $anotacion
     * @return Asiento
     */
    public function setAnotacion($anotacion)
    {
        $this->anotacion = $anotacion;

        return $this;
    }

    /**
     * Get anotacion
     *
     * @return string 
     */
    public function getAnotacion()
    {
        return $this->anotacion;
    }

    /**
     * Set vacaciones
     *
     * @param boolean $vacaciones
     * @return Asiento
     */
    public function setVacaciones($vacaciones)
    {
        $this->vacaciones = $vacaciones;

        return $this;
    }

    /**
     * Get vacaciones
     *
     * @return boolean
     */
    public function getVacaciones()
    {
        return $this->vacaciones;
    }

    /**
     * Set imagen
     *
     * @param string $imagen
     * @return Asiento
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

    public function __toString()
    {
        return $this->getNombre();
    }

    /**
     * Set parcelas
     *
     * @param integer $parcelas
     *
     * @return Asiento
     */
    public function setParcelas($parcelas)
    {
        $this->parcelas = $parcelas;

        return $this;
    }

    /**
     * Get parcelas
     *
     * @return integer
     */
    public function getParcelas()
    {
        return $this->parcelas;
    }

    /**
     * Set operacion
     *
     * @param integer $operacion
     *
     * @return Asiento
     */
    public function setOperacion($operacion)
    {
        $this->operacion = $operacion;

        return $this;
    }

    /**
     * Get operacion
     *
     * @return integer
     */
    public function getOperacion()
    {
        return $this->operacion;
    }
}
