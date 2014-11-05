<?php

namespace Minsal\MaestrosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CtlProyecto
 *
 * @ORM\Table(name="ctl_proyecto", indexes={@ORM\Index(name="idx_622ee6ff19f7bfd", columns={"id_financiamiento"}), @ORM\Index(name="IDX_622EE6F735E702C", columns={"id_usuario_mod"}), @ORM\Index(name="IDX_622EE6F7C22D51", columns={"id_usuario_reg"})})
 * @ORM\Entity
 */
class CtlProyecto
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ctl_proyecto_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=150, nullable=false)
     */
    private $nombre;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_inicio", type="date", nullable=true)
     */
    private $fechaInicio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_fin", type="date", nullable=true)
     */
    private $fechaFin;

    /**
     * @var string
     *
     * @ORM\Column(name="detalle", type="string", length=15, nullable=true)
     */
    private $detalle;

    /**
     * @var boolean
     *
     * @ORM\Column(name="activo", type="boolean", nullable=true)
     */
    private $activo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_hora_reg", type="datetime", nullable=true)
     */
    private $fechaHoraReg;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_hora_mod", type="datetime", nullable=true)
     */
    private $fechaHoraMod;

    /**
     * @var \CtlProyectoFinanciamiento
     *
     * @ORM\ManyToOne(targetEntity="CtlProyectoFinanciamiento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_financiamiento", referencedColumnName="id")
     * })
     */
    private $idFinanciamiento;

    /**
     * @var \FosUserUser
     *
     * @ORM\ManyToOne(targetEntity="Application\Sonata\UserBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_usuario_mod", referencedColumnName="id")
     * })
     */
    private $idUsuarioMod;

    /**
     * @var \FosUserUser
     *
     * @ORM\ManyToOne(targetEntity="Application\Sonata\UserBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_usuario_reg", referencedColumnName="id")
     * })
     */
    private $idUsuarioReg;



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
     * @return CtlProyecto
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
     * Set fechaInicio
     *
     * @param \DateTime $fechaInicio
     * @return CtlProyecto
     */
    public function setFechaInicio($fechaInicio)
    {
        $this->fechaInicio = $fechaInicio;

        return $this;
    }

    /**
     * Get fechaInicio
     *
     * @return \DateTime 
     */
    public function getFechaInicio()
    {
        return $this->fechaInicio;
    }

    /**
     * Set fechaFin
     *
     * @param \DateTime $fechaFin
     * @return CtlProyecto
     */
    public function setFechaFin($fechaFin)
    {
        $this->fechaFin = $fechaFin;

        return $this;
    }

    /**
     * Get fechaFin
     *
     * @return \DateTime 
     */
    public function getFechaFin()
    {
        return $this->fechaFin;
    }

    /**
     * Set detalle
     *
     * @param string $detalle
     * @return CtlProyecto
     */
    public function setDetalle($detalle)
    {
        $this->detalle = $detalle;

        return $this;
    }

    /**
     * Get detalle
     *
     * @return string 
     */
    public function getDetalle()
    {
        return $this->detalle;
    }

    /**
     * Set activo
     *
     * @param boolean $activo
     * @return CtlProyecto
     */
    public function setActivo($activo)
    {
        $this->activo = $activo;

        return $this;
    }

    /**
     * Get activo
     *
     * @return boolean 
     */
    public function getActivo()
    {
        return $this->activo;
    }

    /**
     * Set fechaHoraReg
     *
     * @param \DateTime $fechaHoraReg
     * @return CtlProyecto
     */
    public function setFechaHoraReg($fechaHoraReg)
    {
        $this->fechaHoraReg = $fechaHoraReg;

        return $this;
    }

    /**
     * Get fechaHoraReg
     *
     * @return \DateTime 
     */
    public function getFechaHoraReg()
    {
        return $this->fechaHoraReg;
    }

    /**
     * Set fechaHoraMod
     *
     * @param \DateTime $fechaHoraMod
     * @return CtlProyecto
     */
    public function setFechaHoraMod($fechaHoraMod)
    {
        $this->fechaHoraMod = $fechaHoraMod;

        return $this;
    }

    /**
     * Get fechaHoraMod
     *
     * @return \DateTime 
     */
    public function getFechaHoraMod()
    {
        return $this->fechaHoraMod;
    }

    /**
     * Set idFinanciamiento
     *
     * @param \Minsal\MaestrosBundle\Entity\CtlProyectoFinanciamiento $idFinanciamiento
     * @return CtlProyecto
     */
    public function setIdFinanciamiento(\Minsal\MaestrosBundle\Entity\CtlProyectoFinanciamiento $idFinanciamiento = null)
    {
        $this->idFinanciamiento = $idFinanciamiento;

        return $this;
    }

    /**
     * Get idFinanciamiento
     *
     * @return \Minsal\MaestrosBundle\Entity\CtlProyectoFinanciamiento 
     */
    public function getIdFinanciamiento()
    {
        return $this->idFinanciamiento;
    }

    /**
     * Set idUsuarioMod
     *
     * @param \Application\Sonata\UserBundle\Entity\User $idUsuarioMod
     * @return CtlProyecto
     */
    public function setIdUsuarioMod(\Application\Sonata\UserBundle\Entity\User $idUsuarioMod = null)
    {
        $this->idUsuarioMod = $idUsuarioMod;

        return $this;
    }

    /**
     * Get idUsuarioMod
     *
     * @return \Application\Sonata\UserBundle\Entity\User 
     */
    public function getIdUsuarioMod()
    {
        return $this->idUsuarioMod;
    }

    /**
     * Set idUsuarioReg
     *
     * @param \Application\Sonata\UserBundle\Entity\User $idUsuarioReg
     * @return CtlProyecto
     */
    public function setIdUsuarioReg(\Application\Sonata\UserBundle\Entity\User $idUsuarioReg = null)
    {
        $this->idUsuarioReg = $idUsuarioReg;

        return $this;
    }

    /**
     * Get idUsuarioReg
     *
     * @return \Application\Sonata\UserBundle\Entity\User 
     */
    public function getIdUsuarioReg()
    {
        return $this->idUsuarioReg;
    }
}
