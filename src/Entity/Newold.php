<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Newold
 *
 * @ORM\Table(name="newold")
 * @ORM\Entity
 */
class Newold
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
     * @ORM\Column(name="dt", type="date", nullable=false)
     */
    private $dt;

    /**
     * @var int
     *
     * @ORM\Column(name="newpos", type="integer", nullable=false)
     */
    private $newpos;

    /**
     * @var int
     *
     * @ORM\Column(name="oldpos", type="integer", nullable=false)
     */
    private $oldpos;

    /**
     * @var int
     *
     * @ORM\Column(name="newcall", type="integer", nullable=false)
     */
    private $newcall;

    /**
     * @var int
     *
     * @ORM\Column(name="oldcall", type="integer", nullable=false)
     */
    private $oldcall;

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

    public function getNewpos(): ?int
    {
        return $this->newpos;
    }

    public function setNewpos(int $newpos): self
    {
        $this->newpos = $newpos;

        return $this;
    }

    public function getOldpos(): ?int
    {
        return $this->oldpos;
    }

    public function setOldpos(int $oldpos): self
    {
        $this->oldpos = $oldpos;

        return $this;
    }

    public function getNewcall(): ?int
    {
        return $this->newcall;
    }

    public function setNewcall(int $newcall): self
    {
        $this->newcall = $newcall;

        return $this;
    }

    public function getOldcall(): ?int
    {
        return $this->oldcall;
    }

    public function setOldcall(int $oldcall): self
    {
        $this->oldcall = $oldcall;

        return $this;
    }


}
