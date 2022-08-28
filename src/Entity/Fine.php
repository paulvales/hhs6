<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Fine
 *
 * @ORM\Table(name="fine")
 * @ORM\Entity
 */
class Fine
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
     * @ORM\Column(name="idorder", type="integer", nullable=false)
     */
    private $idorder;

    /**
     * @var int
     *
     * @ORM\Column(name="summ", type="integer", nullable=false)
     */
    private $summ;

    /**
     * @var string
     *
     * @ORM\Column(name="com", type="string", length=255, nullable=false)
     */
    private $com;

    /**
     * @var bool
     *
     * @ORM\Column(name="user", type="boolean", nullable=false)
     */
    private $user;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dt", type="datetime", nullable=false)
     */
    private $dt;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdorder(): ?int
    {
        return $this->idorder;
    }

    public function setIdorder(int $idorder): self
    {
        $this->idorder = $idorder;

        return $this;
    }

    public function getSumm(): ?int
    {
        return $this->summ;
    }

    public function setSumm(int $summ): self
    {
        $this->summ = $summ;

        return $this;
    }

    public function getCom(): ?string
    {
        return $this->com;
    }

    public function setCom(string $com): self
    {
        $this->com = $com;

        return $this;
    }

    public function getUser(): ?bool
    {
        return $this->user;
    }

    public function setUser(bool $user): self
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


}
