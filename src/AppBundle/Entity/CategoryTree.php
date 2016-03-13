<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CategoryTree
 *
 * @ORM\Table(name="category_tree")
 * @ORM\Entity
 */
class CategoryTree
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_ancestor", type="integer", nullable=true)
     */
    private $idAncestor;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_descendant", type="integer", nullable=true)
     */
    private $idDescendant;

    /**
     * @var integer
     *
     * @ORM\Column(name="level", type="integer", nullable=false)
     */
    private $level;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_parent", type="integer", nullable=true)
     */
    private $idParent;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set idAncestor
     *
     * @param integer $idAncestor
     * @return CategoryTree
     */
    public function setIdAncestor($idAncestor)
    {
        $this->idAncestor = $idAncestor;

        return $this;
    }

    /**
     * Get idAncestor
     *
     * @return integer 
     */
    public function getIdAncestor()
    {
        return $this->idAncestor;
    }

    /**
     * Set idDescendant
     *
     * @param integer $idDescendant
     * @return CategoryTree
     */
    public function setIdDescendant($idDescendant)
    {
        $this->idDescendant = $idDescendant;

        return $this;
    }

    /**
     * Get idDescendant
     *
     * @return integer 
     */
    public function getIdDescendant()
    {
        return $this->idDescendant;
    }

    /**
     * Set level
     *
     * @param integer $level
     * @return CategoryTree
     */
    public function setLevel($level)
    {
        $this->level = $level;

        return $this;
    }

    /**
     * Get level
     *
     * @return integer 
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Set idParent
     *
     * @param integer $idParent
     * @return CategoryTree
     */
    public function setIdParent($idParent)
    {
        $this->idParent = $idParent;

        return $this;
    }

    /**
     * Get idParent
     *
     * @return integer 
     */
    public function getIdParent()
    {
        return $this->idParent;
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
