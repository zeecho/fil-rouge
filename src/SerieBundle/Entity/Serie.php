<?php

namespace SerieBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Serie
 *
 * @ORM\Table(name="serie")
 * @ORM\Entity(repositoryClass="SerieBundle\Repository\SerieRepository")
 */
class Serie
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
     * @ORM\Column(name="summary", type="text", nullable=true)
     */
    private $summary;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="releaseDate", type="date", nullable=true)
     */
    private $releaseDate;

    /**
     * @var ArrayCollection
     *
     * @ORM\OneToMany(targetEntity="Season", mappedBy="serie", cascade={"persist", "remove"})
     */
    private $seasons;

    /**
     * @ORM\ManyToMany(targetEntity="Genre")
     * @ORM\JoinTable(name="series_genres",
     *      joinColumns={@ORM\JoinColumn(name="serie_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="genre_id", referencedColumnName="id")}
     *      )
     */
    private $genres;

    /**
     * @ORM\ManyToMany(targetEntity="Country")
     * @ORM\JoinTable(name="series_countries",
     *      joinColumns={@ORM\JoinColumn(name="serie_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="country_id", referencedColumnName="id")}
     *      )
     */
    private $countries;

    /**
     * @ORM\ManyToOne(targetEntity="Language")
     * @ORM\JoinColumn(name="language_id", referencedColumnName="id")
     */
    private $language;

    /**
     * @ORM\ManyToMany(targetEntity="Person", inversedBy="seriesIn")
     * @ORM\JoinTable(name="series_castings")
     */
    private $casting;

    /**
     * @ORM\ManyToMany(targetEntity="Person", inversedBy="seriesDirected")
     * @ORM\JoinTable(name="series_directors")
     */
    private $directors;

    /**
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\User", mappedBy="favorites")
     */
    private $users;

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
     * @return Serie
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
     * Set summary
     *
     * @param string $summary
     * @return Serie
     */
    public function setSummary($summary)
    {
        $this->summary = $summary;

        return $this;
    }

    /**
     * Get summary
     *
     * @return string 
     */
    public function getSummary()
    {
        return $this->summary;
    }

    /**
     * Set releaseDate
     *
     * @param \DateTime $releaseDate
     * @return Serie
     */
    public function setReleaseDate($releaseDate)
    {
        $this->releaseDate = $releaseDate;

        return $this;
    }

    /**
     * Get releaseDate
     *
     * @return \DateTime 
     */
    public function getReleaseDate()
    {
        return $this->releaseDate;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->seasons = new \Doctrine\Common\Collections\ArrayCollection();
        $this->countries = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add seasons
     *
     * @param \SerieBundle\Entity\Season $seasons
     * @return Serie
     */
    public function addSeason(\SerieBundle\Entity\Season $seasons)
    {
        $this->seasons[] = $seasons;

        return $this;
    }

    /**
     * Remove seasons
     *
     * @param \SerieBundle\Entity\Season $seasons
     */
    public function removeSeason(\SerieBundle\Entity\Season $seasons)
    {
        $this->seasons->removeElement($seasons);
    }

    /**
     * Get seasons
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSeasons()
    {
        return $this->seasons;
    }

    /**
     * Add countries
     *
     * @param \SerieBundle\Entity\Country $countries
     * @return Serie
     */
    public function addCountry(\SerieBundle\Entity\Country $countries)
    {
        $this->countries[] = $countries;

        return $this;
    }

    /**
     * Remove countries
     *
     * @param \SerieBundle\Entity\Country $countries
     */
    public function removeCountry(\SerieBundle\Entity\Country $countries)
    {
        $this->countries->removeElement($countries);
    }

    /**
     * Get countries
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCountries()
    {
        return $this->countries;
    }

    /**
     * Add genres
     *
     * @param \SerieBundle\Entity\Genre $genres
     * @return Serie
     */
    public function addGenre(\SerieBundle\Entity\Genre $genres)
    {
        $this->genres[] = $genres;

        return $this;
    }

    /**
     * Remove genres
     *
     * @param \SerieBundle\Entity\Genre $genres
     */
    public function removeGenre(\SerieBundle\Entity\Genre $genres)
    {
        $this->genres->removeElement($genres);
    }

    /**
     * Get genres
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getGenres()
    {
        return $this->genres;
    }

    /**
     * Set language
     *
     * @param \SerieBundle\Entity\Language $language
     * @return Serie
     */
    public function setLanguage(\SerieBundle\Entity\Language $language = null)
    {
        $this->language = $language;

        return $this;
    }

    /**
     * Get language
     *
     * @return \SerieBundle\Entity\Language 
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Add casting
     *
     * @param \SerieBundle\Entity\Person $casting
     * @return Serie
     */
    public function addCasting(\SerieBundle\Entity\Person $casting)
    {
        $this->casting[] = $casting;

        return $this;
    }

    /**
     * Remove casting
     *
     * @param \SerieBundle\Entity\Person $casting
     */
    public function removeCasting(\SerieBundle\Entity\Person $casting)
    {
        $this->casting->removeElement($casting);
    }

    /**
     * Get casting
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCasting()
    {
        return $this->casting;
    }

    /**
     * Add directors
     *
     * @param \SerieBundle\Entity\Person $directors
     * @return Serie
     */
    public function addDirector(\SerieBundle\Entity\Person $directors)
    {
        $this->directors[] = $directors;

        return $this;
    }

    /**
     * Remove directors
     *
     * @param \SerieBundle\Entity\Person $directors
     */
    public function removeDirector(\SerieBundle\Entity\Person $directors)
    {
        $this->directors->removeElement($directors);
    }

    /**
     * Get directors
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getDirectors()
    {
        return $this->directors;
    }

    /**
     * Add users
     *
     * @param \AppBundle\Entity\User $users
     * @return Serie
     */
    public function addUser(\AppBundle\Entity\User $users)
    {
        $this->users[] = $users;

        return $this;
    }

    /**
     * Remove users
     *
     * @param \AppBundle\Entity\User $users
     */
    public function removeUser(\AppBundle\Entity\User $users)
    {
        $this->users->removeElement($users);
    }

    /**
     * Get users
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getUsers()
    {
        return $this->users;
    }
}
