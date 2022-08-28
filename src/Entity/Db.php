<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Db
 *
 * @ORM\Table(name="db")
 * @ORM\Entity
 */
class Db
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
     * @var string
     *
     * @ORM\Column(name="host", type="string", length=255, nullable=false)
     */
    private $host;

    /**
     * @var string
     *
     * @ORM\Column(name="db", type="string", length=255, nullable=false)
     */
    private $db;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getHost(): ?string
    {
        return $this->host;
    }

    public function setHost(string $host): self
    {
        $this->host = $host;

        return $this;
    }

    public function getDb(): ?string
    {
        return $this->db;
    }

    public function setDb(string $db): self
    {
        $this->db = $db;

        return $this;
    }


}
