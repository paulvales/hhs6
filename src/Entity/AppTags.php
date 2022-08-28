<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AppTags
 *
 * @ORM\Table(name="app_tags", indexes={@ORM\Index(name="id_ap", columns={"id_app"})})
 * @ORM\Entity
 */
class AppTags
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
     * @ORM\Column(name="id_app", type="integer", nullable=false)
     */
    private $idApp;

    /**
     * @var string
     *
     * @ORM\Column(name="tag", type="string", length=100, nullable=false)
     */
    private $tag;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdApp(): ?int
    {
        return $this->idApp;
    }

    public function setIdApp(int $idApp): self
    {
        $this->idApp = $idApp;

        return $this;
    }

    public function getTag(): ?string
    {
        return $this->tag;
    }

    public function setTag(string $tag): self
    {
        $this->tag = $tag;

        return $this;
    }


}
