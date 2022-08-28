<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HistoryOrder
 *
 * @ORM\Table(name="history_order", indexes={@ORM\Index(name="idorder", columns={"idorder"}), @ORM\Index(name="user", columns={"user"})})
 * @ORM\Entity
 */
class HistoryOrder
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
     * @var \DateTime
     *
     * @ORM\Column(name="old_dt", type="datetime", nullable=false)
     */
    private $oldDt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="new_dt", type="datetime", nullable=false)
     */
    private $newDt;

    /**
     * @var int
     *
     * @ORM\Column(name="old_summ", type="integer", nullable=false)
     */
    private $oldSumm;

    /**
     * @var int
     *
     * @ORM\Column(name="new_summ", type="integer", nullable=false)
     */
    private $newSumm;

    /**
     * @var int
     *
     * @ORM\Column(name="user", type="integer", nullable=false)
     */
    private $user;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dt", type="datetime", nullable=false)
     */
    private $dt;

    /**
     * @var int
     *
     * @ORM\Column(name="days", type="integer", nullable=false)
     */
    private $days = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="priceday", type="integer", nullable=false)
     */
    private $priceday = '0';

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

    public function getOldDt(): ?\DateTimeInterface
    {
        return $this->oldDt;
    }

    public function setOldDt(\DateTimeInterface $oldDt): self
    {
        $this->oldDt = $oldDt;

        return $this;
    }

    public function getNewDt(): ?\DateTimeInterface
    {
        return $this->newDt;
    }

    public function setNewDt(\DateTimeInterface $newDt): self
    {
        $this->newDt = $newDt;

        return $this;
    }

    public function getOldSumm(): ?int
    {
        return $this->oldSumm;
    }

    public function setOldSumm(int $oldSumm): self
    {
        $this->oldSumm = $oldSumm;

        return $this;
    }

    public function getNewSumm(): ?int
    {
        return $this->newSumm;
    }

    public function setNewSumm(int $newSumm): self
    {
        $this->newSumm = $newSumm;

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

    public function getDays(): ?int
    {
        return $this->days;
    }

    public function setDays(int $days): self
    {
        $this->days = $days;

        return $this;
    }

    public function getPriceday(): ?int
    {
        return $this->priceday;
    }

    public function setPriceday(int $priceday): self
    {
        $this->priceday = $priceday;

        return $this;
    }


}
