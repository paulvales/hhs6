<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OutList
 *
 * @ORM\Table(name="out_list", indexes={@ORM\Index(name="idorder", columns={"idorder"}), @ORM\Index(name="idflat", columns={"idflat"}), @ORM\Index(name="_user", columns={"_user"}), @ORM\Index(name="idclient", columns={"idclient"})})
 * @ORM\Entity
 */
class OutList
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
     * @ORM\Column(name="idflat", type="integer", nullable=false)
     */
    private $idflat;

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
     * @var \DateTime
     *
     * @ORM\Column(name="dt", type="datetime", nullable=false)
     */
    private $dt;

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="text", length=65535, nullable=false)
     */
    private $comment;

    /**
     * @var bool
     *
     * @ORM\Column(name="rating", type="boolean", nullable=false)
     */
    private $rating = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="rating_partner", type="integer", nullable=true)
     */
    private $ratingPartner;

    /**
     * @var int
     *
     * @ORM\Column(name="key", type="integer", nullable=false, options={"comment"="flat_keys"})
     */
    private $key;

    /**
     * @var bool
     *
     * @ORM\Column(name="status", type="boolean", nullable=false, options={"default"="1"})
     */
    private $status = true;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="_datetime", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $datetime = 'CURRENT_TIMESTAMP';

    /**
     * @var int
     *
     * @ORM\Column(name="_user", type="integer", nullable=false)
     */
    private $user;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getDt(): ?\DateTimeInterface
    {
        return $this->dt;
    }

    public function setDt(\DateTimeInterface $dt): self
    {
        $this->dt = $dt;

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

    public function getRating(): ?bool
    {
        return $this->rating;
    }

    public function setRating(bool $rating): self
    {
        $this->rating = $rating;

        return $this;
    }

    public function getRatingPartner(): ?int
    {
        return $this->ratingPartner;
    }

    public function setRatingPartner(?int $ratingPartner): self
    {
        $this->ratingPartner = $ratingPartner;

        return $this;
    }

    public function getKey(): ?int
    {
        return $this->key;
    }

    public function setKey(int $key): self
    {
        $this->key = $key;

        return $this;
    }

    public function getStatus(): ?bool
    {
        return $this->status;
    }

    public function setStatus(bool $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getDatetime(): ?\DateTimeInterface
    {
        return $this->datetime;
    }

    public function setDatetime(\DateTimeInterface $datetime): self
    {
        $this->datetime = $datetime;

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


}
