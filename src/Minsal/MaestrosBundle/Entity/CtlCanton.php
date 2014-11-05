<?php

namespace Minsal\MaestrosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CtlCanton
 *
 * @ORM\Table(name="ctl_canton", indexes={@ORM\Index(name="idx_cc9031f47ead49c7", columns={"id_municipio"}), @ORM\Index(name="IDX_CC9031F4735E702C", columns={"id_usuario_mod"}), @ORM\Index(name="IDX_CC9031F47C22D51", columns={"id_usuario_reg"})})
 * @ORM\Entity
 */
class CtlCanton
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ctl_canton_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=250, nullable=false)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="codigo_digestyc", type="string", length=5, nullable=true)
     */
    private $codigoDigestyc;

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
     * @var boolean
     *
     * @ORM\Column(name="rural", type="boolean", nullable=true)
     */
    private $rural;

    /**
     * @var \CtlMunicipio
     *
     * @ORM\ManyToOne(targetEntity="CtlMunicipio")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_municipio", referencedColumnName="id")
     * })
     */
    private $idMunicipio;

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
     * @return CtlCanton
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
     * Set codigoDigestyc
     *
     * @param string $codigoDigestyc
     * @return CtlCanton
     */
    public function setCodigoDigestyc($codigoDigestyc)
    {
        $this->codigoDigestyc = $codigoDigestyc;

        return $this;
    }

    /**
     * Get codigoDigestyc
     *
     * @return string 
     */
    public function getCodigoDigestyc()
    {
        return $this->codigoDigestyc;
    }

    /**
     * Set fechaHoraReg
     *
     * @param \DateTime $fechaHoraReg
     * @return CtlCanton
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
     * @return CtlCanton
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
     * Set rural
     *
     * @param boolean $rural
     * @return CtlCanton
     */
    public function setRural($rural)
    {
        $this->rural = $rural;

        return $this;
    }

    /**
     * Get rural
     *
     * @return boolean 
     */
    public function getRural()
    {
        return $this->rural;
    }

    /**
     * Set idMunicipio
     *
     * @param \Minsal\MaestrosBundle\Entity\CtlMunicipio $idMunicipio
     * @return CtlCanton
     */
    public function setIdMunicipio(\Minsal\MaestrosBundle\Entity\CtlMunicipio $idMunicipio = null)
    {
        $this->idMunicipio = $idMunicipio;

        return $this;
    }

    /**
     * Get idMunicipio
     *
     * @return \Minsal\MaestrosBundle\Entity\CtlMunicipio 
     */
    public function getIdMunicipio()
    {
        return $this->idMunicipio;
    }

    /**
     * Set idUsuarioMod
     *
     * @param \Application\Sonata\UserBundle\Entity\User $idUsuarioMod
     * @return CtlCanton
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
     * @return CtlCanton
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
