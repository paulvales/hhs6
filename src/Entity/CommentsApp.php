<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CommentsApp
 *
 * @ORM\Table(name="comments_app")
 * @ORM\Entity
 */
class CommentsApp
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
     * @ORM\Column(name="dt", type="datetime", nullable=false)
     */
    private $dt;

    /**
     * @var int
     *
     * @ORM\Column(name="appid", type="integer", nullable=false, options={"comment"="задача"})
     */
    private $appid;

    /**
     * @var int
     *
     * @ORM\Column(name="ot", type="integer", nullable=false, options={"comment"="от кого"})
     */
    private $ot;

    /**
     * @var int
     *
     * @ORM\Column(name="k", type="integer", nullable=false, options={"comment"="к кому"})
     */
    private $k;

    /**
     * @var string
     *
     * @ORM\Column(name="comm", type="text", length=65535, nullable=false)
     */
    private $comm;

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

    public function getAppid(): ?int
    {
        return $this->appid;
    }

    public function setAppid(int $appid): self
    {
        $this->appid = $appid;

        return $this;
    }

    public function getOt(): ?int
    {
        return $this->ot;
    }

    public function setOt(int $ot): self
    {
        $this->ot = $ot;

        return $this;
    }

    public function getK(): ?int
    {
        return $this->k;
    }

    public function setK(int $k): self
    {
        $this->k = $k;

        return $this;
    }

    public function getComm(): ?string
    {
        return $this->comm;
    }

    public function setComm(string $comm): self
    {
        $this->comm = $comm;

        return $this;
    }


}
