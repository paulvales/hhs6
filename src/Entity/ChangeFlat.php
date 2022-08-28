<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ChangeFlat
 *
 * @ORM\Table(name="change_flat")
 * @ORM\Entity
 */
class ChangeFlat
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
     * @ORM\Column(name="order_id", type="integer", nullable=false)
     */
    private $orderId;

    /**
     * @var int
     *
     * @ORM\Column(name="old_flat", type="integer", nullable=false)
     */
    private $oldFlat;

    /**
     * @var int
     *
     * @ORM\Column(name="new_flat", type="integer", nullable=false)
     */
    private $newFlat;

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="text", length=65535, nullable=false)
     */
    private $comment;

    /**
     * @var int
     *
     * @ORM\Column(name="price", type="integer", nullable=false)
     */
    private $price;

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

    public function getOrderId(): ?int
    {
        return $this->orderId;
    }

    public function setOrderId(int $orderId): self
    {
        $this->orderId = $orderId;

        return $this;
    }

    public function getOldFlat(): ?int
    {
        return $this->oldFlat;
    }

    public function setOldFlat(int $oldFlat): self
    {
        $this->oldFlat = $oldFlat;

        return $this;
    }

    public function getNewFlat(): ?int
    {
        return $this->newFlat;
    }

    public function setNewFlat(int $newFlat): self
    {
        $this->newFlat = $newFlat;

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

    public function getPrice(): ?int
    {
        return $this->price;
    }

    public function setPrice(int $price): self
    {
        $this->price = $price;

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
