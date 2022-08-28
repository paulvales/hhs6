<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Missions
 *
 * @ORM\Table(name="missions", indexes={@ORM\Index(name="admin", columns={"admin"}), @ORM\Index(name="flat", columns={"flat"}), @ORM\Index(name="dt", columns={"dt"}), @ORM\Index(name="user", columns={"user"})})
 * @ORM\Entity
 */
class Missions
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
     * @ORM\Column(name="flat", type="integer", nullable=false)
     */
    private $flat;

    /**
     * @var int
     *
     * @ORM\Column(name="admin", type="integer", nullable=false)
     */
    private $admin;

    /**
     * @var int
     *
     * @ORM\Column(name="user", type="integer", nullable=false)
     */
    private $user;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dt", type="datetime", nullable=false)
     */
    private $dt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dtsrok", type="datetime", nullable=false)
     */
    private $dtsrok;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dtview", type="datetime", nullable=false)
     */
    private $dtview;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dtpri", type="datetime", nullable=false)
     */
    private $dtpri;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dtubor", type="datetime", nullable=false)
     */
    private $dtubor;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dtok", type="datetime", nullable=false)
     */
    private $dtok;

    /**
     * @var string
     *
     * @ORM\Column(name="tele", type="string", length=255, nullable=false)
     */
    private $tele;

    /**
     * @var int
     *
     * @ORM\Column(name="status", type="integer", nullable=false)
     */
    private $status;

    /**
     * @var int
     *
     * @ORM\Column(name="fordel", type="integer", nullable=false)
     */
    private $fordel;

    /**
     * @var string
     *
     * @ORM\Column(name="comm", type="text", length=65535, nullable=false)
     */
    private $comm;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFlat(): ?int
    {
        return $this->flat;
    }

    public function setFlat(int $flat): self
    {
        $this->flat = $flat;

        return $this;
    }

    public function getAdmin(): ?int
    {
        return $this->admin;
    }

    public function setAdmin(int $admin): self
    {
        $this->admin = $admin;

        return $this;
    }

    public function getUser(): ?int
    {
        return $this->user;
    }

    public function setUser(int $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function getDt(): ?\DateTimeInterface
    {
        return $this->dt;
    }

    public function setDt(\DateTimeInterface $dt): self
    {
        $this->dt = $dt;

        return $this;
    }

    public function getDtsrok(): ?\DateTimeInterface
    {
        return $this->dtsrok;
    }

    public function setDtsrok(\DateTimeInterface $dtsrok): self
    {
        $this->dtsrok = $dtsrok;

        return $this;
    }

    public function getDtview(): ?\DateTimeInterface
    {
        return $this->dtview;
    }

    public function setDtview(\DateTimeInterface $dtview): self
    {
        $this->dtview = $dtview;

        return $this;
    }

    public function getDtpri(): ?\DateTimeInterface
    {
        return $this->dtpri;
    }

    public function setDtpri(\DateTimeInterface $dtpri): self
    {
        $this->dtpri = $dtpri;

        return $this;
    }

    public function getDtubor(): ?\DateTimeInterface
    {
        return $this->dtubor;
    }

    public function setDtubor(\DateTimeInterface $dtubor): self
    {
        $this->dtubor = $dtubor;

        return $this;
    }

    public function getDtok(): ?\DateTimeInterface
    {
        return $this->dtok;
    }

    public function setDtok(\DateTimeInterface $dtok): self
    {
        $this->dtok = $dtok;

        return $this;
    }

    public function getTele(): ?string
    {
        return $this->tele;
    }

    public function setTele(string $tele): self
    {
        $this->tele = $tele;

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

    public function getFordel(): ?int
    {
        return $this->fordel;
    }

    public function setFordel(int $fordel): self
    {
        $this->fordel = $fordel;

        return $this;
    }

    public function getComm(): ?string
    {
        return $this->comm;
    }

    public function setComm(string $comm): self
    {
        $this->comm = $comm;

        return $this;
    }


}
