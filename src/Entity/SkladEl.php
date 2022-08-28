<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SkladEl
 *
 * @ORM\Table(name="sklad_el")
 * @ORM\Entity
 */
class SkladEl
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
     * @ORM\Column(name="elem", type="integer", nullable=false)
     */
    private $elem;

    /**
     * @var int
     *
     * @ORM\Column(name="idsklad", type="integer", nullable=false, options={"comment"="Это id склада иммено в таблице sklad"})
     */
    private $idsklad;

    /**
     * @var int
     *
     * @ORM\Column(name="count", type="integer", nullable=false)
     */
    private $count;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getElem(): ?int
    {
        return $this->elem;
    }

    public function setElem(int $elem): self
    {
        $this->elem = $elem;

        return $this;
    }

    public function getIdsklad(): ?int
    {
        return $this->idsklad;
    }

    public function setIdsklad(int $idsklad): self
    {
        $this->idsklad = $idsklad;

        return $this;
    }

    public function getCount(): ?int
    {
        return $this->count;
    }

    public function setCount(int $count): self
    {
        $this->count = $count;

        return $this;
    }


}
