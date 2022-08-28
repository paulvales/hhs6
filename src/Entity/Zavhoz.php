<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Zavhoz
 *
 * @ORM\Table(name="zavhoz")
 * @ORM\Entity
 */
class Zavhoz
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
     * @var int|null
     *
     * @ORM\Column(name="idflat", type="integer", nullable=true)
     */
    private $idflat;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idclient", type="integer", nullable=true)
     */
    private $idclient;

    /**
     * @var string|null
     *
     * @ORM\Column(name="comment", type="string", length=255, nullable=true)
     */
    private $comment;

    /**
     * @var int|null
     *
     * @ORM\Column(name="status", type="integer", nullable=true)
     */
    private $status;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dt", type="datetime", nullable=true)
     */
    private $dt;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dtview", type="datetime", nullable=true)
     */
    private $dtview;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dtpri", type="datetime", nullable=true)
     */
    private $dtpri;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dtok", type="datetime", nullable=true)
     */
    private $dtok;

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

    public function getIdflat(): ?int
    {
        return $this->idflat;
    }

    public function setIdflat(?int $idflat): self
    {
        $this->idflat = $idflat;

        return $this;
    }

    public function getIdclient(): ?int
    {
        return $this->idclient;
    }

    public function setIdclient(?int $idclient): self
    {
        $this->idclient = $idclient;

        return $this;
    }

    public function getComment(): ?string
    {
        return $this->comment;
    }

    public function setComment(?string $comment): self
    {
        $this->comment = $comment;

        return $this;
    }

    public function getStatus(): ?int
    {
        return $this->status;
    }

    public function setStatus(?int $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getDt(): ?\DateTimeInterface
    {
        return $this->dt;
    }

    public function setDt(?\DateTimeInterface $dt): self
    {
        $this->dt = $dt;

        return $this;
    }

    public function getDtview(): ?\DateTimeInterface
    {
        return $this->dtview;
    }

    public function setDtview(?\DateTimeInterface $dtview): self
    {
        $this->dtview = $dtview;

        return $this;
    }

    public function getDtpri(): ?\DateTimeInterface
    {
        return $this->dtpri;
    }

    public function setDtpri(?\DateTimeInterface $dtpri): self
    {
        $this->dtpri = $dtpri;

        return $this;
    }

    public function getDtok(): ?\DateTimeInterface
    {
        return $this->dtok;
    }

    public function setDtok(?\DateTimeInterface $dtok): self
    {
        $this->dtok = $dtok;

        return $this;
    }


}
