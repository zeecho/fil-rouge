<?php

namespace SerieBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;
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
     * @var Serie
     *
     * @ORM\ManyToOne(targetEntity="Serie", inversedBy="seasons")
     * @ORM\JoinColumn(nullable=false)
     * @Assert\Type(type="SerieBundle\Entity\Serie")
     * @Assert\Valid()
     */
    protected $serie;

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
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->episodes = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set serie
     *
     * @param \SerieBundle\Entity\Serie $serie
     * @return Season
     */
    public function setSerie(\SerieBundle\Entity\Serie $serie)
    {
        $this->serie = $serie;

        return $this;
    }

    /**
     * Get serie
     *
     * @return \SerieBundle\Entity\Serie 
     */
    public function getSerie()
    {
        return $this->serie;
    }

    /**
     * Add episodes
     *
     * @param \SerieBundle\Entity\Episode $episodes
     * @return Season
     */
    public function addEpisode(\SerieBundle\Entity\Episode $episodes)
    {
        $this->episodes[] = $episodes;

        return $this;
    }

    /**
     * Remove episodes
     *
     * @param \SerieBundle\Entity\Episode $episodes
     */
    public function removeEpisode(\SerieBundle\Entity\Episode $episodes)
    {
        $this->episodes->removeElement($episodes);
    }

    /**
     * Get episodes
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getEpisodes()
    {
        return $this->episodes;
    }
}
