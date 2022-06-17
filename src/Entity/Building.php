<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Building
 *
 * @ORM\Table(name="building", indexes={@ORM\Index(name="architect_id", columns={"architect_id"})})
 * @ORM\Entity
 */
class Building
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
     * @ORM\Column(name="name", type="string", length=100, nullable=false)
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="place", type="string", length=100, nullable=true)
     */
    private $place;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="completion_date", type="date", nullable=true)
     */
    private $completionDate;

    /**
     * @var int|null
     *
     * @ORM\Column(name="height_meters", type="integer", nullable=true)
     */
    private $heightMeters;

    /**
     * @var \Architect
     *
     * @ORM\ManyToOne(targetEntity="Architect")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="architect_id", referencedColumnName="id")
     * })
     */
    private $architect;

    public function getName()
    {
        return $this->name;
    }

    public function getPlace()
    {
        return $this->place;
    }

    public function getArchitect()
    {
        return $this->architect;
    }
}
