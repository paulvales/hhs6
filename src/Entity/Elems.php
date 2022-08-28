<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Elems
 *
 * @ORM\Table(name="elems")
 * @ORM\Entity
 */
class Elems
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
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var int
     *
     * @ORM\Column(name="id_flat", type="integer", nullable=false)
     */
    private $idFlat;

    /**
     * @var int
     *
     * @ORM\Column(name="count", type="integer", nullable=false)
     */
    private $count;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getIdFlat(): ?int
    {
        return $this->idFlat;
    }

    public function setIdFlat(int $idFlat): self
    {
        $this->idFlat = $idFlat;

        return $this;
    }

    public function getCount(): ?int
    {
        return $this->count;
    }

    public function setCount(int $count): self
    {
        $this->count = $count;

        return $this;
    }


}
