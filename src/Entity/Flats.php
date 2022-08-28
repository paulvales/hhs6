<?php

namespace App\Entity;

use App\Repository\FlatsRepository;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\JoinColumn;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;


#[ORM\Entity(repositoryClass: FlatsRepository::class)]
#[ORM\Table(name: 'flats')]
#[UniqueEntity(fields: ['id_site'], message: 'There is already an account with this id_site')]
class Flats
{

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    public $id;

    /**
     * @var string
     *
     * @ORM\Column(name="adres", type="text", length=65535, nullable=false)
     */
    public $adres;

    /**
     * @var string
     *
     * @ORM\Column(name="adres_sms", type="string", length=255, nullable=false)
     */
    public $adresSms;

    /**
     * @var string
     *
     * @ORM\Column(name="descr", type="text", length=65535, nullable=false)
     */
    public $descr;

    /**
     * @var int
     *
     * @ORM\Column(name="kom", type="integer", nullable=false)
     */
    public $kom;


    #[ORM\Column(type: 'integer')]
    public $hidden;

    /**
     * @var int
     *
     * @ORM\Column(name="stat", type="integer", nullable=false, options={"default"="0"})
     */
    public $stat = 0;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dt", type="datetime", nullable=true)
     */
    public $dt;

    /**
     * @var int
     *
     * @ORM\Column(name="idmis", type="integer", nullable=true)
     */
    public $idmis;

    /**
     * @var int
     *
     * @ORM\Column(name="priceday", type="integer", nullable=false)
     */
    public $priceday;

    /**
     * @var int
     *
     * @ORM\Column(name="holyday", type="integer", nullable=false, options={"default"="0"})
     */
    public $holyday = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="after9", type="integer", nullable=false, options={"default"="0"})
     */
    public $after9 = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="pricehour", type="integer", nullable=false, options={"default"="0"})
     */
    public $pricehour = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="office", type="integer", nullable=false, options={"default"="1"})
     */
    public $office = '1';

    /**
     * @var int
     *
     * @ORM\Column(name="region", type="integer", nullable=false)
     */
    public $region;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dt_add", type="datetime", nullable=true, options={"default"="CURRENT_TIMESTAMP"})
     */
    public $dtAdd;

    /**
     * @var string|null
     *
     * @ORM\Column(name="checklist", type="string", length=255, nullable=true)
     */
    public $checklist;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tags", type="text", length=65535, nullable=true)
     */
    public $tags;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_site", type="integer", nullable=true)
     */
    public $idSite;

    /**
     * @var int|null
     *
     * @ORM\Column(name="partner", type="integer", nullable=true)
     */
    public $partner;

    /**
     * @var Partners
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Partners")
     * @JoinColumn(name="partner", referencedColumnName="id")
     */
    public $partnerObject;

    /**
     * @var string|null
     *
     * @ORM\Column(name="phone", type="string", length=255, nullable=true)
     */
    public $phone;

    /**
     * @var string
     *
     * @ORM\Column(name="wifi", type="string", length=255, nullable=true)
     */
    public $wifi;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getAdresSms(): ?string
    {
        return $this->adresSms;
    }

    public function setAdresSms(string $adresSms): self
    {
        $this->adresSms = $adresSms;

        return $this;
    }

    public function getDescr(): ?string
    {
        return $this->descr;
    }

    public function setDescr(string $descr): self
    {
        $this->descr = $descr;

        return $this;
    }

    public function getKom(): ?int
    {
        return $this->kom;
    }

    public function setKom(int $kom): self
    {
        $this->kom = $kom;

        return $this;
    }

    public function getHidden(): ?int
    {
        return $this->hidden;
    }

    public function setHidden(int $hidden): self
    {
        $this->hidden = $hidden;

        return $this;
    }

    public function getStat(): ?int
    {
        return $this->stat;
    }

    public function setStat(int $stat): self
    {
        $this->stat = $stat;

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

    public function getIdmis(): ?int
    {
        return $this->idmis;
    }

    public function setIdmis(int $idmis): self
    {
        $this->idmis = $idmis;

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

    public function getHolyday(): ?int
    {
        return $this->holyday;
    }

    public function setHolyday(int $holyday): self
    {
        $this->holyday = $holyday;

        return $this;
    }

    public function getAfter9(): ?int
    {
        return $this->after9;
    }

    public function setAfter9(int $after9): self
    {
        $this->after9 = $after9;

        return $this;
    }

    public function getPricehour(): ?int
    {
        return $this->pricehour;
    }

    public function setPricehour(int $pricehour): self
    {
        $this->pricehour = $pricehour;

        return $this;
    }

    public function getOffice(): ?int
    {
        return $this->office;
    }

    public function setOffice(int $office): self
    {
        $this->office = $office;

        return $this;
    }

    public function getRegion(): ?int
    {
        return $this->region;
    }

    public function setRegion(int $region): self
    {
        $this->region = $region;

        return $this;
    }

    public function getDtAdd(): ?\DateTimeInterface
    {
        return $this->dtAdd;
    }

    public function setDtAdd(?\DateTimeInterface $dtAdd): self
    {
        $this->dtAdd = $dtAdd;

        return $this;
    }

    public function getChecklist(): ?string
    {
        return $this->checklist;
    }

    public function setChecklist(?string $checklist): self
    {
        $this->checklist = $checklist;

        return $this;
    }

    public function getTags(): ?string
    {
        return $this->tags;
    }

    public function setTags(?string $tags): self
    {
        $this->tags = $tags;

        return $this;
    }

    public function getIdSite(): ?int
    {
        return $this->idSite;
    }

    public function setIdSite(?int $idSite): self
    {
        $this->idSite = $idSite;

        return $this;
    }

    public function getPartner(): ?int
    {
        return $this->partner;
    }

    public function setPartner(?int $partner): self
    {
        $this->partner = $partner;

        return $this;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(?string $phone): self
    {
        $this->phone = preg_replace('/\D/', '', $phone);

        return $this;
    }

    public function getWifi(): ?string
    {
        return $this->wifi;
    }

    public function setWifi(string $wifi): self
    {
        $this->wifi = $wifi;

        return $this;
    }

    /**
     * @return Partners
     */
    public function getPartnerObject(): Partners
    {
        return $this->partnerObject;
    }

    /**
     * @param Partners $partnerObject
     */
    public function setPartnerObject(Partners $partnerObject): void
    {
        $this->partnerObject = $partnerObject;
    }


}
