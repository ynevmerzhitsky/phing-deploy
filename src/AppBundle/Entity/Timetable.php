<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Timetable
 *
 * @ORM\Table(name="timetable")
 * @ORM\Entity
 */
class Timetable
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_place", type="bigint", nullable=false)
     */
    private $idPlace;

    /**
     * @var string
     *
     * @ORM\Column(name="day", type="string", length=9, nullable=false)
     */
    private $day;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="time_begin", type="time", nullable=false)
     */
    private $timeBegin;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="time_end", type="time", nullable=false)
     */
    private $timeEnd;

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
     * @return Timetable
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
     * Set day
     *
     * @param string $day
     * @return Timetable
     */
    public function setDay($day)
    {
        $this->day = $day;

        return $this;
    }

    /**
     * Get day
     *
     * @return string 
     */
    public function getDay()
    {
        return $this->day;
    }

    /**
     * Set timeBegin
     *
     * @param \DateTime $timeBegin
     * @return Timetable
     */
    public function setTimeBegin($timeBegin)
    {
        $this->timeBegin = $timeBegin;

        return $this;
    }

    /**
     * Get timeBegin
     *
     * @return \DateTime 
     */
    public function getTimeBegin()
    {
        return $this->timeBegin;
    }

    /**
     * Set timeEnd
     *
     * @param \DateTime $timeEnd
     * @return Timetable
     */
    public function setTimeEnd($timeEnd)
    {
        $this->timeEnd = $timeEnd;

        return $this;
    }

    /**
     * Get timeEnd
     *
     * @return \DateTime 
     */
    public function getTimeEnd()
    {
        return $this->timeEnd;
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
