<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Upd
 *
 * @ORM\Table(name="upd")
 * @ORM\Entity
 */
class Upd
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
     * @ORM\Column(name="idmission", type="integer", nullable=false)
     */
    private $idmission;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="old", type="datetime", nullable=false)
     */
    private $old;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="new", type="datetime", nullable=false)
     */
    private $new;

    /**
     * @var int
     *
     * @ORM\Column(name="user_upd", type="integer", nullable=false)
     */
    private $userUpd;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="kogda", type="datetime", nullable=false)
     */
    private $kogda;

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

    public function getIdmission(): ?int
    {
        return $this->idmission;
    }

    public function setIdmission(int $idmission): self
    {
        $this->idmission = $idmission;

        return $this;
    }

    public function getOld(): ?\DateTimeInterface
    {
        return $this->old;
    }

    public function setOld(\DateTimeInterface $old): self
    {
        $this->old = $old;

        return $this;
    }

    public function getNew(): ?\DateTimeInterface
    {
        return $this->new;
    }

    public function setNew(\DateTimeInterface $new): self
    {
        $this->new = $new;

        return $this;
    }

    public function getUserUpd(): ?int
    {
        return $this->userUpd;
    }

    public function setUserUpd(int $userUpd): self
    {
        $this->userUpd = $userUpd;

        return $this;
    }

    public function getKogda(): ?\DateTimeInterface
    {
        return $this->kogda;
    }

    public function setKogda(\DateTimeInterface $kogda): self
    {
        $this->kogda = $kogda;

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
