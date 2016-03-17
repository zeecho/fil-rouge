<?php

namespace SerieBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Person
 *
 * @ORM\Table(name="person")
 * @ORM\Entity(repositoryClass="SerieBundle\Repository\PersonRepository")
 */
class Person
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
     * @ORM\Column(name="lastName", type="string", length=255)
     */
    private $lastName;

    /**
     * @var string
     *
     * @ORM\Column(name="firstName", type="string", length=255)
     */
    private $firstName;

    /**
     * @ORM\ManyToMany(targetEntity="Serie", mappedBy="casting")
     */
    private $seriesIn;

    /**
     * @ORM\ManyToMany(targetEntity="Serie", mappedBy="directors")
     */
    private $seriesDirected;

    /**
     * @ORM\ManyToMany(targetEntity="Episode", inversedBy="guests")
     * @ORM\JoinTable(name="episodes_guests")
     */
    private $appearances;

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
     * Set lastName
     *
     * @param string $lastName
     * @return Person
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string 
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set firstName
     *
     * @param string $firstName
     * @return Person
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string 
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Get full name (lastname + firstname)
     *
     * @return string
     */
    public function getLastAndFirstName()
    {
        return $this->lastName . ' ' . $this->firstName;
    }

    /**
     * Get full name (firstname + lastname)
     *
     * @return string
     */
    public function getFirstAndLastName()
    {
        return $this->firstName . ' ' . $this->lastName;
    }

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->seriesIn = new \Doctrine\Common\Collections\ArrayCollection();
        $this->seriesDirected = new \Doctrine\Common\Collections\ArrayCollection();
        $this->appearances = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add seriesIn
     *
     * @param \SerieBundle\Entity\Serie $seriesIn
     * @return Person
     */
    public function addSeriesIn(\SerieBundle\Entity\Serie $seriesIn)
    {
        $this->seriesIn[] = $seriesIn;

        return $this;
    }

    /**
     * Remove seriesIn
     *
     * @param \SerieBundle\Entity\Serie $seriesIn
     */
    public function removeSeriesIn(\SerieBundle\Entity\Serie $seriesIn)
    {
        $this->seriesIn->removeElement($seriesIn);
    }

    /**
     * Get seriesIn
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSeriesIn()
    {
        return $this->seriesIn;
    }

    /**
     * Add seriesDirected
     *
     * @param \SerieBundle\Entity\Serie $seriesDirected
     * @return Person
     */
    public function addSeriesDirected(\SerieBundle\Entity\Serie $seriesDirected)
    {
        $this->seriesDirected[] = $seriesDirected;

        return $this;
    }

    /**
     * Remove seriesDirected
     *
     * @param \SerieBundle\Entity\Serie $seriesDirected
     */
    public function removeSeriesDirected(\SerieBundle\Entity\Serie $seriesDirected)
    {
        $this->seriesDirected->removeElement($seriesDirected);
    }

    /**
     * Get seriesDirected
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSeriesDirected()
    {
        return $this->seriesDirected;
    }

    /**
     * Add appearances
     *
     * @param \SerieBundle\Entity\Episode $appearances
     * @return Person
     */
    public function addAppearance(\SerieBundle\Entity\Episode $appearances)
    {
        $this->appearances[] = $appearances;

        return $this;
    }

    /**
     * Remove appearances
     *
     * @param \SerieBundle\Entity\Episode $appearances
     */
    public function removeAppearance(\SerieBundle\Entity\Episode $appearances)
    {
        $this->appearances->removeElement($appearances);
    }

    /**
     * Get appearances
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAppearances()
    {
        return $this->appearances;
    }
}
