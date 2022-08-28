<?php

namespace App\Entity;

use App\Repository\ClientRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;


#[ORM\Entity(repositoryClass: ClientRepository::class)]
#[ORM\Table(name: 'client')]
#[UniqueEntity(fields: ['phone'], message: 'There is already an account with this phone')]
class Client
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    public $id;


    #[ORM\Column(type: 'string',length: 255)]
    public $fio;


    #[ORM\Column(type: 'string',length: 255)]
    public $phone;

    /**
     * @var string|null
     *
     * @ORM\Column(name="phone_2", type="string", length=255, nullable=true)
     */
    public $phone_2;

    /**
     * @var string
     *
     * @ORM\Column(name="iin", type="string", length=100, nullable=false)
     */
    public $iin;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=false)
     */
    public $email;

    /**
     * @var string
     *
     * @ORM\Column(name="from_place", type="string", length=255, nullable=false)
     */
    public $from_place;

    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=255, nullable=false)
     */
    public $city;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=255, nullable=false)
     */
    public $status;

    /**
     * @var string
     *
     * @ORM\Column(name="photo", type="string", length=255, nullable=false)
     */
    public $photo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="doc1", type="string", length=255, nullable=true)
     */
    public $doc1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="doc2", type="string", length=255, nullable=true)
     */
    public $doc2;

    /**
     * @var string
     *
     * @ORM\Column(name="company", type="string", length=255, nullable=false)
     */
    public $company;

    /**
     * @var string
     *
     * @ORM\Column(name="contact", type="string", length=255, nullable=false)
     */
    public $contact;

    /**
     * @var string
     *
     * @ORM\Column(name="from_go", type="string", length=255, nullable=false)
     */
    public $fromGo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dt", type="datetime", nullable=false)
     */
    public $dt;

    /**
     * @var int
     *
     * @ORM\Column(name="_create", type="integer", nullable=false)
     */
    public $create;

    /**
     * @var int
     *
     * @ORM\Column(name="_upd", type="integer", nullable=false)
     */
    public $upd;

    /**
     * @var int
     *
     * @ORM\Column(name="blacklist", type="integer", nullable=false)
     */
    public $blacklist;

    /**
     * @var string|null
     *
     * @ORM\Column(name="loyal_number", type="string", length=255, nullable=true)
     */
    public $loyal_number;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFio(): ?string
    {
        return $this->fio;
    }

    public function setFio(string $fio): self
    {
        $this->fio = $fio;

        return $this;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(?string $phone): self
    {
        $this->phone = $phone;

        return $this;
    }

    public function getPhone2(): ?string
    {
        return $this->phone_2;
    }

    public function setPhone2(?string $phone_2): self
    {
        $this->phone_2 = $phone_2;

        return $this;
    }

    public function getIin(): ?string
    {
        return $this->iin;
    }

    public function setIin(string $iin): self
    {
        $this->iin = $iin;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getFromPlace(): ?string
    {
        return $this->from_place;
    }

    public function setFromPlace(string $from_place): self
    {
        $this->from_place = $from_place;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(string $city): self
    {
        $this->city = $city;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getPhoto(): ?string
    {
        return $this->photo;
    }

    public function setPhoto(string $photo): self
    {
        $this->photo = $photo;

        return $this;
    }

    public function getDoc1(): ?string
    {
        return $this->doc1;
    }

    public function setDoc1(?string $doc1): self
    {
        $this->doc1 = $doc1;

        return $this;
    }

    public function getDoc2(): ?string
    {
        return $this->doc2;
    }

    public function setDoc2(?string $doc2): self
    {
        $this->doc2 = $doc2;

        return $this;
    }

    public function getCompany(): ?string
    {
        return $this->company;
    }

    public function setCompany(string $company): self
    {
        $this->company = $company;

        return $this;
    }

    public function getContact(): ?string
    {
        return $this->contact;
    }

    public function setContact(string $contact): self
    {
        $this->contact = $contact;

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

    public function getDt(): ?\DateTimeInterface
    {
        return $this->dt;
    }

    public function setDt(\DateTimeInterface $dt): self
    {
        $this->dt = $dt;

        return $this;
    }

    public function getCreate(): ?int
    {
        return $this->create;
    }

    public function setCreate(int $create): self
    {
        $this->create = $create;

        return $this;
    }

    public function getUpd(): ?int
    {
        return $this->upd;
    }

    public function setUpd(int $upd): self
    {
        $this->upd = $upd;

        return $this;
    }

    public function getBlacklist(): ?int
    {
        return $this->blacklist;
    }

    public function setBlacklist(int $blacklist): self
    {
        $this->blacklist = $blacklist;

        return $this;
    }

    public function getLoyalNumber(): ?string
    {
        return $this->loyal_number;
    }

    public function setLoyalNumber(?string $loyal_number): self
    {
        $this->loyal_number = $loyal_number;

        return $this;
    }


}
