<?php

namespace SerieBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Episode
 *
 * @ORM\Table(name="episode")
 * @ORM\Entity(repositoryClass="SerieBundle\Repository\EpisodeRepository")
 */
class Episode
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
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="synopsis", type="text", nullable=true)
     */
    private $synopsis;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="runtime", type="time", nullable=true)
     */
    private $runtime;

    /**
     * @var int
     *
     * @ORM\Column(name="number", type="integer")
     */
    private $number;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="airedDate", type="datetimetz", nullable=true)
     */
    private $airedDate;

    /**
     * @var
     *
     * @ORM\ManyToOne(targetEntity="Season", inversedBy="episodes")
     * @ORM\JoinColumn(nullable=false)
     */
    private $season;

    /**
     * @ORM\ManyToMany(targetEntity="Person", mappedBy="appearances")
     */
    private $guests;

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
     * Set name
     *
     * @param string $name
     * @return Episode
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set synopsis
     *
     * @param string $synopsis
     * @return Episode
     */
    public function setSynopsis($synopsis)
    {
        $this->synopsis = $synopsis;

        return $this;
    }

    /**
     * Get synopsis
     *
     * @return string 
     */
    public function getSynopsis()
    {
        return $this->synopsis;
    }

    /**
     * Set runtime
     *
     * @param \DateTime $runtime
     * @return Episode
     */
    public function setRuntime($runtime)
    {
        $this->runtime = $runtime;

        return $this;
    }

    /**
     * Get runtime
     *
     * @return \DateTime 
     */
    public function getRuntime()
    {
        return $this->runtime;
    }

    /**
     * Set number
     *
     * @param integer $number
     * @return Episode
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
     * Set airedDate
     *
     * @param \DateTime $airedDate
     * @return Episode
     */
    public function setAiredDate($airedDate)
    {
        $this->airedDate = $airedDate;

        return $this;
    }

    /**
     * Get airedDate
     *
     * @return \DateTime 
     */
    public function getAiredDate()
    {
        return $this->airedDate;
    }

    /**
     * Set season
     *
     * @param \SerieBundle\Entity\Season $season
     * @return Episode
     */
    public function setSeason(\SerieBundle\Entity\Season $season)
    {
        $this->season = $season;

        return $this;
    }

    /**
     * Get season
     *
     * @return \SerieBundle\Entity\Season 
     */
    public function getSeason()
    {
        return $this->season;
    }
}
