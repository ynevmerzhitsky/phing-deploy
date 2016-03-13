<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Place
 *
 * @ORM\Table(name="place")
 * @ORM\Entity
 */
class Place
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_building", type="bigint", nullable=false)
     */
    private $idBuilding;

    /**
     * @var string
     *
     * @ORM\Column(name="type_place", type="string", length=10, nullable=false)
     */
    private $typePlace;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set idBuilding
     *
     * @param integer $idBuilding
     * @return Place
     */
    public function setIdBuilding($idBuilding)
    {
        $this->idBuilding = $idBuilding;

        return $this;
    }

    /**
     * Get idBuilding
     *
     * @return integer 
     */
    public function getIdBuilding()
    {
        return $this->idBuilding;
    }

    /**
     * Set typePlace
     *
     * @param string $typePlace
     * @return Place
     */
    public function setTypePlace($typePlace)
    {
        $this->typePlace = $typePlace;

        return $this;
    }

    /**
     * Get typePlace
     *
     * @return string 
     */
    public function getTypePlace()
    {
        return $this->typePlace;
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
