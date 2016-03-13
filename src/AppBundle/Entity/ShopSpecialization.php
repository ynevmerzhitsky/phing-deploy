<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ShopSpecialization
 *
 * @ORM\Table(name="shop_specialization")
 * @ORM\Entity
 */
class ShopSpecialization
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_shop", type="bigint", nullable=true)
     */
    private $idShop;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_specialization", type="integer", nullable=true)
     */
    private $idSpecialization;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set idShop
     *
     * @param integer $idShop
     * @return ShopSpecialization
     */
    public function setIdShop($idShop)
    {
        $this->idShop = $idShop;

        return $this;
    }

    /**
     * Get idShop
     *
     * @return integer 
     */
    public function getIdShop()
    {
        return $this->idShop;
    }

    /**
     * Set idSpecialization
     *
     * @param integer $idSpecialization
     * @return ShopSpecialization
     */
    public function setIdSpecialization($idSpecialization)
    {
        $this->idSpecialization = $idSpecialization;

        return $this;
    }

    /**
     * Get idSpecialization
     *
     * @return integer 
     */
    public function getIdSpecialization()
    {
        return $this->idSpecialization;
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
