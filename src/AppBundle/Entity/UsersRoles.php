<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UsersRoles
 *
 * @ORM\Table(name="users_roles")
 * @ORM\Entity
 */
class UsersRoles
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_user", type="bigint", nullable=false)
     */
    private $idUser;

    /**
     * @var boolean
     *
     * @ORM\Column(name="id_role", type="boolean", nullable=false)
     */
    private $idRole;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set idUser
     *
     * @param integer $idUser
     * @return UsersRoles
     */
    public function setIdUser($idUser)
    {
        $this->idUser = $idUser;

        return $this;
    }

    /**
     * Get idUser
     *
     * @return integer 
     */
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * Set idRole
     *
     * @param boolean $idRole
     * @return UsersRoles
     */
    public function setIdRole($idRole)
    {
        $this->idRole = $idRole;

        return $this;
    }

    /**
     * Get idRole
     *
     * @return boolean 
     */
    public function getIdRole()
    {
        return $this->idRole;
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
