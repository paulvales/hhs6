<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Graph
 *
 * @ORM\Table(name="graph")
 * @ORM\Entity
 */
class Graph
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
     * @var int
     *
     * @ORM\Column(name="nazuser", type="integer", nullable=false)
     */
    private $nazuser;

    /**
     * @var string
     *
     * @ORM\Column(name="day", type="string", length=50, nullable=false)
     */
    private $day;

    /**
     * @var string
     *
     * @ORM\Column(name="night", type="string", length=255, nullable=false)
     */
    private $night;

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

    public function getNazuser(): ?int
    {
        return $this->nazuser;
    }

    public function setNazuser(int $nazuser): self
    {
        $this->nazuser = $nazuser;

        return $this;
    }

    public function getDay(): ?string
    {
        return $this->day;
    }

    public function setDay(string $day): self
    {
        $this->day = $day;

        return $this;
    }

    public function getNight(): ?string
    {
        return $this->night;
    }

    public function setNight(string $night): self
    {
        $this->night = $night;

        return $this;
    }


}
