<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Product
 *
 * @ORM\Table(name="product")
 * @ORM\Entity
 */
class Product
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_category", type="integer", nullable=false)
     */
    private $idCategory;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=50, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="brand", type="string", length=70, nullable=false)
     */
    private $brand;

    /**
     * @var string
     *
     * @ORM\Column(name="bar_code", type="string", length=15, nullable=true)
     */
    private $barCode;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set idCategory
     *
     * @param integer $idCategory
     * @return Product
     */
    public function setIdCategory($idCategory)
    {
        $this->idCategory = $idCategory;

        return $this;
    }

    /**
     * Get idCategory
     *
     * @return integer 
     */
    public function getIdCategory()
    {
        return $this->idCategory;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Product
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
     * Set brand
     *
     * @param string $brand
     * @return Product
     */
    public function setBrand($brand)
    {
        $this->brand = $brand;

        return $this;
    }

    /**
     * Get brand
     *
     * @return string 
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * Set barCode
     *
     * @param string $barCode
     * @return Product
     */
    public function setBarCode($barCode)
    {
        $this->barCode = $barCode;

        return $this;
    }

    /**
     * Get barCode
     *
     * @return string 
     */
    public function getBarCode()
    {
        return $this->barCode;
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
