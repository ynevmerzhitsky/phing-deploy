<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Building
 *
 * @ORM\Table(name="building")
 * @ORM\Entity
 */
class Building
{
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=60, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=60, nullable=false)
     */
    private $address;

    /**
     * @var double
     *
     * @ORM\Column(name="longitude", type="decimal", precision=11, scale=8, nullable=false)
     */
    private $longitude;

    /**
     * @var double
     *
     * @ORM\Column(name="latitude", type="decimal", precision=10, scale=8, nullable=false)
     */
    private $latitude;

    /**
     * @var integer
     *
     * @ORM\Column(name="dst_offset", type="smallint", nullable=false)
     */
    private $dstOffset;

    /**
     * @var integer
     *
     * @ORM\Column(name="raw_offset", type="integer", nullable=false)
     */
    private $rawOffset;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set name
     *
     * @param string $name
     * @return Building
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
     * Set address
     *
     * @param string $address
     * @return Building
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string 
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set longitude
     *
     * @param double $longitude
     * @return Building
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;

        return $this;
    }

    /**
     * Get longitude
     *
     * @return double
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Set latitude
     *
     * @param double $latitude
     * @return Building
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;

        return $this;
    }

    /**
     * Get latitude
     *
     * @return double
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Set dstOffset
     *
     * @param integer $dstOffset
     * @return Building
     */
    public function setDstOffset($dstOffset)
    {
        $this->dstOffset = $dstOffset;

        return $this;
    }

    /**
     * Get dstOffset
     *
     * @return integer 
     */
    public function getDstOffset()
    {
        return $this->dstOffset;
    }

    /**
     * Set rawOffset
     *
     * @param integer $rawOffset
     * @return Building
     */
    public function setRawOffset($rawOffset)
    {
        $this->rawOffset = $rawOffset;

        return $this;
    }

    /**
     * Get rawOffset
     *
     * @return integer 
     */
    public function getRawOffset()
    {
        return $this->rawOffset;
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
