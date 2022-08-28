<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FlatKeys
 *
 * @ORM\Table(name="flat_keys")
 * @ORM\Entity
 */
class FlatKeys
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
     * @ORM\Column(name="id_flat", type="integer", nullable=false)
     */
    private $idFlat;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_order", type="integer", nullable=true)
     */
    private $idOrder;

    /**
     * @var int|null
     *
     * @ORM\Column(name="userwkey", type="integer", nullable=true)
     */
    private $userwkey;

    /**
     * @var int
     *
     * @ORM\Column(name="user", type="integer", nullable=false)
     */
    private $user;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dt", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $dt = 'CURRENT_TIMESTAMP';

    public function getId(): ?int
    {
        return $this->id;
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

    public function getIdOrder(): ?int
    {
        return $this->idOrder;
    }

    public function setIdOrder(?int $idOrder): self
    {
        $this->idOrder = $idOrder;

        return $this;
    }

    public function getUserwkey(): ?int
    {
        return $this->userwkey;
    }

    public function setUserwkey(?int $userwkey): self
    {
        $this->userwkey = $userwkey;

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

    public function getDt(): ?\DateTimeInterface
    {
        return $this->dt;
    }

    public function setDt(\DateTimeInterface $dt): self
    {
        $this->dt = $dt;

        return $this;
    }


}
