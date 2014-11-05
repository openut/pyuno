<?php

namespace Minsal\MaestrosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CtlDepartamento
 *
 * @ORM\Table(name="ctl_departamento", indexes={@ORM\Index(name="idx_c3f1602bf57d32fd", columns={"id_pais"}), @ORM\Index(name="idx_ctl_departamento_nombre", columns={"nombre"}), @ORM\Index(name="IDX_C3F1602B735E702C", columns={"id_usuario_mod"}), @ORM\Index(name="IDX_C3F1602B7C22D51", columns={"id_usuario_reg"})})
 * @ORM\Entity
 */
class CtlDepartamento
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ctl_departamento_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=150, nullable=false)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="codigo_cnr", type="string", length=5, nullable=true)
     */
    private $codigoCnr;

    /**
     * @var string
     *
     * @ORM\Column(name="abreviatura", type="string", length=5, nullable=true)
     */
    private $abreviatura;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_establecimiento_region", type="integer", nullable=true)
     */
    private $idEstablecimientoRegion;

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
     * @var string
     *
     * @ORM\Column(name="iso31662", type="string", length=5, nullable=true)
     */
    private $iso31662;

    /**
     * @var \CtlPais
     *
     * @ORM\ManyToOne(targetEntity="CtlPais")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_pais", referencedColumnName="id")
     * })
     */
    private $idPais;

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
     * @return CtlDepartamento
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
     * Set codigoCnr
     *
     * @param string $codigoCnr
     * @return CtlDepartamento
     */
    public function setCodigoCnr($codigoCnr)
    {
        $this->codigoCnr = $codigoCnr;

        return $this;
    }

    /**
     * Get codigoCnr
     *
     * @return string 
     */
    public function getCodigoCnr()
    {
        return $this->codigoCnr;
    }

    /**
     * Set abreviatura
     *
     * @param string $abreviatura
     * @return CtlDepartamento
     */
    public function setAbreviatura($abreviatura)
    {
        $this->abreviatura = $abreviatura;

        return $this;
    }

    /**
     * Get abreviatura
     *
     * @return string 
     */
    public function getAbreviatura()
    {
        return $this->abreviatura;
    }

    /**
     * Set idEstablecimientoRegion
     *
     * @param integer $idEstablecimientoRegion
     * @return CtlDepartamento
     */
    public function setIdEstablecimientoRegion($idEstablecimientoRegion)
    {
        $this->idEstablecimientoRegion = $idEstablecimientoRegion;

        return $this;
    }

    /**
     * Get idEstablecimientoRegion
     *
     * @return integer 
     */
    public function getIdEstablecimientoRegion()
    {
        return $this->idEstablecimientoRegion;
    }

    /**
     * Set fechaHoraReg
     *
     * @param \DateTime $fechaHoraReg
     * @return CtlDepartamento
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
     * @return CtlDepartamento
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
     * Set iso31662
     *
     * @param string $iso31662
     * @return CtlDepartamento
     */
    public function setIso31662($iso31662)
    {
        $this->iso31662 = $iso31662;

        return $this;
    }

    /**
     * Get iso31662
     *
     * @return string 
     */
    public function getIso31662()
    {
        return $this->iso31662;
    }

    /**
     * Set idPais
     *
     * @param \Minsal\MaestrosBundle\Entity\CtlPais $idPais
     * @return CtlDepartamento
     */
    public function setIdPais(\Minsal\MaestrosBundle\Entity\CtlPais $idPais = null)
    {
        $this->idPais = $idPais;

        return $this;
    }

    /**
     * Get idPais
     *
     * @return \Minsal\MaestrosBundle\Entity\CtlPais 
     */
    public function getIdPais()
    {
        return $this->idPais;
    }

    /**
     * Set idUsuarioMod
     *
     * @param \Application\Sonata\UserBundle\Entity\User $idUsuarioMod
     * @return CtlDepartamento
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
     * @return CtlDepartamento
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
