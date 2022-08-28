<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Apppause
 *
 * @ORM\Table(name="apppause")
 * @ORM\Entity
 */
class Apppause
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
     * @ORM\Column(name="idapp", type="integer", nullable=false)
     */
    private $idapp;

    /**
     * @var int
     *
     * @ORM\Column(name="idmaster", type="integer", nullable=false)
     */
    private $idmaster;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="startpause", type="datetime", nullable=true)
     */
    private $startpause;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="endpause", type="datetime", nullable=true)
     */
    private $endpause;

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

    public function getIdapp(): ?int
    {
        return $this->idapp;
    }

    public function setIdapp(int $idapp): self
    {
        $this->idapp = $idapp;

        return $this;
    }

    public function getIdmaster(): ?int
    {
        return $this->idmaster;
    }

    public function setIdmaster(int $idmaster): self
    {
        $this->idmaster = $idmaster;

        return $this;
    }

    public function getStartpause(): ?\DateTimeInterface
    {
        return $this->startpause;
    }

    public function setStartpause(?\DateTimeInterface $startpause): self
    {
        $this->startpause = $startpause;

        return $this;
    }

    public function getEndpause(): ?\DateTimeInterface
    {
        return $this->endpause;
    }

    public function setEndpause(?\DateTimeInterface $endpause): self
    {
        $this->endpause = $endpause;

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
