<?php

namespace SerieBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Season
 *
 * @ORM\Table(name="season")
 * @ORM\Entity(repositoryClass="SerieBundle\Repository\SeasonRepository")
 */
class Season
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="number", type="integer")
     */
    private $number;

    /**
     * @var
     *
     * @ORM\ManyToOne(targetEntity="Serie", inversedBy="seasons")
     * @ORM\JoinColumn(nullable=false)
     */
    private $serie;

    /**
     * @var ArrayCollection
     *
     * @ORM\OneToMany(targetEntity="Episode", mappedBy="season", cascade={"persist", "remove"})
     */
    private $episodes;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set number
     *
     * @param integer $number
     * @return Season
     */
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Get number
     *
     * @return integer 
     */
    public function getNumber()
    {
        return $this->number;
    }
}
