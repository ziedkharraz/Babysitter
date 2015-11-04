<?php

namespace Back\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BabySitter
 *
 * @ORM\Table(name="b_babysitter")
 * @ORM\Entity
 */
class BabySitter
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=255)
     */
    private $address;

    /**
     * @var string
     *
     * @ORM\Column(name="phoneNumber", type="string", length=255)
     */
    private $phoneNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="shortDescription", type="text")
     */
    private $shortDescription;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="birthday", type="date")
     */
    private $birthday;

    /**
     * @var string
     *
     * @ORM\Column(name="gender", type="string", length=255)
     */
    private $gender;

    /**
     * @var array
     *
     * @ORM\Column(name="Languages", type="array")
     */
    private $languages;

    /**
     * @var integer
     *
     * @ORM\Column(name="yearsExperiance", type="integer")
     */
    private $yearsExperiance;

    /**
     * @var integer
     *
     * @ORM\Column(name="kidsAbleCarry", type="integer")
     */
    private $kidsAbleCarry;

    /**
     * @var boolean
     *
     * @ORM\Column(name="pets", type="boolean",nullable=true)
     */
    private $pets;

    /**
     * @var boolean
     *
     * @ORM\Column(name="smoker", type="boolean",nullable=true)
     */
    private $smoker;

    /**
     * @var boolean
     *
     * @ORM\Column(name="alcoholic", type="boolean",nullable=true)
     */
    private $alcoholic;

    /**
     * @var boolean
     *
     * @ORM\Column(name="provideSickCare", type="boolean",nullable=true)
     */
    private $provideSickCare;

    /**
     * @var boolean
     *
     * @ORM\Column(name="specialNeeds", type="boolean",nullable=true)
     */
    private $specialNeeds;

    /**
     * @var boolean
     *
     * @ORM\Column(name="homeWorkHelp", type="boolean",nullable=true)
     */
    private $homeWorkHelp;

    /**
     * @var string
     *
     * @ORM\Column(name="education", type="string", length=255)
     */
    private $education;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set address
     *
     * @param string $address
     *
     * @return BabySitter
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
     * Set phoneNumber
     *
     * @param string $phoneNumber
     *
     * @return BabySitter
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;

        return $this;
    }

    /**
     * Get phoneNumber
     *
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * Set shortDescription
     *
     * @param string $shortDescription
     *
     * @return BabySitter
     */
    public function setShortDescription($shortDescription)
    {
        $this->shortDescription = $shortDescription;

        return $this;
    }

    /**
     * Get shortDescription
     *
     * @return string
     */
    public function getShortDescription()
    {
        return $this->shortDescription;
    }

    /**
     * Set birthday
     *
     * @param \DateTime $birthday
     *
     * @return BabySitter
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
     * Set gender
     *
     * @param string $gender
     *
     * @return BabySitter
     */
    public function setGender($gender)
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * Get gender
     *
     * @return string
     */
    public function getGender()
    {
        return $this->gender;
    }
    

    /**
     * Set yearsExperiance
     *
     * @param integer $yearsExperiance
     *
     * @return BabySitter
     */
    public function setYearsExperiance($yearsExperiance)
    {
        $this->yearsExperiance = $yearsExperiance;

        return $this;
    }

    /**
     * Get yearsExperiance
     *
     * @return integer
     */
    public function getYearsExperiance()
    {
        return $this->yearsExperiance;
    }

    /**
     * Set kidsAbleCarry
     *
     * @param integer $kidsAbleCarry
     *
     * @return BabySitter
     */
    public function setKidsAbleCarry($kidsAbleCarry)
    {
        $this->kidsAbleCarry = $kidsAbleCarry;

        return $this;
    }

    /**
     * Get kidsAbleCarry
     *
     * @return integer
     */
    public function getKidsAbleCarry()
    {
        return $this->kidsAbleCarry;
    }

    /**
     * Set pets
     *
     * @param boolean $pets
     *
     * @return BabySitter
     */
    public function setPets($pets)
    {
        $this->pets = $pets;

        return $this;
    }

    /**
     * Get pets
     *
     * @return boolean
     */
    public function getPets()
    {
        return $this->pets;
    }

    /**
     * Set smoker
     *
     * @param boolean $smoker
     *
     * @return BabySitter
     */
    public function setSmoker($smoker)
    {
        $this->smoker = $smoker;

        return $this;
    }

    /**
     * Get smoker
     *
     * @return boolean
     */
    public function getSmoker()
    {
        return $this->smoker;
    }

    /**
     * Set alcoholic
     *
     * @param boolean $alcoholic
     *
     * @return BabySitter
     */
    public function setAlcoholic($alcoholic)
    {
        $this->alcoholic = $alcoholic;

        return $this;
    }

    /**
     * Get alcoholic
     *
     * @return boolean
     */
    public function getAlcoholic()
    {
        return $this->alcoholic;
    }

    /**
     * Set provideSickCare
     *
     * @param boolean $provideSickCare
     *
     * @return BabySitter
     */
    public function setProvideSickCare($provideSickCare)
    {
        $this->provideSickCare = $provideSickCare;

        return $this;
    }

    /**
     * Get provideSickCare
     *
     * @return boolean
     */
    public function getProvideSickCare()
    {
        return $this->provideSickCare;
    }

    /**
     * Set specialNeeds
     *
     * @param boolean $specialNeeds
     *
     * @return BabySitter
     */
    public function setSpecialNeeds($specialNeeds)
    {
        $this->specialNeeds = $specialNeeds;

        return $this;
    }

    /**
     * Get specialNeeds
     *
     * @return boolean
     */
    public function getSpecialNeeds()
    {
        return $this->specialNeeds;
    }

    /**
     * Set homeWorkHelp
     *
     * @param boolean $homeWorkHelp
     *
     * @return BabySitter
     */
    public function setHomeWorkHelp($homeWorkHelp)
    {
        $this->homeWorkHelp = $homeWorkHelp;

        return $this;
    }

    /**
     * Get homeWorkHelp
     *
     * @return boolean
     */
    public function getHomeWorkHelp()
    {
        return $this->homeWorkHelp;
    }

    /**
     * Set education
     *
     * @param string $education
     *
     * @return BabySitter
     */
    public function setEducation($education)
    {
        $this->education = $education;

        return $this;
    }

    /**
     * Get education
     *
     * @return string
     */
    public function getEducation()
    {
        return $this->education;
    }

    /**
     * @ORM\OneToOne(targetEntity="User", mappedBy="babysitter")
     */
    protected $user;

    /**
     * Set user
     *
     * @param \Back\UserBundle\Entity\User $user
     *
     * @return BabySitter
     */
    public function setUser(\Back\UserBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \Back\UserBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set languages
     *
     * @param array $languages
     *
     * @return BabySitter
     */
    public function setLanguages($languages)
    {
        $this->languages = $languages;

        return $this;
    }

    /**
     * Get languages
     *
     * @return array
     */
    public function getLanguages()
    {
        return $this->languages;
    }
}