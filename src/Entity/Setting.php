<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Setting
 *
 * @ORM\Table(name="setting", indexes={@ORM\Index(name="value", columns={"value"})})
 * @ORM\Entity(repositoryClass="App\Repository\SettingRepository")
 */
class Setting
{

    /**
     * @var string
     * @ORM\Id
     * @ORM\Column(name="param", type="string", length=255, nullable=false)
     */
    public $param;

    /**
     * @var string|null
     *
     * @ORM\Column(name="value", type="text", length=65535, nullable=true)
     */
    public $value;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dt", type="datetime", nullable=false)
     */
    public $dt;

    public function getParam(): ?string
    {
        return $this->param;
    }

    public function setParam(string $param): self
    {
        $this->param = $param;

        return $this;
    }

    public function getValue(): ?string
    {
        return $this->value;
    }

    public function setValue(?string $value): self
    {
        $this->value = $value;

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
