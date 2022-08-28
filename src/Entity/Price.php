<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Price
 *
 * @ORM\Table(name="price")
 * @ORM\Entity
 */
class Price
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
     * @var string|null
     *
     * @ORM\Column(name="flat", type="text", length=65535, nullable=true)
     */
    private $flat;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nameprice", type="string", length=255, nullable=true)
     */
    private $nameprice;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFlat(): ?string
    {
        return $this->flat;
    }

    public function setFlat(?string $flat): self
    {
        $this->flat = $flat;

        return $this;
    }

    public function getNameprice(): ?string
    {
        return $this->nameprice;
    }

    public function setNameprice(?string $nameprice): self
    {
        $this->nameprice = $nameprice;

        return $this;
    }


}
