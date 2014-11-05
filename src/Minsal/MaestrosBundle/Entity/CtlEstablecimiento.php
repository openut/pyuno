<?php

namespace Minsal\MaestrosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CtlEstablecimiento
 *
 * @ORM\Table(name="ctl_establecimiento", indexes={@ORM\Index(name="idx_332bd42c7ead49c7", columns={"id_municipio"}), @ORM\Index(name="IDX_332BD42C3544B551", columns={"id_establecimiento_padre"}), @ORM\Index(name="IDX_332BD42C4E0E50FD", columns={"id_tipo_establecimiento"}), @ORM\Index(name="IDX_332BD42C8F14B160", columns={"id_cat_tipo_consumo"}), @ORM\Index(name="IDX_332BD42C952E1FD4", columns={"id_cat_tipo_farmacia"}), @ORM\Index(name="IDX_332BD42C9E67D4BE", columns={"id_cat_tipo_expediente"}), @ORM\Index(name="IDX_332BD42CCC3EE19E", columns={"id_cat_pruebas"}), @ORM\Index(name="IDX_332BD42CEF433A34", columns={"id_institucion"}), @ORM\Index(name="IDX_332BD42CF92045C1", columns={"id_cat_nivel_minsal"}), @ORM\Index(name="IDX_332BD42C735E702C", columns={"id_usuario_mod"}), @ORM\Index(name="IDX_332BD42C7C22D51", columns={"id_usuario_reg"})})
 * @ORM\Entity
 */
