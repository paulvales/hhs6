<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * App
 *
 * @ORM\Table(name="app", indexes={@ORM\Index(name="nazuser_2", columns={"nazuser"}), @ORM\Index(name="nazuser", columns={"nazuser", "flatrem"})})
 * @ORM\Entity
 */
class App
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="nazuser", type="integer", nullable=false)
     */
    private $nazuser;

    /**
     * @var int
     *
     * @ORM\Column(name="flatrem", type="integer", nullable=false)
     */
    private $flatrem;

    /**
     * @var string
     *
     * @ORM\Column(name="descr", type="text", length=65535, nullable=false)
     */
    private $descr;

    /**
     * @var int
     *
     * @ORM\Column(name="attention", type="integer", nullable=false, options={"default"="1"})
     */
    private $attention = '1';

    /**
     * @var int
     *
     * @ORM\Column(name="attmaster", type="integer", nullable=false)
     */
    private $attmaster;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dtnazrem", type="datetime", nullable=false)
     */
    private $dtnazrem;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dt_naz_zav", type="datetime", nullable=false)
     */
    private $dtNazZav;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="prinal", type="datetime", nullable=false)
     */
    private $prinal;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="startrem", type="datetime", nullable=false)
     */
    private $startrem;

    /**
     * @var int
     *
     * @ORM\Column(name="idmaster", type="integer", nullable=false)
     */
    private $idmaster;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="sdal", type="datetime", nullable=false)
     */
    private $sdal;

    /**
     * @var string
     *
     * @ORM\Column(name="descrgotov", type="text", length=65535, nullable=false)
     */
    private $descrgotov;

    /**
     * @var string
     *
     * @ORM\Column(name="zatr", type="text", length=65535, nullable=false)
     */
    private $zatr;

    /**
     * @var string
     *
     * @ORM\Column(name="img", type="text", length=65535, nullable=false)
     */
    private $img;

    /**
     * @var string
     *
     * @ORM\Column(name="imggor", type="string", length=255, nullable=false)
     */
    private $imggor;

    /**
     * @var int
     *
     * @ORM\Column(name="status", type="integer", nullable=false)
     */
    private $status;

    /**
     * @var int
     *
     * @ORM\Column(name="deff", type="integer", nullable=false)
     */
    private $deff;

    /**
     * @var int
     *
     * @ORM\Column(name="fordel", type="integer", nullable=false)
     */
    private $fordel;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNazuser(): ?int
    {
        return $this->nazuser;
    }

    public function setNazuser(int $nazuser): self
    {
        $this->nazuser = $nazuser;

        return $this;
    }

    public function getFlatrem(): ?int
    {
        return $this->flatrem;
    }

    public function setFlatrem(int $flatrem): self
    {
        $this->flatrem = $flatrem;

        return $this;
    }

    public function getDescr(): ?string
    {
        return $this->descr;
    }

    public function setDescr(string $descr): self
    {
        $this->descr = $descr;

        return $this;
    }

    public function getAttention(): ?int
    {
        return $this->attention;
    }

    public function setAttention(int $attention): self
    {
        $this->attention = $attention;

        return $this;
    }

    public function getAttmaster(): ?int
    {
        return $this->attmaster;
    }

    public function setAttmaster(int $attmaster): self
    {
        $this->attmaster = $attmaster;

        return $this;
    }

    public function getDtnazrem(): ?\DateTimeInterface
    {
        return $this->dtnazrem;
    }

    public function setDtnazrem(\DateTimeInterface $dtnazrem): self
    {
        $this->dtnazrem = $dtnazrem;

        return $this;
    }

    public function getDtNazZav(): ?\DateTimeInterface
    {
        return $this->dtNazZav;
    }

    public function setDtNazZav(\DateTimeInterface $dtNazZav): self
    {
        $this->dtNazZav = $dtNazZav;

        return $this;
    }

    public function getPrinal(): ?\DateTimeInterface
    {
        return $this->prinal;
    }

    public function setPrinal(\DateTimeInterface $prinal): self
    {
        $this->prinal = $prinal;

        return $this;
    }

    public function getStartrem(): ?\DateTimeInterface
    {
        return $this->startrem;
    }

    public function setStartrem(\DateTimeInterface $startrem): self
    {
        $this->startrem = $startrem;

        return $this;
    }

    public function getIdmaster(): ?int
    {
        return $this->idmaster;
    }

    public function setIdmaster(int $idmaster): self
    {
        $this->idmaster = $idmaster;

        return $this;
    }

    public function getSdal(): ?\DateTimeInterface
    {
        return $this->sdal;
    }

    public function setSdal(\DateTimeInterface $sdal): self
    {
        $this->sdal = $sdal;

        return $this;
    }

    public function getDescrgotov(): ?string
    {
        return $this->descrgotov;
    }

    public function setDescrgotov(string $descrgotov): self
    {
        $this->descrgotov = $descrgotov;

        return $this;
    }

    public function getZatr(): ?string
    {
        return $this->zatr;
    }

    public function setZatr(string $zatr): self
    {
        $this->zatr = $zatr;

        return $this;
    }

    public function getImg(): ?string
    {
        return $this->img;
    }

    public function setImg(string $img): self
    {
        $this->img = $img;

        return $this;
    }

    public function getImggor(): ?string
    {
        return $this->imggor;
    }

    public function setImggor(string $imggor): self
    {
        $this->imggor = $imggor;

        return $this;
    }

    public function getStatus(): ?int
    {
        return $this->status;
    }

    public function setStatus(int $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getDeff(): ?int
    {
        return $this->deff;
    }

    public function setDeff(int $deff): self
    {
        $this->deff = $deff;

        return $this;
    }

    public function getFordel(): ?int
    {
        return $this->fordel;
    }

    public function setFordel(int $fordel): self
    {
        $this->fordel = $fordel;

        return $this;
    }


}
