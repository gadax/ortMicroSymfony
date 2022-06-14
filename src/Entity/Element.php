<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Element
 *
 * @ORM\Table(name="element", indexes={@ORM\Index(name="provider_id", columns={"provider_id"})})
 * @ORM\Entity
 */
class Element
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
     * @var string
     *
     * @ORM\Column(name="material", type="string", length=70, nullable=false)
     */
    private $material;

    /**
     * @var \Provider
     *
     * @ORM\ManyToOne(targetEntity="Provider")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="provider_id", referencedColumnName="id")
     * })
     */
    private $provider;


}
