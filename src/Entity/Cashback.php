<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cashback
 *
 * @ORM\Table(name="cashback", indexes={@ORM\Index(name="idorder_2", columns={"idorder"}), @ORM\Index(name="idorder", columns={"idtransaction"}), @ORM\Index(name="idclient", columns={"idclient"})})
 * @ORM\Entity
 */
class Cashback
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
     * @ORM\Column(name="idtransaction", type="integer", nullable=false)
     */
    private $idtransaction;

    /**
     * @var int
     *
     * @ORM\Column(name="amount", type="integer", nullable=false)
     */
    private $amount;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="start", type="date", nullable=true)
     */
    private $start;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="_dt", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $dt = 'CURRENT_TIMESTAMP';

    /**
     * @var bool
     *
     * @ORM\Column(name="_user", type="boolean", nullable=false)
     */
    private $user;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getIdtransaction(): ?int
    {
        return $this->idtransaction;
    }

    public function setIdtransaction(int $idtransaction): self
    {
        $this->idtransaction = $idtransaction;

        return $this;
    }

    public function getAmount(): ?int
    {
        return $this->amount;
    }

    public function setAmount(int $amount): self
    {
        $this->amount = $amount;

        return $this;
    }

    public function getStart(): ?\DateTimeInterface
    {
        return $this->start;
    }

    public function setStart(?\DateTimeInterface $start): self
    {
        $this->start = $start;

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

    public function getUser(): ?bool
    {
        return $this->user;
    }

    public function setUser(bool $user): self
    {
        $this->user = $user;

        return $this;
    }


}
