<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Stock
 *
 * @ORM\Table(name="stock", uniqueConstraints={@ORM\UniqueConstraint(name="idflat", columns={"idflat"})}, indexes={@ORM\Index(name="idflat_2", columns={"idflat"})})
 * @ORM\Entity
 */
class Stock
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
     * @ORM\Column(name="idflat", type="integer", nullable=false)
     */
    private $idflat;

    /**
     * @var string
     *
     * @ORM\Column(name="pos1", type="string", length=255, nullable=false)
     */
    private $pos1;

    /**
     * @var string
     *
     * @ORM\Column(name="pos2", type="string", length=255, nullable=false)
     */
    private $pos2;

    /**
     * @var string
     *
     * @ORM\Column(name="pos3", type="string", length=255, nullable=false)
     */
    private $pos3;

    /**
     * @var string
     *
     * @ORM\Column(name="pos4", type="string", length=255, nullable=false)
     */
    private $pos4;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdflat(): ?int
    {
        return $this->idflat;
    }

    public function setIdflat(int $idflat): self
    {
        $this->idflat = $idflat;

        return $this;
    }

    public function getPos1(): ?string
    {
        return $this->pos1;
    }

    public function setPos1(string $pos1): self
    {
        $this->pos1 = $pos1;

        return $this;
    }

    public function getPos2(): ?string
    {
        return $this->pos2;
    }

    public function setPos2(string $pos2): self
    {
        $this->pos2 = $pos2;

        return $this;
    }

    public function getPos3(): ?string
    {
        return $this->pos3;
    }

    public function setPos3(string $pos3): self
    {
        $this->pos3 = $pos3;

        return $this;
    }

    public function getPos4(): ?string
    {
        return $this->pos4;
    }

    public function setPos4(string $pos4): self
    {
        $this->pos4 = $pos4;

        return $this;
    }


}
