<?php

namespace Minsal\MaestrosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CtlDependenciaEstablecimiento
 *
 * @ORM\Table(name="ctl_dependencia_establecimiento", indexes={@ORM\Index(name="fki_establecimiento_dependencia_establecimiento", columns={"id_establecimiento"}), @ORM\Index(name="idx_bc5984322bf76b46", columns={"id_dependencia_padre"}), @ORM\Index(name="idx_bc598432ca22cd3f", columns={"id_dependencia"}), @ORM\Index(name="IDX_BC598432735E702C", columns={"id_usuario_mod"}), @ORM\Index(name="IDX_BC5984327C22D51", columns={"id_usuario_reg"})})
 * @ORM\Entity
 */
class CtlDependenciaEstablecimiento
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ctl_dependencia_establecimiento_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_dependencia", type="integer", nullable=true)
     */
    private $idDependencia;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_inicio", type="date", nullable=false)
     */
    private $fechaInicio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_fin", type="date", nullable=true)
     */
    private $fechaFin;

    /**
     * @var boolean
     *
     * @ORM\Column(name="habilitado", type="boolean", nullable=true)
     */
    private $habilitado;

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
     * @var \CtlDependencia
     *
     * @ORM\ManyToOne(targetEntity="CtlDependencia")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_dependencia_padre", referencedColumnName="id")
     * })
     */
    private $idDependenciaPadre;

    /**
     * @var \CtlEstablecimiento
     *
     * @ORM\ManyToOne(targetEntity="CtlEstablecimiento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_establecimiento", referencedColumnName="id")
     * })
     */
    private $idEstablecimiento;

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
     * Set idDependencia
     *
     * @param integer $idDependencia
     * @return CtlDependenciaEstablecimiento
     */
    public function setIdDependencia($idDependencia)
    {
        $this->idDependencia = $idDependencia;

        return $this;
    }

    /**
     * Get idDependencia
     *
     * @return integer 
     */
    public function getIdDependencia()
    {
        return $this->idDependencia;
    }

    /**
     * Set fechaInicio
     *
     * @param \DateTime $fechaInicio
     * @return CtlDependenciaEstablecimiento
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
     * @return CtlDependenciaEstablecimiento
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
     * Set habilitado
     *
     * @param boolean $habilitado
     * @return CtlDependenciaEstablecimiento
     */
    public function setHabilitado($habilitado)
    {
        $this->habilitado = $habilitado;

        return $this;
    }

    /**
     * Get habilitado
     *
     * @return boolean 
     */
    public function getHabilitado()
    {
        return $this->habilitado;
    }

    /**
     * Set fechaHoraReg
     *
     * @param \DateTime $fechaHoraReg
     * @return CtlDependenciaEstablecimiento
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
     * @return CtlDependenciaEstablecimiento
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
     * Set idDependenciaPadre
     *
     * @param \Minsal\MaestrosBundle\Entity\CtlDependencia $idDependenciaPadre
     * @return CtlDependenciaEstablecimiento
     */
    public function setIdDependenciaPadre(\Minsal\MaestrosBundle\Entity\CtlDependencia $idDependenciaPadre = null)
    {
        $this->idDependenciaPadre = $idDependenciaPadre;

        return $this;
    }

    /**
     * Get idDependenciaPadre
     *
     * @return \Minsal\MaestrosBundle\Entity\CtlDependencia 
     */
    public function getIdDependenciaPadre()
    {
        return $this->idDependenciaPadre;
    }

    /**
     * Set idEstablecimiento
     *
     * @param \Minsal\MaestrosBundle\Entity\CtlEstablecimiento $idEstablecimiento
     * @return CtlDependenciaEstablecimiento
     */
    public function setIdEstablecimiento(\Minsal\MaestrosBundle\Entity\CtlEstablecimiento $idEstablecimiento = null)
    {
        $this->idEstablecimiento = $idEstablecimiento;

        return $this;
    }

    /**
     * Get idEstablecimiento
     *
     * @return \Minsal\MaestrosBundle\Entity\CtlEstablecimiento 
     */
    public function getIdEstablecimiento()
    {
        return $this->idEstablecimiento;
    }

    /**
     * Set idUsuarioMod
     *
     * @param \Application\Sonata\UserBundle\Entity\User $idUsuarioMod
     * @return CtlDependenciaEstablecimiento
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
     * @return CtlDependenciaEstablecimiento
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
