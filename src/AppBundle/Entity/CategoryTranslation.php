<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CategoryTranslation
 *
 * @ORM\Table(name="category_translation")
 * @ORM\Entity
 */
class CategoryTranslation
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_locale", type="integer", nullable=false)
     */
    private $idLocale;

    /**
     * @var string
     *
     * @ORM\Column(name="translate_key", type="string", length=20, nullable=false)
     */
    private $translateKey;

    /**
     * @var string
     *
     * @ORM\Column(name="translate_value", type="string", length=255, nullable=false)
     */
    private $translateValue;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set idLocale
     *
     * @param integer $idLocale
     * @return CategoryTranslation
     */
    public function setIdLocale($idLocale)
    {
        $this->idLocale = $idLocale;

        return $this;
    }

    /**
     * Get idLocale
     *
     * @return integer 
     */
    public function getIdLocale()
    {
        return $this->idLocale;
    }

    /**
     * Set translateKey
     *
     * @param string $translateKey
     * @return CategoryTranslation
     */
    public function setTranslateKey($translateKey)
    {
        $this->translateKey = $translateKey;

        return $this;
    }

    /**
     * Get translateKey
     *
     * @return string 
     */
    public function getTranslateKey()
    {
        return $this->translateKey;
    }

    /**
     * Set translateValue
     *
     * @param string $translateValue
     * @return CategoryTranslation
     */
    public function setTranslateValue($translateValue)
    {
        $this->translateValue = $translateValue;

        return $this;
    }

    /**
     * Get translateValue
     *
     * @return string 
     */
    public function getTranslateValue()
    {
        return $this->translateValue;
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
