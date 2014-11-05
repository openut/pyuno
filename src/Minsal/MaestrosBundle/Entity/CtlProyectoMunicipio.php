<?php

namespace Minsal\MaestrosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CtlProyectoMunicipio
 *
 * @ORM\Table(name="ctl_proyecto_municipio", indexes={@ORM\Index(name="idx_b99f01683f09ee2c", columns={"id_proyecto"}), @ORM\Index(name="idx_b99f01687ead49c7", columns={"id_municipio"}), @ORM\Index(name="IDX_B99F0168735E702C", columns={"id_usuario_mod"}), @ORM\Index(name="IDX_B99F01687C22D51", columns={"id_usuario_reg"})})
 * @ORM\Entity
 */
class CtlProyectoMunicipio
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ctl_proyecto_municipio_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

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
     * @var \CtlProyecto
     *
     * @ORM\ManyToOne(targetEntity="CtlProyecto")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_proyecto", referencedColumnName="id")
     * })
     */
    private $idProyecto;

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
     * Set fechaHoraReg
     *
     * @param \DateTime $fechaHoraReg
     * @return CtlProyectoMunicipio
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
     * @return CtlProyectoMunicipio
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
     * Set idProyecto
     *
     * @param \Minsal\MaestrosBundle\Entity\CtlProyecto $idProyecto
     * @return CtlProyectoMunicipio
     */
    public function setIdProyecto(\Minsal\MaestrosBundle\Entity\CtlProyecto $idProyecto = null)
    {
        $this->idProyecto = $idProyecto;

        return $this;
    }

    /**
     * Get idProyecto
     *
     * @return \Minsal\MaestrosBundle\Entity\CtlProyecto 
     */
    public function getIdProyecto()
    {
        return $this->idProyecto;
    }

    /**
     * Set idMunicipio
     *
     * @param \Minsal\MaestrosBundle\Entity\CtlMunicipio $idMunicipio
     * @return CtlProyectoMunicipio
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
     * @return CtlProyectoMunicipio
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
     * @return CtlProyectoMunicipio
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