class CtlEstablecimiento
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ctl_establecimiento_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=150, nullable=true)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="direccion", type="string", length=300, nullable=true)
     */
    private $direccion;

    /**
     * @var string
     *
     * @ORM\Column(name="telefono", type="string", length=15, nullable=true)
     */
    private $telefono;

    /**
     * @var string
     *
     * @ORM\Column(name="fax", type="string", length=15, nullable=true)
     */
    private $fax;

    /**
     * @var string
     *
     * @ORM\Column(name="latitud", type="decimal", precision=10, scale=4, nullable=true)
     */
    private $latitud;

    /**
     * @var string
     *
     * @ORM\Column(name="longitud", type="decimal", precision=10, scale=4, nullable=true)
     */
    private $longitud;

    /**
     * @var integer
     *
     * @ORM\Column(name="anio_apertura", type="integer", nullable=true)
     */
    private $anioApertura;

    /**
     * @var string
     *
     * @ORM\Column(name="codestab_consumos", type="string", length=18, nullable=true)
     */
    private $codestabConsumos;

    /**
     * @var string
     *
     * @ORM\Column(name="codestab_siaf", type="string", length=4, nullable=true)
     */
    private $codestabSiaf;

    /**
     * @var integer
     *
     * @ORM\Column(name="cod_ucsf", type="integer", nullable=true)
     */
    private $codUcsf;

    /**
     * @var integer
     *
     * @ORM\Column(name="inst_mortalidad", type="integer", nullable=true)
     */
    private $instMortalidad;

    /**
     * @var integer
     *
     * @ORM\Column(name="digita_mortalidad", type="integer", nullable=true)
     */
    private $digitaMortalidad;

    /**
     * @var integer
     *
     * @ORM\Column(name="cvcd4", type="integer", nullable=true)
     */
    private $cvcd4;

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
     * @var integer
     *
     * @ORM\Column(name="idestablesimow", type="integer", nullable=true)
     */
    private $idestablesimow;

    /**
     * @var integer
     *
     * @ORM\Column(name="idestablevigepes", type="integer", nullable=true)
     */
    private $idestablevigepes;

    /**
     * @var integer
     *
     * @ORM\Column(name="estado_vigepes", type="integer", nullable=true)
     */
    private $estadoVigepes;

    /**
     * @var integer
     *
     * @ORM\Column(name="estado_vacunas", type="integer", nullable=true)
     */
    private $estadoVacunas;

    /**
     * @var integer
     *
     * @ORM\Column(name="estado_seps", type="integer", nullable=true)
     */
    private $estadoSeps;

    /**
     * @var integer
     *
     * @ORM\Column(name="estado_simow", type="integer", nullable=true)
     */
    private $estadoSimow;

    /**
     * @var \CtlEstablecimiento
     *
     * @ORM\ManyToOne(targetEntity="CtlEstablecimiento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_establecimiento_padre", referencedColumnName="id")
     * })
     */
    private $idEstablecimientoPadre;

    /**
     * @var \CtlTipoEstablecimiento
     *
     * @ORM\ManyToOne(targetEntity="CtlTipoEstablecimiento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_tipo_establecimiento", referencedColumnName="id")
     * })
     */
    private $idTipoEstablecimiento;

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
     * @var \CtlCatalogoDetalle
     *
     * @ORM\ManyToOne(targetEntity="CtlCatalogoDetalle")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_cat_tipo_consumo", referencedColumnName="id")
     * })
     */
    private $idCatTipoConsumo;

    /**
     * @var \CtlCatalogoDetalle
     *
     * @ORM\ManyToOne(targetEntity="CtlCatalogoDetalle")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_cat_tipo_farmacia", referencedColumnName="id")
     * })
     */
    private $idCatTipoFarmacia;

    /**
     * @var \CtlCatalogoDetalle
     *
     * @ORM\ManyToOne(targetEntity="CtlCatalogoDetalle")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_cat_tipo_expediente", referencedColumnName="id")
     * })
     */
    private $idCatTipoExpediente;

    /**
     * @var \CtlCatalogoDetalle
     *
     * @ORM\ManyToOne(targetEntity="CtlCatalogoDetalle")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_cat_pruebas", referencedColumnName="id")
     * })
     */
    private $idCatPruebas;

    /**
     * @var \CtlInstitucion
     *
     * @ORM\ManyToOne(targetEntity="CtlInstitucion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_institucion", referencedColumnName="id")
     * })
     */
    private $idInstitucion;

    /**
     * @var \CtlCatalogoDetalle
     *
     * @ORM\ManyToOne(targetEntity="CtlCatalogoDetalle")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_cat_nivel_minsal", referencedColumnName="id")
     * })
     */
    private $idCatNivelMinsal;

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
     * @return CtlEstablecimiento
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
     * Set direccion
     *
     * @param string $direccion
     * @return CtlEstablecimiento
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;

        return $this;
    }

    /**
     * Get direccion
     *
     * @return string 
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     * @return CtlEstablecimiento
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get telefono
     *
     * @return string 
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set fax
     *
     * @param string $fax
     * @return CtlEstablecimiento
     */
    public function setFax($fax)
    {
        $this->fax = $fax;

        return $this;
    }

    /**
     * Get fax
     *
     * @return string 
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * Set latitud
     *
     * @param string $latitud
     * @return CtlEstablecimiento
     */
    public function setLatitud($latitud)
    {
        $this->latitud = $latitud;

        return $this;
    }

    /**
     * Get latitud
     *
     * @return string 
     */
    public function getLatitud()
    {
        return $this->latitud;
    }

    /**
     * Set longitud
     *
     * @param string $longitud
     * @return CtlEstablecimiento
     */
    public function setLongitud($longitud)
    {
        $this->longitud = $longitud;

        return $this;
    }

    /**
     * Get longitud
     *
     * @return string 
     */
    public function getLongitud()
    {
        return $this->longitud;
    }

    /**
     * Set anioApertura
     *
     * @param integer $anioApertura
     * @return CtlEstablecimiento
     */
    public function setAnioApertura($anioApertura)
    {
        $this->anioApertura = $anioApertura;

        return $this;
    }

    /**
     * Get anioApertura
     *
     * @return integer 
     */
    public function getAnioApertura()
    {
        return $this->anioApertura;
    }

    /**
     * Set codestabConsumos
     *
     * @param string $codestabConsumos
     * @return CtlEstablecimiento
     */
    public function setCodestabConsumos($codestabConsumos)
    {
        $this->codestabConsumos = $codestabConsumos;

        return $this;
    }

    /**
     * Get codestabConsumos
     *
     * @return string 
     */
    public function getCodestabConsumos()
    {
        return $this->codestabConsumos;
    }

    /**
     * Set codestabSiaf
     *
     * @param string $codestabSiaf
     * @return CtlEstablecimiento
     */
    public function setCodestabSiaf($codestabSiaf)
    {
        $this->codestabSiaf = $codestabSiaf;

        return $this;
    }

    /**
     * Get codestabSiaf
     *
     * @return string 
     */
    public function getCodestabSiaf()
    {
        return $this->codestabSiaf;
    }

    /**
     * Set codUcsf
     *
     * @param integer $codUcsf
     * @return CtlEstablecimiento
     */
    public function setCodUcsf($codUcsf)
    {
        $this->codUcsf = $codUcsf;

        return $this;
    }

    /**
     * Get codUcsf
     *
     * @return integer 
     */
    public function getCodUcsf()
    {
        return $this->codUcsf;
    }

    /**
     * Set instMortalidad
     *
     * @param integer $instMortalidad
     * @return CtlEstablecimiento
     */
    public function setInstMortalidad($instMortalidad)
    {
        $this->instMortalidad = $instMortalidad;

        return $this;
    }

    /**
     * Get instMortalidad
     *
     * @return integer 
     */
    public function getInstMortalidad()
    {
        return $this->instMortalidad;
    }

    /**
     * Set digitaMortalidad
     *
     * @param integer $digitaMortalidad
     * @return CtlEstablecimiento
     */
    public function setDigitaMortalidad($digitaMortalidad)
    {
        $this->digitaMortalidad = $digitaMortalidad;

        return $this;
    }

    /**
     * Get digitaMortalidad
     *
     * @return integer 
     */
    public function getDigitaMortalidad()
    {
        return $this->digitaMortalidad;
    }

    /**
     * Set cvcd4
     *
     * @param integer $cvcd4
     * @return CtlEstablecimiento
     */
    public function setCvcd4($cvcd4)
    {
        $this->cvcd4 = $cvcd4;

        return $this;
    }

    /**
     * Get cvcd4
     *
     * @return integer 
     */
    public function getCvcd4()
    {
        return $this->cvcd4;
    }

    /**
     * Set activo
     *
     * @param boolean $activo
     * @return CtlEstablecimiento
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
     * @return CtlEstablecimiento
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
     * @return CtlEstablecimiento
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
     * Set idestablesimow
     *
     * @param integer $idestablesimow
     * @return CtlEstablecimiento
     */
    public function setIdestablesimow($idestablesimow)
    {
        $this->idestablesimow = $idestablesimow;

        return $this;
    }

    /**
     * Get idestablesimow
     *
     * @return integer 
     */
    public function getIdestablesimow()
    {
        return $this->idestablesimow;
    }

    /**
     * Set idestablevigepes
     *
     * @param integer $idestablevigepes
     * @return CtlEstablecimiento
     */
    public function setIdestablevigepes($idestablevigepes)
    {
        $this->idestablevigepes = $idestablevigepes;

        return $this;
    }

    /**
     * Get idestablevigepes
     *
     * @return integer 
     */
    public function getIdestablevigepes()
    {
        return $this->idestablevigepes;
    }

    /**
     * Set estadoVigepes
     *
     * @param integer $estadoVigepes
     * @return CtlEstablecimiento
     */
    public function setEstadoVigepes($estadoVigepes)
    {
        $this->estadoVigepes = $estadoVigepes;

        return $this;
    }

    /**
     * Get estadoVigepes
     *
     * @return integer 
     */
    public function getEstadoVigepes()
    {
        return $this->estadoVigepes;
    }

    /**
     * Set estadoVacunas
     *
     * @param integer $estadoVacunas
     * @return CtlEstablecimiento
     */
    public function setEstadoVacunas($estadoVacunas)
    {
        $this->estadoVacunas = $estadoVacunas;

        return $this;
    }

    /**
     * Get estadoVacunas
     *
     * @return integer 
     */
    public function getEstadoVacunas()
    {
        return $this->estadoVacunas;
    }

    /**
     * Set estadoSeps
     *
     * @param integer $estadoSeps
     * @return CtlEstablecimiento
     */
    public function setEstadoSeps($estadoSeps)
    {
        $this->estadoSeps = $estadoSeps;

        return $this;
    }

    /**
     * Get estadoSeps
     *
     * @return integer 
     */
    public function getEstadoSeps()
    {
        return $this->estadoSeps;
    }

    /**
     * Set estadoSimow
     *
     * @param integer $estadoSimow
     * @return CtlEstablecimiento
     */
    public function setEstadoSimow($estadoSimow)
    {
        $this->estadoSimow = $estadoSimow;

        return $this;
    }

    /**
     * Get estadoSimow
     *
     * @return integer 
     */
    public function getEstadoSimow()
    {
        return $this->estadoSimow;
    }

    /**
     * Set idEstablecimientoPadre
     *
     * @param \Minsal\MaestrosBundle\Entity\CtlEstablecimiento $idEstablecimientoPadre
     * @return CtlEstablecimiento
     */
    public function setIdEstablecimientoPadre(\Minsal\MaestrosBundle\Entity\CtlEstablecimiento $idEstablecimientoPadre = null)
    {
        $this->idEstablecimientoPadre = $idEstablecimientoPadre;

        return $this;
    }

    /**
     * Get idEstablecimientoPadre
     *
     * @return \Minsal\MaestrosBundle\Entity\CtlEstablecimiento 
     */
    public function getIdEstablecimientoPadre()
    {
        return $this->idEstablecimientoPadre;
    }

    /**
     * Set idTipoEstablecimiento
     *
     * @param \Minsal\MaestrosBundle\Entity\CtlTipoEstablecimiento $idTipoEstablecimiento
     * @return CtlEstablecimiento
     */
    public function setIdTipoEstablecimiento(\Minsal\MaestrosBundle\Entity\CtlTipoEstablecimiento $idTipoEstablecimiento = null)
    {
        $this->idTipoEstablecimiento = $idTipoEstablecimiento;

        return $this;
    }

    /**
     * Get idTipoEstablecimiento
     *
     * @return \Minsal\MaestrosBundle\Entity\CtlTipoEstablecimiento 
     */
    public function getIdTipoEstablecimiento()
    {
        return $this->idTipoEstablecimiento;
    }

    /**
     * Set idMunicipio
     *
     * @param \Minsal\MaestrosBundle\Entity\CtlMunicipio $idMunicipio
     * @return CtlEstablecimiento
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
     * Set idCatTipoConsumo
     *
     * @param \Minsal\MaestrosBundle\Entity\CtlCatalogoDetalle $idCatTipoConsumo
     * @return CtlEstablecimiento
     */
    public function setIdCatTipoConsumo(\Minsal\MaestrosBundle\Entity\CtlCatalogoDetalle $idCatTipoConsumo = null)
    {
        $this->idCatTipoConsumo = $idCatTipoConsumo;

        return $this;
    }

    /**
     * Get idCatTipoConsumo
     *
     * @return \Minsal\MaestrosBundle\Entity\CtlCatalogoDetalle 
     */
    public function getIdCatTipoConsumo()
    {
        return $this->idCatTipoConsumo;
    }

    /**
     * Set idCatTipoFarmacia
     *
     * @param \Minsal\MaestrosBundle\Entity\CtlCatalogoDetalle $idCatTipoFarmacia
     * @return CtlEstablecimiento
     */
    public function setIdCatTipoFarmacia(\Minsal\MaestrosBundle\Entity\CtlCatalogoDetalle $idCatTipoFarmacia = null)
    {
        $this->idCatTipoFarmacia = $idCatTipoFarmacia;

        return $this;
    }

    /**
     * Get idCatTipoFarmacia
     *
     * @return \Minsal\MaestrosBundle\Entity\CtlCatalogoDetalle 
     */
    public function getIdCatTipoFarmacia()
    {
        return $this->idCatTipoFarmacia;
    }

    /**
     * Set idCatTipoExpediente
     *
     * @param \Minsal\MaestrosBundle\Entity\CtlCatalogoDetalle $idCatTipoExpediente
     * @return CtlEstablecimiento
     */
    public function setIdCatTipoExpediente(\Minsal\MaestrosBundle\Entity\CtlCatalogoDetalle $idCatTipoExpediente = null)
    {
        $this->idCatTipoExpediente = $idCatTipoExpediente;

        return $this;
    }

    /**
     * Get idCatTipoExpediente
     *
     * @return \Minsal\MaestrosBundle\Entity\CtlCatalogoDetalle 
     */
    public function getIdCatTipoExpediente()
    {
        return $this->idCatTipoExpediente;
    }

    /**
     * Set idCatPruebas
     *
     * @param \Minsal\MaestrosBundle\Entity\CtlCatalogoDetalle $idCatPruebas
     * @return CtlEstablecimiento
     */
    public function setIdCatPruebas(\Minsal\MaestrosBundle\Entity\CtlCatalogoDetalle $idCatPruebas = null)
    {
        $this->idCatPruebas = $idCatPruebas;

        return $this;
    }

    /**
     * Get idCatPruebas
     *
     * @return \Minsal\MaestrosBundle\Entity\CtlCatalogoDetalle 
     */
    public function getIdCatPruebas()
    {
        return $this->idCatPruebas;
    }

    /**
     * Set idInstitucion
     *
     * @param \Minsal\MaestrosBundle\Entity\CtlInstitucion $idInstitucion
     * @return CtlEstablecimiento
     */
    public function setIdInstitucion(\Minsal\MaestrosBundle\Entity\CtlInstitucion $idInstitucion = null)
    {
        $this->idInstitucion = $idInstitucion;

        return $this;
    }

    /**
     * Get idInstitucion
     *
     * @return \Minsal\MaestrosBundle\Entity\CtlInstitucion 
     */
    public function getIdInstitucion()
    {
        return $this->idInstitucion;
    }

    /**
     * Set idCatNivelMinsal
     *
     * @param \Minsal\MaestrosBundle\Entity\CtlCatalogoDetalle $idCatNivelMinsal
     * @return CtlEstablecimiento
     */
    public function setIdCatNivelMinsal(\Minsal\MaestrosBundle\Entity\CtlCatalogoDetalle $idCatNivelMinsal = null)
    {
        $this->idCatNivelMinsal = $idCatNivelMinsal;

        return $this;
    }

    /**
     * Get idCatNivelMinsal
     *
     * @return \Minsal\MaestrosBundle\Entity\CtlCatalogoDetalle 
     */
    public function getIdCatNivelMinsal()
    {
        return $this->idCatNivelMinsal;
    }

    /**
     * Set idUsuarioMod
     *
     * @param \Application\Sonata\UserBundle\Entity\User $idUsuarioMod
     * @return CtlEstablecimiento
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
     * @return CtlEstablecimiento
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
