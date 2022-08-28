<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ZavBlock
 *
 * @ORM\Table(name="zav_block")
 * @ORM\Entity
 */
class ZavBlock
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
     * @var \DateTime|null
     *
     * @ORM\Column(name="dtstart", type="date", nullable=true)
     */
    private $dtstart;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dtend", type="date", nullable=true)
     */
    private $dtend;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dt", type="datetime", nullable=true)
     */
    private $dt;

    /**
     * @var int
     *
     * @ORM\Column(name="user", type="integer", nullable=false)
     */
    private $user;

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

    public function getDtstart(): ?\DateTimeInterface
    {
        return $this->dtstart;
    }

    public function setDtstart(?\DateTimeInterface $dtstart): self
    {
        $this->dtstart = $dtstart;

        return $this;
    }

    public function getDtend(): ?\DateTimeInterface
    {
        return $this->dtend;
    }

    public function setDtend(?\DateTimeInterface $dtend): self
    {
        $this->dtend = $dtend;

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

    public function getUser(): ?int
    {
        return $this->user;
    }

    public function setUser(int $user): self
    {
        $this->user = $user;

        return $this;
    }


}
