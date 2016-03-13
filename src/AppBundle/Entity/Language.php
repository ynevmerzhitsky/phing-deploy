<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Language
 *
 * @ORM\Table(name="language", uniqueConstraints={@ORM\UniqueConstraint(name="unique_locale", columns={"locale"})})
 * @ORM\Entity
 */
class Language
{
    /**
     * @var string
     *
     * @ORM\Column(name="locale", type="string", length=10, nullable=false)
     */
    private $locale;

    /**
     * @var string
     *
     * @ORM\Column(name="language_name", type="string", length=50, nullable=true)
     */
    private $languageName;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set locale
     *
     * @param string $locale
     * @return Language
     */
    public function setLocale($locale)
    {
        $this->locale = $locale;

        return $this;
    }

    /**
     * Get locale
     *
     * @return string 
     */
    public function getLocale()
    {
        return $this->locale;
    }

    /**
     * Set languageName
     *
     * @param string $languageName
     * @return Language
     */
    public function setLanguageName($languageName)
    {
        $this->languageName = $languageName;

        return $this;
    }

    /**
     * Get languageName
     *
     * @return string 
     */
    public function getLanguageName()
    {
        return $this->languageName;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}
