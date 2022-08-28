<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Orders
 *
 * @ORM\Table(name="orders", indexes={@ORM\Index(name="id", columns={"id"}), @ORM\Index(name="user", columns={"user"}), @ORM\Index(name="idclient", columns={"idclient"}), @ORM\Index(name="ot", columns={"ot"}), @ORM\Index(name="idflat", columns={"idflat"})})
 * @ORM\Entity(repositoryClass="App\Repository\OrdersRepository")
 */
class Orders
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    public $id;

    /**
     * @var int
     *
     * @ORM\Column(name="idclient", type="integer", nullable=false)
     */
    public $idclient;

    /**
     * @var int
     *
     * @ORM\Column(name="idflat", type="integer", nullable=false)
     */
    public $idflat;

    /**
     * @var string
     *
     * @ORM\Column(name="adres", type="string", length=255, nullable=false)
     */
    public $adres;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="arrival", type="datetime", nullable=false)
     */
    public $arrival;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="departure", type="datetime", nullable=false)
     */
    public $departure;

    /**
     * @var int
     *
     * @ORM\Column(name="summ", type="integer", nullable=false, options={"comment"="Сумма при создании прикрепления, на всякий случай"})
     */
    public $summ = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="sale", type="integer", nullable=false)
     */
    public $sale;

    /**
     * @var int
     *
     * @ORM\Column(name="itogo", type="integer", nullable=false)
     */
    public $itogo;

    /**
     * @var int
     *
     * @ORM\Column(name="dolg", type="integer", nullable=false, options={"comment"="Динамическое значение"})
     */
    public $dolg;

    /**
     * @var int
     *
     * @ORM\Column(name="oplata", type="integer", nullable=false)
     */
    public $oplata = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="from_go", type="string", length=255, nullable=false)
     */
    public $fromGo;

    /**
     * @var int
     *
     * @ORM\Column(name="user", type="integer", nullable=false)
     */
    public $user;

    /**
     * @var string
     *
     * @ORM\Column(name="ot", type="string", length=255, nullable=false, options={"comment"="от кого клиент"})
     */
    public $ot;

    /**
     * @var string|null
     *
     * @ORM\Column(name="zalog", type="string", length=255, nullable=true)
     */
    public $zalog;

    /**
     * @var int
     *
     * @ORM\Column(name="priceday", type="integer", nullable=false)
     */
    public $priceday;

    /**
     * @var string|null
     *
     * @ORM\Column(name="currency", type="string", length=255, nullable=true)
     */
    public $currency;

    /**
     * @var int
     *
     * @ORM\Column(name="zalogsumm", type="integer", nullable=false, options={"comment"="Сумма залога"})
     */
    public $zalogsumm = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="text", length=65535, nullable=false)
     */
    public $comment;

    /**
     * @var string|null
     *
     * @ORM\Column(name="negative", type="string", length=255, nullable=true)
     */
    public $negative;

    /**
     * @var bool
     *
     * @ORM\Column(name="fordel", type="boolean", nullable=false)
     */
    public $fordel = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="ok", type="boolean", nullable=false)
     */
    public $ok = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="ndog", type="string", length=100, nullable=true)
     */
    public $ndog;

    /**
     * @var int|null
     *
     * @ORM\Column(name="midnight", type="integer", nullable=true)
     */
    public $midnight;

    /**
     * @var int|null
     *
     * @ORM\Column(name="site_order", type="integer", nullable=true)
     */
    public $siteOrder;

    /**
     * @var bool
     *
     * @ORM\Column(name="userorder", type="boolean", nullable=false, options={"comment"="Под ЗП"})
     */
    public $userorder = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="_dt", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    public $dt = 'CURRENT_TIMESTAMP';

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

    public function getIdflat(): ?int
    {
        return $this->idflat;
    }

    public function setIdflat(int $idflat): self
    {
        $this->idflat = $idflat;

        return $this;
    }

    public function getAdres(): ?string
    {
        return $this->adres;
    }

    public function setAdres(string $adres): self
    {
        $this->adres = $adres;

        return $this;
    }

    public function getArrival(): ?\DateTimeInterface
    {
        return $this->arrival;
    }

    public function setArrival(\DateTimeInterface $arrival): self
    {
        $this->arrival = $arrival;

        return $this;
    }

    public function getDeparture(): ?\DateTimeInterface
    {
        return $this->departure;
    }

    public function setDeparture(\DateTimeInterface $departure): self
    {
        $this->departure = $departure;

        return $this;
    }

    public function getSumm(): ?int
    {
        return $this->summ;
    }

    public function setSumm(int $summ): self
    {
        $this->summ = $summ;

        return $this;
    }

    public function getSale(): ?int
    {
        return $this->sale;
    }

    public function setSale(int $sale): self
    {
        $this->sale = $sale;

        return $this;
    }

    public function getItogo(): ?int
    {
        return $this->itogo;
    }

    public function setItogo(int $itogo): self
    {
        $this->itogo = $itogo;

        return $this;
    }

    public function getDolg(): ?int
    {
        return $this->dolg;
    }

    public function setDolg(int $dolg): self
    {
        $this->dolg = $dolg;

        return $this;
    }

    public function getOplata(): ?int
    {
        return $this->oplata;
    }

    public function setOplata(int $oplata): self
    {
        $this->oplata = $oplata;

        return $this;
    }

    public function getFromGo(): ?string
    {
        return $this->fromGo;
    }

    public function setFromGo(string $fromGo): self
    {
        $this->fromGo = $fromGo;

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

    public function getOt(): ?string
    {
        return $this->ot;
    }

    public function setOt(string $ot): self
    {
        $this->ot = $ot;

        return $this;
    }

    public function getZalog(): ?string
    {
        return $this->zalog;
    }

    public function setZalog(?string $zalog): self
    {
        $this->zalog = $zalog;

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

    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    public function setCurrency(?string $currency): self
    {
        $this->currency = $currency;

        return $this;
    }

    public function getZalogsumm(): ?int
    {
        return $this->zalogsumm;
    }

    public function setZalogsumm(int $zalogsumm): self
    {
        $this->zalogsumm = $zalogsumm;

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

    public function getNegative(): ?string
    {
        return $this->negative;
    }

    public function setNegative(?string $negative): self
    {
        $this->negative = $negative;

        return $this;
    }

    public function getFordel(): ?bool
    {
        return $this->fordel;
    }

    public function setFordel(bool $fordel): self
    {
        $this->fordel = $fordel;

        return $this;
    }

    public function getOk(): ?bool
    {
        return $this->ok;
    }

    public function setOk(bool $ok): self
    {
        $this->ok = $ok;

        return $this;
    }

    public function getNdog(): ?string
    {
        return $this->ndog;
    }

    public function setNdog(?string $ndog): self
    {
        $this->ndog = $ndog;

        return $this;
    }

    public function getMidnight(): ?int
    {
        return $this->midnight;
    }

    public function setMidnight(?int $midnight): self
    {
        $this->midnight = $midnight;

        return $this;
    }

    public function getSiteOrder(): ?int
    {
        return $this->siteOrder;
    }

    public function setSiteOrder(?int $siteOrder): self
    {
        $this->siteOrder = $siteOrder;

        return $this;
    }

    public function getUserorder(): ?bool
    {
        return $this->userorder;
    }

    public function setUserorder(bool $userorder): self
    {
        $this->userorder = $userorder;

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
