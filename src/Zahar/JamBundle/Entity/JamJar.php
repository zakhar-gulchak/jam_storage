<?php

namespace Zahar\JamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * JamJar
 *
 * @ORM\Table(name="jam_jar")
 * @ORM\Entity
 */
class JamJar
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
     * @var JamType
     *
     * @ORM\ManyToOne(targetEntity="Zahar\JamBundle\Entity\JamType")
     * @ORM\JoinColumn(name="jam_type_id", referencedColumnName="id", nullable=false)
     */
    private $jamType;

    /**
     * @var YearList
     *
     * @ORM\ManyToOne(targetEntity="Zahar\JamBundle\Entity\YearList")
     * @ORM\JoinColumn(name="year_id", referencedColumnName="id", nullable=false)
     */
    private $year;

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="text")
     */
    private $comment;


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
     * Set jamType
     *
     * @param \stdClass $jamType
     * @return JamJar
     */
    public function setJamType($jamType)
    {
        $this->jamType = $jamType;

        return $this;
    }

    /**
     * Get jamType
     *
     * @return \stdClass
     */
    public function getJamType()
    {
        return $this->jamType;
    }

    /**
     * Set year
     *
     * @param \stdClass $year
     * @return JamJar
     */
    public function setYear($year)
    {
        $this->year = $year;

        return $this;
    }

    /**
     * Get year
     *
     * @return \stdClass
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * Set comment
     *
     * @param string $comment
     * @return JamJar
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment
     *
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }
}
