<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Log
 *
 * @ORM\Table(name="log", indexes={@ORM\Index(name="dt", columns={"dt"}), @ORM\Index(name="id", columns={"id"}), @ORM\Index(name="name", columns={"name"}), @ORM\Index(name="name_2", columns={"name"})})
 * @ORM\Entity
 */
class Log
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
     * @ORM\Column(name="dt", type="datetime", nullable=false)
     */
    private $dt;

    /**
     * @var string
     *
     * @ORM\Column(name="user", type="string", length=255, nullable=false)
     */
    private $user;

    /**
     * @var string
     *
     * @ORM\Column(name="object", type="string", length=255, nullable=false)
     */
    private $object;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="event", type="string", length=255, nullable=false)
     */
    private $event;

    /**
     * @var string
     *
     * @ORM\Column(name="do", type="text", length=65535, nullable=false)
     */
    private $do;

    /**
     * @var string
     *
     * @ORM\Column(name="posle", type="text", length=65535, nullable=false)
     */
    private $posle;

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

    public function getUser(): ?string
    {
        return $this->user;
    }

    public function setUser(string $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function getObject(): ?string
    {
        return $this->object;
    }

    public function setObject(string $object): self
    {
        $this->object = $object;

        return $this;
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

    public function getEvent(): ?string
    {
        return $this->event;
    }

    public function setEvent(string $event): self
    {
        $this->event = $event;

        return $this;
    }

    public function getDo(): ?string
    {
        return $this->do;
    }

    public function setDo(string $do): self
    {
        $this->do = $do;

        return $this;
    }

    public function getPosle(): ?string
    {
        return $this->posle;
    }

    public function setPosle(string $posle): self
    {
        $this->posle = $posle;

        return $this;
    }


}
