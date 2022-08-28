<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Smena
 *
 * @ORM\Table(name="smena")
 * @ORM\Entity
 */
class Smena
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
     * @ORM\Column(name="ot", type="integer", nullable=false)
     */
    private $ot;

    /**
     * @var int
     *
     * @ORM\Column(name="komu", type="integer", nullable=false)
     */
    private $komu;

    /**
     * @var int
     *
     * @ORM\Column(name="zalog", type="integer", nullable=false)
     */
    private $zalog;

    /**
     * @var string
     *
     * @ORM\Column(name="freef", type="string", length=255, nullable=false)
     */
    private $freef;

    /**
     * @var int
     *
     * @ORM\Column(name="prif", type="integer", nullable=false)
     */
    private $prif;

    /**
     * @var int
     *
     * @ORM\Column(name="dirtyf", type="integer", nullable=false)
     */
    private $dirtyf;

    /**
     * @var int
     *
     * @ORM\Column(name="kassa", type="integer", nullable=false)
     */
    private $kassa;

    /**
     * @var string
     *
     * @ORM\Column(name="step2", type="text", length=65535, nullable=false)
     */
    private $step2;

    /**
     * @var string
     *
     * @ORM\Column(name="step3", type="text", length=65535, nullable=false)
     */
    private $step3;

    /**
     * @var string
     *
     * @ORM\Column(name="step4", type="text", length=65535, nullable=false)
     */
    private $step4;

    /**
     * @var string
     *
     * @ORM\Column(name="step5", type="text", length=65535, nullable=false)
     */
    private $step5;

    /**
     * @var string
     *
     * @ORM\Column(name="step6", type="text", length=65535, nullable=false)
     */
    private $step6;

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

    public function getOt(): ?int
    {
        return $this->ot;
    }

    public function setOt(int $ot): self
    {
        $this->ot = $ot;

        return $this;
    }

    public function getKomu(): ?int
    {
        return $this->komu;
    }

    public function setKomu(int $komu): self
    {
        $this->komu = $komu;

        return $this;
    }

    public function getZalog(): ?int
    {
        return $this->zalog;
    }

    public function setZalog(int $zalog): self
    {
        $this->zalog = $zalog;

        return $this;
    }

    public function getFreef(): ?string
    {
        return $this->freef;
    }

    public function setFreef(string $freef): self
    {
        $this->freef = $freef;

        return $this;
    }

    public function getPrif(): ?int
    {
        return $this->prif;
    }

    public function setPrif(int $prif): self
    {
        $this->prif = $prif;

        return $this;
    }

    public function getDirtyf(): ?int
    {
        return $this->dirtyf;
    }

    public function setDirtyf(int $dirtyf): self
    {
        $this->dirtyf = $dirtyf;

        return $this;
    }

    public function getKassa(): ?int
    {
        return $this->kassa;
    }

    public function setKassa(int $kassa): self
    {
        $this->kassa = $kassa;

        return $this;
    }

    public function getStep2(): ?string
    {
        return $this->step2;
    }

    public function setStep2(string $step2): self
    {
        $this->step2 = $step2;

        return $this;
    }

    public function getStep3(): ?string
    {
        return $this->step3;
    }

    public function setStep3(string $step3): self
    {
        $this->step3 = $step3;

        return $this;
    }

    public function getStep4(): ?string
    {
        return $this->step4;
    }

    public function setStep4(string $step4): self
    {
        $this->step4 = $step4;

        return $this;
    }

    public function getStep5(): ?string
    {
        return $this->step5;
    }

    public function setStep5(string $step5): self
    {
        $this->step5 = $step5;

        return $this;
    }

    public function getStep6(): ?string
    {
        return $this->step6;
    }

    public function setStep6(string $step6): self
    {
        $this->step6 = $step6;

        return $this;
    }


}
