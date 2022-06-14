<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Provider
 *
 * @ORM\Table(name="provider", uniqueConstraints={@ORM\UniqueConstraint(name="contact", columns={"contact"})})
 * @ORM\Entity
 */
class Provider
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
     * @var string
     *
     * @ORM\Column(name="contact", type="string", length=254, nullable=false)
     */
    private $contact;


}
