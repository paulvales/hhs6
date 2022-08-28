<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PriItog
 *
 * @ORM\Table(name="pri_itog")
 * @ORM\Entity
 */
class PriItog
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
     * @var int|null
     *
     * @ORM\Column(name="flat", type="integer", nullable=true)
     */
    private $flat;

    /**
     * @var int|null
     *
     * @ORM\Column(name="user", type="integer", nullable=true)
     */
    private $user;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dt", type="datetime", nullable=true)
     */
    private $dt;

    /**
     * @var string|null
     *
     * @ORM\Column(name="checklist", type="text", length=65535, nullable=true)
     */
    private $checklist;

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="text", length=65535, nullable=false)
     */
    private $comment;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFlat(): ?int
    {
        return $this->flat;
    }

    public function setFlat(?int $flat): self
    {
        $this->flat = $flat;

        return $this;
    }

    public function getUser(): ?int
    {
        return $this->user;
    }

    public function setUser(?int $user): self
    {
        $this->user = $user;

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

    public function getChecklist(): ?string
    {
        return $this->checklist;
    }

    public function setChecklist(?string $checklist): self
    {
        $this->checklist = $checklist;

        return $this;
    }

    public function getComment(): ?string
    {
        return $this->comment;
    }

    public function setComment(string $comment): self
    {
        $this->comment = $comment;

        return $this;
    }


}
