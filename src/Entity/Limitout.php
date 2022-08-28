<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Limitout
 *
 * @ORM\Table(name="limitout")
 * @ORM\Entity
 */
class Limitout
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
     * @var string
     *
     * @ORM\Column(name="btwn", type="string", length=255, nullable=false)
     */
    private $btwn;

    /**
     * @var string
     *
     * @ORM\Column(name="orders", type="string", length=255, nullable=false)
     */
    private $orders;

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

    public function getBtwn(): ?string
    {
        return $this->btwn;
    }

    public function setBtwn(string $btwn): self
    {
        $this->btwn = $btwn;

        return $this;
    }

    public function getOrders(): ?string
    {
        return $this->orders;
    }

    public function setOrders(string $orders): self
    {
        $this->orders = $orders;

        return $this;
    }


}
