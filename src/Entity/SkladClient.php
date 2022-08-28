<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SkladClient
 *
 * @ORM\Table(name="sklad_client")
 * @ORM\Entity
 */
class SkladClient
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
     * @ORM\Column(name="elem", type="integer", nullable=false)
     */
    private $elem;

    /**
     * @var int
     *
     * @ORM\Column(name="idclient", type="integer", nullable=false)
     */
    private $idclient;

    /**
     * @var int
     *
     * @ORM\Column(name="idorder", type="integer", nullable=false)
     */
    private $idorder;

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

    public function getElem(): ?int
    {
        return $this->elem;
    }

    public function setElem(int $elem): self
    {
        $this->elem = $elem;

        return $this;
    }

    public function getIdclient(): ?int
    {
        return $this->idclient;
    }

    public function setIdclient(int $idclient): self
    {
        $this->idclient = $idclient;

        return $this;
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
