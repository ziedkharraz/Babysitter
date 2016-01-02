<?php

namespace Back\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Calendrier
 *
 * @ORM\Table(name="b_babysitter_calendrier")
 * @ORM\Entity
 */
class Calendrier
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
     * @var integer
     *
     * @ORM\Column(name="year", type="integer")
     */
    private $year;

    /**
     * @var integer
     *
     * @ORM\Column(name="month", type="integer")
     */
    private $month;

    /**
     * @var string
     *
     * @ORM\Column(name="day1", type="decimal",nullable=true)
     */
    private $day1;

    /**
     * @var string
     *
     * @ORM\Column(name="day2", type="decimal",nullable=true)
     */
    private $day2;

    /**
     * @var string
     *
     * @ORM\Column(name="day3", type="decimal",nullable=true)
     */
    private $day3;

    /**
     * @var string
     *
     * @ORM\Column(name="day4", type="decimal",nullable=true)
     */
    private $day4;

    /**
     * @var string
     *
     * @ORM\Column(name="day5", type="decimal",nullable=true)
     */
    private $day5;

    /**
     * @var string
     *
     * @ORM\Column(name="day6", type="decimal",nullable=true)
     */
    private $day6;

    /**
     * @var string
     *
     * @ORM\Column(name="day7", type="decimal",nullable=true)
     */
    private $day7;

    /**
     * @var string
     *
     * @ORM\Column(name="day8", type="decimal",nullable=true)
     */
    private $day8;

    /**
     * @var string
     *
     * @ORM\Column(name="day9", type="decimal",nullable=true)
     */
    private $day9;

    /**
     * @var string
     *
     * @ORM\Column(name="day10", type="decimal",nullable=true)
     */
    private $day10;

    /**
     * @var string
     *
     * @ORM\Column(name="day11", type="decimal",nullable=true)
     */
    private $day11;

    /**
     * @var string
     *
     * @ORM\Column(name="day12", type="decimal",nullable=true)
     */
    private $day12;

    /**
     * @var string
     *
     * @ORM\Column(name="day13", type="decimal",nullable=true)
     */
    private $day13;

    /**
     * @var string
     *
     * @ORM\Column(name="day14", type="decimal",nullable=true)
     */
    private $day14;

    /**
     * @var string
     *
     * @ORM\Column(name="day15", type="decimal",nullable=true)
     */
    private $day15;

    /**
     * @var string
     *
     * @ORM\Column(name="day16", type="decimal",nullable=true)
     */
    private $day16;

    /**
     * @var string
     *
     * @ORM\Column(name="day17", type="decimal",nullable=true)
     */
    private $day17;

    /**
     * @var string
     *
     * @ORM\Column(name="day18", type="decimal",nullable=true)
     */
    private $day18;

    /**
     * @var string
     *
     * @ORM\Column(name="day19", type="decimal",nullable=true)
     */
    private $day19;

    /**
     * @var string
     *
     * @ORM\Column(name="day20", type="decimal",nullable=true)
     */
    private $day20;

    /**
     * @var string
     *
     * @ORM\Column(name="day21", type="decimal",nullable=true)
     */
    private $day21;

    /**
     * @var string
     *
     * @ORM\Column(name="day22", type="decimal",nullable=true)
     */
    private $day22;

    /**
     * @var string
     *
     * @ORM\Column(name="day23", type="decimal",nullable=true)
     */
    private $day23;

    /**
     * @var string
     *
     * @ORM\Column(name="day24", type="decimal",nullable=true)
     */
    private $day24;

    /**
     * @var string
     *
     * @ORM\Column(name="day25", type="decimal",nullable=true)
     */
    private $day25;

    /**
     * @var string
     *
     * @ORM\Column(name="day26", type="decimal",nullable=true)
     */
    private $day26;

    /**
     * @var string
     *
     * @ORM\Column(name="day27", type="decimal",nullable=true)
     */
    private $day27;

    /**
     * @var string
     *
     * @ORM\Column(name="day28", type="decimal",nullable=true)
     */
    private $day28;

    /**
     * @var string
     *
     * @ORM\Column(name="day29", type="decimal",nullable=true)
     */
    private $day29;

    /**
     * @var string
     *
     * @ORM\Column(name="day30", type="decimal",nullable=true)
     */
    private $day30;

    /**
     * @var string
     *
     * @ORM\Column(name="day31", type="decimal",nullable=true)
     */
    private $day31;

    /**
     * @ORM\ManyToOne(targetEntity="BabySitter", inversedBy="user")
     */
    private $babysitter;

    public function __construct($babysitter=null,$year=null,$month=null)
    {
        $this->babysitter=$babysitter;
        $this->year=$year;
        $this->month=$month;
    }

    /**
     * @param int $id
     * @return Calendrier
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
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

    /**
     * Set year
     *
     * @param integer $year
     *
     * @return Calendrier
     */
    public function setYear($year)
    {
        $this->year = $year;

        return $this;
    }

    /**
     * Get year
     *
     * @return integer
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * Set month
     *
     * @param integer $month
     *
     * @return Calendrier
     */
    public function setMonth($month)
    {
        $this->month = $month;

        return $this;
    }

    /**
     * Get month
     *
     * @return integer
     */
    public function getMonth()
    {
        return $this->month;
    }

    /**
     * Set day1
     *
     * @param string $day1
     *
     * @return Calendrier
     */
    public function setDay1($day1)
    {
        $this->day1 = $day1;

        return $this;
    }

    /**
     * Get day1
     *
     * @return string
     */
    public function getDay1()
    {
        return $this->day1;
    }

    /**
     * Set day2
     *
     * @param string $day2
     *
     * @return Calendrier
     */
    public function setDay2($day2)
    {
        $this->day2 = $day2;

        return $this;
    }

    /**
     * Get day2
     *
     * @return string
     */
    public function getDay2()
    {
        return $this->day2;
    }

    /**
     * Set day3
     *
     * @param string $day3
     *
     * @return Calendrier
     */
    public function setDay3($day3)
    {
        $this->day3 = $day3;

        return $this;
    }

    /**
     * Get day3
     *
     * @return string
     */
    public function getDay3()
    {
        return $this->day3;
    }

    /**
     * Set day4
     *
     * @param string $day4
     *
     * @return Calendrier
     */
    public function setDay4($day4)
    {
        $this->day4 = $day4;

        return $this;
    }

    /**
     * Get day4
     *
     * @return string
     */
    public function getDay4()
    {
        return $this->day4;
    }

    /**
     * Set day5
     *
     * @param string $day5
     *
     * @return Calendrier
     */
    public function setDay5($day5)
    {
        $this->day5 = $day5;

        return $this;
    }

    /**
     * Get day5
     *
     * @return string
     */
    public function getDay5()
    {
        return $this->day5;
    }

    /**
     * Set day6
     *
     * @param string $day6
     *
     * @return Calendrier
     */
    public function setDay6($day6)
    {
        $this->day6 = $day6;

        return $this;
    }

    /**
     * Get day6
     *
     * @return string
     */
    public function getDay6()
    {
        return $this->day6;
    }

    /**
     * Set day7
     *
     * @param string $day7
     *
     * @return Calendrier
     */
    public function setDay7($day7)
    {
        $this->day7 = $day7;

        return $this;
    }

    /**
     * Get day7
     *
     * @return string
     */
    public function getDay7()
    {
        return $this->day7;
    }

    /**
     * Set day8
     *
     * @param string $day8
     *
     * @return Calendrier
     */
    public function setDay8($day8)
    {
        $this->day8 = $day8;

        return $this;
    }

    /**
     * Get day8
     *
     * @return string
     */
    public function getDay8()
    {
        return $this->day8;
    }

    /**
     * Set day9
     *
     * @param string $day9
     *
     * @return Calendrier
     */
    public function setDay9($day9)
    {
        $this->day9 = $day9;

        return $this;
    }

    /**
     * Get day9
     *
     * @return string
     */
    public function getDay9()
    {
        return $this->day9;
    }

    /**
     * Set day10
     *
     * @param string $day10
     *
     * @return Calendrier
     */
    public function setDay10($day10)
    {
        $this->day10 = $day10;

        return $this;
    }

    /**
     * Get day10
     *
     * @return string
     */
    public function getDay10()
    {
        return $this->day10;
    }

    /**
     * Set day11
     *
     * @param string $day11
     *
     * @return Calendrier
     */
    public function setDay11($day11)
    {
        $this->day11 = $day11;

        return $this;
    }

    /**
     * Get day11
     *
     * @return string
     */
    public function getDay11()
    {
        return $this->day11;
    }

    /**
     * Set day12
     *
     * @param string $day12
     *
     * @return Calendrier
     */
    public function setDay12($day12)
    {
        $this->day12 = $day12;

        return $this;
    }

    /**
     * Get day12
     *
     * @return string
     */
    public function getDay12()
    {
        return $this->day12;
    }

    /**
     * Set day13
     *
     * @param string $day13
     *
     * @return Calendrier
     */
    public function setDay13($day13)
    {
        $this->day13 = $day13;

        return $this;
    }

    /**
     * Get day13
     *
     * @return string
     */
    public function getDay13()
    {
        return $this->day13;
    }

    /**
     * Set day14
     *
     * @param string $day14
     *
     * @return Calendrier
     */
    public function setDay14($day14)
    {
        $this->day14 = $day14;

        return $this;
    }

    /**
     * Get day14
     *
     * @return string
     */
    public function getDay14()
    {
        return $this->day14;
    }

    /**
     * Set day15
     *
     * @param string $day15
     *
     * @return Calendrier
     */
    public function setDay15($day15)
    {
        $this->day15 = $day15;

        return $this;
    }

    /**
     * Get day15
     *
     * @return string
     */
    public function getDay15()
    {
        return $this->day15;
    }

    /**
     * Set day16
     *
     * @param string $day16
     *
     * @return Calendrier
     */
    public function setDay16($day16)
    {
        $this->day16 = $day16;

        return $this;
    }

    /**
     * Get day16
     *
     * @return string
     */
    public function getDay16()
    {
        return $this->day16;
    }

    /**
     * Set day17
     *
     * @param string $day17
     *
     * @return Calendrier
     */
    public function setDay17($day17)
    {
        $this->day17 = $day17;

        return $this;
    }

    /**
     * Get day17
     *
     * @return string
     */
    public function getDay17()
    {
        return $this->day17;
    }

    /**
     * Set day18
     *
     * @param string $day18
     *
     * @return Calendrier
     */
    public function setDay18($day18)
    {
        $this->day18 = $day18;

        return $this;
    }

    /**
     * Get day18
     *
     * @return string
     */
    public function getDay18()
    {
        return $this->day18;
    }

    /**
     * Set day19
     *
     * @param string $day19
     *
     * @return Calendrier
     */
    public function setDay19($day19)
    {
        $this->day19 = $day19;

        return $this;
    }

    /**
     * Get day19
     *
     * @return string
     */
    public function getDay19()
    {
        return $this->day19;
    }

    /**
     * Set day20
     *
     * @param string $day20
     *
     * @return Calendrier
     */
    public function setDay20($day20)
    {
        $this->day20 = $day20;

        return $this;
    }

    /**
     * Get day20
     *
     * @return string
     */
    public function getDay20()
    {
        return $this->day20;
    }

    /**
     * Set day21
     *
     * @param string $day21
     *
     * @return Calendrier
     */
    public function setDay21($day21)
    {
        $this->day21 = $day21;

        return $this;
    }

    /**
     * Get day21
     *
     * @return string
     */
    public function getDay21()
    {
        return $this->day21;
    }

    /**
     * Set day22
     *
     * @param string $day22
     *
     * @return Calendrier
     */
    public function setDay22($day22)
    {
        $this->day22 = $day22;

        return $this;
    }

    /**
     * Get day22
     *
     * @return string
     */
    public function getDay22()
    {
        return $this->day22;
    }

    /**
     * Set day23
     *
     * @param string $day23
     *
     * @return Calendrier
     */
    public function setDay23($day23)
    {
        $this->day23 = $day23;

        return $this;
    }

    /**
     * Get day23
     *
     * @return string
     */
    public function getDay23()
    {
        return $this->day23;
    }

    /**
     * Set day24
     *
     * @param string $day24
     *
     * @return Calendrier
     */
    public function setDay24($day24)
    {
        $this->day24 = $day24;

        return $this;
    }

    /**
     * Get day24
     *
     * @return string
     */
    public function getDay24()
    {
        return $this->day24;
    }

    /**
     * Set day25
     *
     * @param string $day25
     *
     * @return Calendrier
     */
    public function setDay25($day25)
    {
        $this->day25 = $day25;

        return $this;
    }

    /**
     * Get day25
     *
     * @return string
     */
    public function getDay25()
    {
        return $this->day25;
    }

    /**
     * Set day26
     *
     * @param string $day26
     *
     * @return Calendrier
     */
    public function setDay26($day26)
    {
        $this->day26 = $day26;

        return $this;
    }

    /**
     * Get day26
     *
     * @return string
     */
    public function getDay26()
    {
        return $this->day26;
    }

    /**
     * Set day27
     *
     * @param string $day27
     *
     * @return Calendrier
     */
    public function setDay27($day27)
    {
        $this->day27 = $day27;

        return $this;
    }

    /**
     * Get day27
     *
     * @return string
     */
    public function getDay27()
    {
        return $this->day27;
    }

    /**
     * Set day28
     *
     * @param string $day28
     *
     * @return Calendrier
     */
    public function setDay28($day28)
    {
        $this->day28 = $day28;

        return $this;
    }

    /**
     * Get day28
     *
     * @return string
     */
    public function getDay28()
    {
        return $this->day28;
    }

    /**
     * Set day29
     *
     * @param string $day29
     *
     * @return Calendrier
     */
    public function setDay29($day29)
    {
        $this->day29 = $day29;

        return $this;
    }

    /**
     * Get day29
     *
     * @return string
     */
    public function getDay29()
    {
        return $this->day29;
    }

    /**
     * Set day30
     *
     * @param string $day30
     *
     * @return Calendrier
     */
    public function setDay30($day30)
    {
        $this->day30 = $day30;

        return $this;
    }

    /**
     * Get day30
     *
     * @return string
     */
    public function getDay30()
    {
        return $this->day30;
    }

    /**
     * Set day31
     *
     * @param string $day31
     *
     * @return Calendrier
     */
    public function setDay31($day31)
    {
        $this->day31 = $day31;

        return $this;
    }

    /**
     * Get day31
     *
     * @return string
     */
    public function getDay31()
    {
        return $this->day31;
    }

    /**
     * Set babysitter
     *
     * @param \Back\UserBundle\Entity\BabySitter $babysitter
     *
     * @return Calendrier
     */
    public function setBabysitter(\Back\UserBundle\Entity\BabySitter $babysitter = null)
    {
        $this->babysitter = $babysitter;

        return $this;
    }

    /**
     * Get babysitter
     *
     * @return \Back\UserBundle\Entity\BabySitter
     */
    public function getBabysitter()
    {
        return $this->babysitter;
    }

    public function getUnavailableDays()
    {
        $days=array();
        for($i=1;$i<=31;$i++)
        {
            $attribut='day'.$i;
            if(is_null($this->$attribut) || $this->$attribut==0)
                $days[]=$i;
        }
        return $days;
    }

    public function getPricesDay()
    {
        $days=array();
        for($i=1;$i<=31;$i++)
        {
            $attribut='day'.$i;
            if(!is_null($this->$attribut) &&  $this->$attribut!=0)
                $days[]=$i." : '$".$this->$attribut." /H'";
        }
        return $days;
    }

    public function getPriceByDay($i)
    {
        $attribut='day'.$i;
        return $this->$attribut;
    }

}
