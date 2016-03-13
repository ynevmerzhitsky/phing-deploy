<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity
 */
class User
{
    /**
     * @var string
     *
     * @ORM\Column(name="first_name", type="string", length=25, nullable=false)
     */
    private $firstName;

    /**
     * @var string
     *
     * @ORM\Column(name="last_name", type="string", length=25, nullable=true)
     */
    private $lastName;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="birthday", type="date", nullable=true)
     */
    private $birthday;

    /**
     * @var float
     *
     * @ORM\Column(name="rating", type="float", precision=10, scale=0, nullable=true)
     */
    private $rating;

    /**
     * @var string
     *
     * @ORM\Column(name="crypt_salt", type="string", length=50, nullable=true)
     */
    private $cryptSalt;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=100, nullable=false)
     */
    private $password;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_country", type="integer", nullable=true)
     */
    private $idCountry;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_city", type="integer", nullable=true)
     */
    private $idCity;

    /**
     * @var integer
     *
     * @ORM\Column(name="sign_up_ip", type="bigint", nullable=false)
     */
    private $signUpIp;

    /**
     * @var string
     *
     * @ORM\Column(name="sign_up_agent", type="string", length=255, nullable=false)
     */
    private $signUpAgent;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="sign_up_date", type="datetime", nullable=false)
     */
    private $signUpDate;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=50, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="email_status", type="string", length=20, nullable=true)
     */
    private $emailStatus;

    /**
     * @var string
     *
     * @ORM\Column(name="phone", type="string", length=20, nullable=false)
     */
    private $phone;

    /**
     * @var string
     *
     * @ORM\Column(name="phone_status", type="string", length=20, nullable=true)
     */
    private $phoneStatus;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_active", type="boolean", nullable=true)
     */
    private $isActive;

    /**
     * @var string
     *
     * @ORM\Column(name="avatar_path", type="string", length=255, nullable=true)
     */
    private $avatarPath;

    /**
     * @var double
     *
     * @ORM\Column(name="latitude", type="decimal", precision=10, scale=8, nullable=true)
     */
    private $latitude;

    /**
     * @var double
     *
     * @ORM\Column(name="longitude", type="decimal", precision=11, scale=8, nullable=true)
     */
    private $longitude;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_language", type="integer", nullable=true)
     */
    private $idLanguage;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set firstName
     *
     * @param string $firstName
     * @return User
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string 
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     * @return User
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string 
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set birthday
     *
     * @param \DateTime $birthday
     * @return User
     */
    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;

        return $this;
    }

    /**
     * Get birthday
     *
     * @return \DateTime 
     */
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * Set rating
     *
     * @param float $rating
     * @return User
     */
    public function setRating($rating)
    {
        $this->rating = $rating;

        return $this;
    }

    /**
     * Get rating
     *
     * @return float 
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * Set cryptSalt
     *
     * @param string $cryptSalt
     * @return User
     */
    public function setCryptSalt($cryptSalt)
    {
        $this->cryptSalt = $cryptSalt;

        return $this;
    }

    /**
     * Get cryptSalt
     *
     * @return string 
     */
    public function getCryptSalt()
    {
        return $this->cryptSalt;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return User
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set idCountry
     *
     * @param integer $idCountry
     * @return User
     */
    public function setIdCountry($idCountry)
    {
        $this->idCountry = $idCountry;

        return $this;
    }

    /**
     * Get idCountry
     *
     * @return integer 
     */
    public function getIdCountry()
    {
        return $this->idCountry;
    }

    /**
     * Set idCity
     *
     * @param integer $idCity
     * @return User
     */
    public function setIdCity($idCity)
    {
        $this->idCity = $idCity;

        return $this;
    }

    /**
     * Get idCity
     *
     * @return integer 
     */
    public function getIdCity()
    {
        return $this->idCity;
    }

    /**
     * Set signUpIp
     *
     * @param integer $signUpIp
     * @return User
     */
    public function setSignUpIp($signUpIp)
    {
        $this->signUpIp = $signUpIp;

        return $this;
    }

    /**
     * Get signUpIp
     *
     * @return integer 
     */
    public function getSignUpIp()
    {
        return $this->signUpIp;
    }

    /**
     * Set signUpAgent
     *
     * @param string $signUpAgent
     * @return User
     */
    public function setSignUpAgent($signUpAgent)
    {
        $this->signUpAgent = $signUpAgent;

        return $this;
    }

    /**
     * Get signUpAgent
     *
     * @return string 
     */
    public function getSignUpAgent()
    {
        return $this->signUpAgent;
    }

    /**
     * Set signUpDate
     *
     * @param \DateTime $signUpDate
     * @return User
     */
    public function setSignUpDate($signUpDate)
    {
        $this->signUpDate = $signUpDate;

        return $this;
    }

    /**
     * Get signUpDate
     *
     * @return \DateTime 
     */
    public function getSignUpDate()
    {
        return $this->signUpDate;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return User
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set emailStatus
     *
     * @param string $emailStatus
     * @return User
     */
    public function setEmailStatus($emailStatus)
    {
        $this->emailStatus = $emailStatus;

        return $this;
    }

    /**
     * Get emailStatus
     *
     * @return string 
     */
    public function getEmailStatus()
    {
        return $this->emailStatus;
    }

    /**
     * Set phone
     *
     * @param string $phone
     * @return User
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return string 
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set phoneStatus
     *
     * @param string $phoneStatus
     * @return User
     */
    public function setPhoneStatus($phoneStatus)
    {
        $this->phoneStatus = $phoneStatus;

        return $this;
    }

    /**
     * Get phoneStatus
     *
     * @return string 
     */
    public function getPhoneStatus()
    {
        return $this->phoneStatus;
    }

    /**
     * Set isActive
     *
     * @param boolean $isActive
     * @return User
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;

        return $this;
    }

    /**
     * Get isActive
     *
     * @return boolean 
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * Set avatarPath
     *
     * @param string $avatarPath
     * @return User
     */
    public function setAvatarPath($avatarPath)
    {
        $this->avatarPath = $avatarPath;

        return $this;
    }

    /**
     * Get avatarPath
     *
     * @return string 
     */
    public function getAvatarPath()
    {
        return $this->avatarPath;
    }

    /**
     * Set latitude
     *
     * @param float $latitude
     * @return User
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;

        return $this;
    }

    /**
     * Get latitude
     *
     * @return float 
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Set longitude
     *
     * @param float $longitude
     * @return User
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;

        return $this;
    }

    /**
     * Get longitude
     *
     * @return float 
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Set idLanguage
     *
     * @param integer $idLanguage
     * @return User
     */
    public function setIdLanguage($idLanguage)
    {
        $this->idLanguage = $idLanguage;

        return $this;
    }

    /**
     * Get idLanguage
     *
     * @return integer 
     */
    public function getIdLanguage()
    {
        return $this->idLanguage;
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
