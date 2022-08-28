<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Comorder
 *
 * @ORM\Table(name="comorder", indexes={@ORM\Index(name="idorder", columns={"idorder"}), @ORM\Index(name="idorder_2", columns={"idorder"})})
 * @ORM\Entity
 */
class Comorder
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
     * @var string
     *
     * @ORM\Column(name="comment", type="string", length=255, nullable=false)
     */
    private $comment;

    /**
     * @var string
     *
     * @ORM\Column(name="favorite", type="string", length=100, nullable=false)
     */
    private $favorite;

    /**
     * @var string
     *
     * @ORM\Column(name="negative", type="string", length=100, nullable=false)
     */
    private $negative;

    /**
     * @var bool
     *
     * @ORM\Column(name="level", type="boolean", nullable=false)
     */
    private $level;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dt", type="datetime", nullable=true, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $dt = 'CURRENT_TIMESTAMP';

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

    public function getComment(): ?string
    {
        return $this->comment;
    }

    public function setComment(string $comment): self
    {
        $this->comment = $comment;

        return $this;
    }

    public function getFavorite(): ?string
    {
        return $this->favorite;
    }

    public function setFavorite(string $favorite): self
    {
        $this->favorite = $favorite;

        return $this;
    }

    public function getNegative(): ?string
    {
        return $this->negative;
    }

    public function setNegative(string $negative): self
    {
        $this->negative = $negative;

        return $this;
    }

    public function getLevel(): ?bool
    {
        return $this->level;
    }

    public function setLevel(bool $level): self
    {
        $this->level = $level;

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


}
