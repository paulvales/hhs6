<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Getcash
 *
 * @ORM\Table(name="getcash")
 * @ORM\Entity
 */
class Getcash
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
     * @var \DateTime
     *
     * @ORM\Column(name="dt", type="datetime", nullable=false)
     */
    private $dt;

    /**
     * @var int
     *
     * @ORM\Column(name="user", type="integer", nullable=false)
     */
    private $user;

    /**
     * @var int
     *
     * @ORM\Column(name="shift", type="integer", nullable=false)
     */
    private $shift;

    /**
     * @var int
     *
     * @ORM\Column(name="value", type="integer", nullable=false)
     */
    private $value;

    /**
     * @var int|null
     *
     * @ORM\Column(name="current_cash", type="integer", nullable=true, options={"comment"="Касса на момент снятия бухгалтером"})
     */
    private $currentCash;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getUser(): ?int
    {
        return $this->user;
    }

    public function setUser(int $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function getShift(): ?int
    {
        return $this->shift;
    }

    public function setShift(int $shift): self
    {
        $this->shift = $shift;

        return $this;
    }

    public function getValue(): ?int
    {
        return $this->value;
    }

    public function setValue(int $value): self
    {
        $this->value = $value;

        return $this;
    }

    public function getCurrentCash(): ?int
    {
        return $this->currentCash;
    }

    public function setCurrentCash(?int $currentCash): self
    {
        $this->currentCash = $currentCash;

        return $this;
    }


}
