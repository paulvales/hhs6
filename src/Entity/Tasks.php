<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tasks
 *
 * @ORM\Table(name="tasks")
 * @ORM\Entity
 */
class Tasks
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
     * @ORM\Column(name="ot", type="integer", nullable=false)
     */
    private $ot;

    /**
     * @var int|null
     *
     * @ORM\Column(name="k", type="integer", nullable=true)
     */
    private $k;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dt", type="datetime", nullable=false)
     */
    private $dt;

    /**
     * @var string
     *
     * @ORM\Column(name="comm", type="text", length=65535, nullable=false)
     */
    private $comm;

    /**
     * @var int
     *
     * @ORM\Column(name="ready", type="integer", nullable=false)
     */
    private $ready = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="readydt", type="datetime", nullable=true)
     */
    private $readydt;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getOt(): ?int
    {
        return $this->ot;
    }

    public function setOt(int $ot): self
    {
        $this->ot = $ot;

        return $this;
    }

    public function getK(): ?int
    {
        return $this->k;
    }

    public function setK(?int $k): self
    {
        $this->k = $k;

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

    public function getComm(): ?string
    {
        return $this->comm;
    }

    public function setComm(string $comm): self
    {
        $this->comm = $comm;

        return $this;
    }

    public function getReady(): ?int
    {
        return $this->ready;
    }

    public function setReady(int $ready): self
    {
        $this->ready = $ready;

        return $this;
    }

    public function getReadydt(): ?\DateTimeInterface
    {
        return $this->readydt;
    }

    public function setReadydt(?\DateTimeInterface $readydt): self
    {
        $this->readydt = $readydt;

        return $this;
    }


}
