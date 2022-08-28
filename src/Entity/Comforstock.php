<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Comforstock
 *
 * @ORM\Table(name="comforstock")
 * @ORM\Entity
 */
class Comforstock
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
     * @ORM\Column(name="idflat", type="integer", nullable=false)
     */
    private $idflat;

    /**
     * @var int
     *
     * @ORM\Column(name="pos", type="integer", nullable=false)
     */
    private $pos;

    /**
     * @var int
     *
     * @ORM\Column(name="user", type="integer", nullable=false)
     */
    private $user;

    /**
     * @var string
     *
     * @ORM\Column(name="comm", type="text", length=65535, nullable=false)
     */
    private $comm;

    /**
     * @var int
     *
     * @ORM\Column(name="status", type="integer", nullable=false)
     */
    private $status;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dtuser", type="datetime", nullable=false)
     */
    private $dtuser;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dt", type="datetime", nullable=false)
     */
    private $dt;

    /**
     * @var int
     *
     * @ORM\Column(name="admin", type="integer", nullable=false)
     */
    private $admin;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdflat(): ?int
    {
        return $this->idflat;
    }

    public function setIdflat(int $idflat): self
    {
        $this->idflat = $idflat;

        return $this;
    }

    public function getPos(): ?int
    {
        return $this->pos;
    }

    public function setPos(int $pos): self
    {
        $this->pos = $pos;

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

    public function getComm(): ?string
    {
        return $this->comm;
    }

    public function setComm(string $comm): self
    {
        $this->comm = $comm;

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

    public function getDtuser(): ?\DateTimeInterface
    {
        return $this->dtuser;
    }

    public function setDtuser(\DateTimeInterface $dtuser): self
    {
        $this->dtuser = $dtuser;

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

    public function getAdmin(): ?int
    {
        return $this->admin;
    }

    public function setAdmin(int $admin): self
    {
        $this->admin = $admin;

        return $this;
    }


}
