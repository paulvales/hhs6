<?php

namespace App\Entity;

use App\Repository\OrdersRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * Orders
 *
 * @ORM\Table(name="orders", indexes={@ORM\Index(name="id", columns={"id"}), @ORM\Index(name="user", columns={"user"}), @ORM\Index(name="idclient", columns={"idclient"}), @ORM\Index(name="ot", columns={"ot"}), @ORM\Index(name="idflat", columns={"idflat"})})
 */
#[ORM\Entity(repositoryClass: OrdersRepository::class)]
#[ORM\Table(name: 'orders')]
#[UniqueEntity(fields: ['phone'], message: 'There is already an account with this phone')]
class Orders
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    public $id;

    #[ORM\Column(type: 'integer')]
    public $idclient;

    /**
     * @var int
     *
     * @ORM\Column(name="idflat", type="integer", nullable=false)
     */
    public $idflat;


    #[ORM\Column(type: 'string')]
    public $adres;


    #[ORM\Column(type: 'datetime_immutable')]
    public $arrival;


    #[ORM\Column(type: 'datetime_immutable')]
    public $departure;

    /**
     * @var int
     *
     * @ORM\Column(name="summ", type="integer", nullable=false, options={"comment"="Сумма при создании прикрепления, на всякий случай"})
     */
    #[ORM\Column(type: 'integer')]
    public $summ = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="sale", type="integer", nullable=false)
     */
    #[ORM\Column(type: 'integer')]
    public $sale;

    /**
     * @var int
     *
     * @ORM\Column(name="itogo", type="integer", nullable=false)
     */
    #[ORM\Column(type: 'integer')]
    public $itogo;

    /**
     * @var int
     *
     * @ORM\Column(name="dolg", type="integer", nullable=false, options={"comment"="Динамическое значение"})
     */
    #[ORM\Column(type: 'integer')]
    public $dolg;

    /**
     * @var int
     *
     * @ORM\Column(name="oplata", type="integer", nullable=false)
     */
    #[ORM\Column(type: 'integer')]
    public $oplata = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="from_go", type="string", length=255, nullable=false)
     */
    #[ORM\Column(type: 'string')]
    public $fromGo;

    /**
     * @var int
     *
     * @ORM\Column(name="user", type="integer", nullable=false)
     */
    #[ORM\Column(type: 'integer')]
    public $user;

    /**
     * @var string
     *
     * @ORM\Column(name="ot", type="string", length=255, nullable=false, options={"comment"="от кого клиент"})
     */
    #[ORM\Column(type: 'string')]
    public $ot;

    /**
     * @var string|null
     *
     * @ORM\Column(name="zalog", type="string", length=255, nullable=true)
     */
    #[ORM\Column(type: 'string')]
    public $zalog;

    /**
     * @var int
     *
     * @ORM\Column(name="priceday", type="integer", nullable=false)
     */
    #[ORM\Column(type: 'integer')]
    public $priceday;

    /**
     * @var string|null
     *
     * @ORM\Column(name="currency", type="string", length=255, nullable=true)
     */
    #[ORM\Column(type: 'string')]
    public $currency;

    /**
     * @var int
     *
     * @ORM\Column(name="zalogsumm", type="integer", nullable=false, options={"comment"="Сумма залога"})
     */
    #[ORM\Column(type: 'integer')]
    public $zalogsumm = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="text", length=65535, nullable=false)
     */
    #[ORM\Column(type: 'text')]
    public $comment;

    /**
     * @var string|null
     *
     * @ORM\Column(name="negative", type="string", length=255, nullable=true)
     */
    #[ORM\Column(type: 'string')]
    public $negative;

    /**
     * @var bool
     *
     * @ORM\Column(name="fordel", type="boolean", nullable=false)
     */
    #[ORM\Column(type: 'boolean')]
    public $fordel = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="ok", type="boolean", nullable=false)
     */
    #[ORM\Column(type: 'boolean')]
    public $ok = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="ndog", type="string", length=100, nullable=true)
     */
    #[ORM\Column(type: 'string')]
    public $ndog;

    /**
     * @var int|null
     *
     * @ORM\Column(name="midnight", type="integer", nullable=true)
     */
    #[ORM\Column(type: 'integer')]
    public $midnight;

    /**
     * @var int|null
     *
     * @ORM\Column(name="site_order", type="integer", nullable=true)
     */
    #[ORM\Column(type: 'integer')]
    public $siteOrder;

    /**
     * @var bool
     *
     * @ORM\Column(name="userorder", type="boolean", nullable=false, options={"comment"="Под ЗП"})
     */
    #[ORM\Column(type: 'boolean')]
    public $userorder = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="_dt", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    #[ORM\Column(type: 'datetime_immutable')]
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

    public function getDt(): ?\DateTimeImmutable
    {
        return $this->dt;
    }

    public function setDt(\DateTimeImmutable $dt): self
    {
        $this->dt = $dt;

        return $this;
    }


}
