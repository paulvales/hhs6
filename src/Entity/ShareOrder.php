<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ShareOrder
 *
 * @ORM\Table(name="share_order", uniqueConstraints={@ORM\UniqueConstraint(name="idorder", columns={"idorder"})})
 * @ORM\Entity
 */
class ShareOrder
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
     * @ORM\Column(name="hash", type="text", length=65535, nullable=false)
     */
    private $hash;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="_dt", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $dt = 'CURRENT_TIMESTAMP';

    /**
     * @var int
     *
     * @ORM\Column(name="_user", type="integer", nullable=false)
     */
    private $user;

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

    public function getHash(): ?string
    {
        return $this->hash;
    }

    public function setHash(string $hash): self
    {
        $this->hash = $hash;

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

    public function getUser(): ?int
    {
        return $this->user;
    }

    public function setUser(int $user): self
    {
        $this->user = $user;

        return $this;
    }


}
