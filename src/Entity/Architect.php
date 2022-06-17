<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Architect
 *
 * @ORM\Table(name="architect")
 * @ORM\Entity
 */
class Architect
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
     * @ORM\Column(name="name", type="string", length=50, nullable=false)
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="origin", type="string", length=100, nullable=true)
     */
    private $origin;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $new)
    {
        return $this->name = $new;
    }

    public function getOrigin(): ?string
    {
        return $this->origin;
    }

    public function setOrigin(string $new)
    {
        return $this->origin = $new;
    }

}
