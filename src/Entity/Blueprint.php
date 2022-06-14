<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Blueprint
 *
 * @ORM\Table(name="blueprint", indexes={@ORM\Index(name="building_id", columns={"building_id"})})
 * @ORM\Entity
 */
class Blueprint
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
     * @var string|null
     *
     * @ORM\Column(name="scale", type="string", length=10, nullable=true)
     */
    private $scale;

    /**
     * @var string
     *
     * @ORM\Column(name="file_path", type="string", length=25, nullable=false)
     */
    private $filePath;

    /**
     * @var \Building
     *
     * @ORM\ManyToOne(targetEntity="Building")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="building_id", referencedColumnName="id")
     * })
     */
    private $building;


}
