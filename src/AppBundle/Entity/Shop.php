<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Shop
 *
 * @ORM\Table(name="shop")
 * @ORM\Entity
 */
class Shop
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_place", type="bigint", nullable=false)
     */
    private $idPlace;

    /**
     * @var boolean
     *
     * @ORM\Column(name="rating", type="boolean", nullable=true)
     */
    private $rating;

    /**
     * @var integer
     *
     * @ORM\Column(name="assortment", type="integer", nullable=false)
     */
    private $assortment;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=50, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="additional_information", type="string", length=120, nullable=true)
     */
    private $additionalInformation;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set idPlace
     *
     * @param integer $idPlace
     * @return Shop
     */
    public function setIdPlace($idPlace)
    {
        $this->idPlace = $idPlace;

        return $this;
    }

    /**
     * Get idPlace
     *
     * @return integer 
     */
    public function getIdPlace()
    {
        return $this->idPlace;
    }

    /**
     * Set rating
     *
     * @param boolean $rating
     * @return Shop
     */
    public function setRating($rating)
    {
        $this->rating = $rating;

        return $this;
    }

    /**
     * Get rating
     *
     * @return boolean 
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * Set assortment
     *
     * @param integer $assortment
     * @return Shop
     */
    public function setAssortment($assortment)
    {
        $this->assortment = $assortment;

        return $this;
    }

    /**
     * Get assortment
     *
     * @return integer 
     */
    public function getAssortment()
    {
        return $this->assortment;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Shop
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
     * Set additionalInformation
     *
     * @param string $additionalInformation
     * @return Shop
     */
    public function setAdditionalInformation($additionalInformation)
    {
        $this->additionalInformation = $additionalInformation;

        return $this;
    }

    /**
     * Get additionalInformation
     *
     * @return string 
     */
    public function getAdditionalInformation()
    {
        return $this->additionalInformation;
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
