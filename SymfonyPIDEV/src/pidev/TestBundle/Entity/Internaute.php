<?php

namespace pidev\TestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Internaute
 *
 * @ORM\Table(name="internaute", uniqueConstraints={@ORM\UniqueConstraint(name="mailInternaute_UNIQUE", columns={"mailInternaute"})})
 * @ORM\Entity
 */
class Internaute
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idInternaute", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="mailInternaute", type="string", length=250, nullable=false)
     */
    private $mailinternaute;

    /**
     * @var string
     *
     * @ORM\Column(name="centreInteret", type="text", nullable=false)
     */
    private $centreinteret;



    /**
     * Get idinternaute
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set mailinternaute
     *
     * @param string $mailinternaute
     * @return Internaute
     */
    public function setMailinternaute($mailinternaute)
    {
        $this->mailinternaute = $mailinternaute;

        return $this;
    }

    /**
     * Get mailinternaute
     *
     * @return string 
     */
    public function getMailinternaute()
    {
        return $this->mailinternaute;
    }

    /**
     * Set centreinteret
     *
     * @param string $centreinteret
     * @return Internaute
     */
    public function setCentreinteret($centreinteret)
    {
        $this->centreinteret = $centreinteret;

        return $this;
    }

    /**
     * Get centreinteret
     *
     * @return string 
     */
    public function getCentreinteret()
    {
        return $this->centreinteret;
    }
}
