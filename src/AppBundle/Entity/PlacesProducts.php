<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PlacesProducts
 *
 * @ORM\Table(name="places_products")
 * @ORM\Entity
 */
class PlacesProducts
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_place", type="bigint", nullable=false)
     */
    private $idPlace;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_product", type="bigint", nullable=false)
     */
    private $idProduct;

    /**
     * @var string
     *
     * @ORM\Column(name="price", type="decimal", precision=10, scale=2, nullable=false)
     */
    private $price;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=false)
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="unit_of_measurement", type="string", length=10, nullable=false)
     */
    private $unitOfMeasurement;

    /**
     * @var string
     *
     * @ORM\Column(name="measured_value", type="string", length=6, nullable=false)
     */
    private $measuredValue;

    /**
     * @var string
     *
     * @ORM\Column(name="currency", type="string", length=6, nullable=false)
     */
    private $currency;

    /**
     * @var float
     *
     * @ORM\Column(name="unit_of_value", type="float", precision=10, scale=0, nullable=false)
     */
    private $unitOfValue;

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
     * @return PlacesProducts
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
     * Set idProduct
     *
     * @param integer $idProduct
     * @return PlacesProducts
     */
    public function setIdProduct($idProduct)
    {
        $this->idProduct = $idProduct;

        return $this;
    }

    /**
     * Get idProduct
     *
     * @return integer 
     */
    public function getIdProduct()
    {
        return $this->idProduct;
    }

    /**
     * Set price
     *
     * @param string $price
     * @return PlacesProducts
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return string 
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return PlacesProducts
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set unitOfMeasurement
     *
     * @param string $unitOfMeasurement
     * @return PlacesProducts
     */
    public function setUnitOfMeasurement($unitOfMeasurement)
    {
        $this->unitOfMeasurement = $unitOfMeasurement;

        return $this;
    }

    /**
     * Get unitOfMeasurement
     *
     * @return string 
     */
    public function getUnitOfMeasurement()
    {
        return $this->unitOfMeasurement;
    }

    /**
     * Set measuredValue
     *
     * @param string $measuredValue
     * @return PlacesProducts
     */
    public function setMeasuredValue($measuredValue)
    {
        $this->measuredValue = $measuredValue;

        return $this;
    }

    /**
     * Get measuredValue
     *
     * @return string 
     */
    public function getMeasuredValue()
    {
        return $this->measuredValue;
    }

    /**
     * Set currency
     *
     * @param string $currency
     * @return PlacesProducts
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;

        return $this;
    }

    /**
     * Get currency
     *
     * @return string 
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * Set unitOfValue
     *
     * @param float $unitOfValue
     * @return PlacesProducts
     */
    public function setUnitOfValue($unitOfValue)
    {
        $this->unitOfValue = $unitOfValue;

        return $this;
    }

    /**
     * Get unitOfValue
     *
     * @return float 
     */
    public function getUnitOfValue()
    {
        return $this->unitOfValue;
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
