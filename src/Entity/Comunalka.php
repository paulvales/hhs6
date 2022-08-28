<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Comunalka
 *
 * @ORM\Table(name="comunalka")
 * @ORM\Entity
 */
class Comunalka
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
     * @ORM\Column(name="flat", type="integer", nullable=false)
     */
    private $flat;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="arenda_dt", type="date", nullable=true)
     */
    private $arendaDt;

    /**
     * @var int
     *
     * @ORM\Column(name="arenda", type="integer", nullable=false)
     */
    private $arenda;

    /**
     * @var int
     *
     * @ORM\Column(name="com_all", type="integer", nullable=false)
     */
    private $comAll = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dt", type="date", nullable=false)
     */
    private $dt;

    /**
     * @var int
     *
     * @ORM\Column(name="coldw", type="integer", nullable=false)
     */
    private $coldw;

    /**
     * @var int
     *
     * @ORM\Column(name="hotw", type="integer", nullable=false)
     */
    private $hotw;

    /**
     * @var int
     *
     * @ORM\Column(name="light", type="integer", nullable=false)
     */
    private $light;

    /**
     * @var int
     *
     * @ORM\Column(name="gas", type="integer", nullable=false)
     */
    private $gas;

    /**
     * @var int
     *
     * @ORM\Column(name="warm", type="integer", nullable=false)
     */
    private $warm;

    /**
     * @var int
     *
     * @ORM\Column(name="inet", type="integer", nullable=false)
     */
    private $inet;

    /**
     * @var int
     *
     * @ORM\Column(name="phone", type="integer", nullable=false)
     */
    private $phone;

    /**
     * @var int
     *
     * @ORM\Column(name="pksk", type="integer", nullable=false)
     */
    private $pksk;

    /**
     * @var int
     *
     * @ORM\Column(name="musor", type="integer", nullable=false)
     */
    private $musor;

    /**
     * @var int
     *
     * @ORM\Column(name="domphone", type="integer", nullable=false)
     */
    private $domphone;

    /**
     * @var int
     *
     * @ORM\Column(name="remont", type="integer", nullable=false)
     */
    private $remont;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFlat(): ?int
    {
        return $this->flat;
    }

    public function setFlat(int $flat): self
    {
        $this->flat = $flat;

        return $this;
    }

    public function getArendaDt(): ?\DateTimeInterface
    {
        return $this->arendaDt;
    }

    public function setArendaDt(?\DateTimeInterface $arendaDt): self
    {
        $this->arendaDt = $arendaDt;

        return $this;
    }

    public function getArenda(): ?int
    {
        return $this->arenda;
    }

    public function setArenda(int $arenda): self
    {
        $this->arenda = $arenda;

        return $this;
    }

    public function getComAll(): ?int
    {
        return $this->comAll;
    }

    public function setComAll(int $comAll): self
    {
        $this->comAll = $comAll;

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

    public function getColdw(): ?int
    {
        return $this->coldw;
    }

    public function setColdw(int $coldw): self
    {
        $this->coldw = $coldw;

        return $this;
    }

    public function getHotw(): ?int
    {
        return $this->hotw;
    }

    public function setHotw(int $hotw): self
    {
        $this->hotw = $hotw;

        return $this;
    }

    public function getLight(): ?int
    {
        return $this->light;
    }

    public function setLight(int $light): self
    {
        $this->light = $light;

        return $this;
    }

    public function getGas(): ?int
    {
        return $this->gas;
    }

    public function setGas(int $gas): self
    {
        $this->gas = $gas;

        return $this;
    }

    public function getWarm(): ?int
    {
        return $this->warm;
    }

    public function setWarm(int $warm): self
    {
        $this->warm = $warm;

        return $this;
    }

    public function getInet(): ?int
    {
        return $this->inet;
    }

    public function setInet(int $inet): self
    {
        $this->inet = $inet;

        return $this;
    }

    public function getPhone(): ?int
    {
        return $this->phone;
    }

    public function setPhone(int $phone): self
    {
        $this->phone = $phone;

        return $this;
    }

    public function getPksk(): ?int
    {
        return $this->pksk;
    }

    public function setPksk(int $pksk): self
    {
        $this->pksk = $pksk;

        return $this;
    }

    public function getMusor(): ?int
    {
        return $this->musor;
    }

    public function setMusor(int $musor): self
    {
        $this->musor = $musor;

        return $this;
    }

    public function getDomphone(): ?int
    {
        return $this->domphone;
    }

    public function setDomphone(int $domphone): self
    {
        $this->domphone = $domphone;

        return $this;
    }

    public function getRemont(): ?int
    {
        return $this->remont;
    }

    public function setRemont(int $remont): self
    {
        $this->remont = $remont;

        return $this;
    }


}
