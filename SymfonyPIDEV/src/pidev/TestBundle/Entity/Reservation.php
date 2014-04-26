<?php

namespace pidev\TestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reservation
 *
 * @ORM\Table(name="reservation", indexes={@ORM\Index(name="Reservation_Deal_idx", columns={"idDeal"}), @ORM\Index(name="Reservation_Client_idx", columns={"idClient"})})
 * @ORM\Entity
 */
class Reservation
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idReservation", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var boolean
     *
     * @ORM\Column(name="statutReservation", type="boolean", nullable=false)
     */
    private $statutreservation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateRerservation", type="datetime", nullable=false)
     */
    private $datererservation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateModification", type="datetime", nullable=false)
     */
    private $datemodification;

    /**
     * @var \pidev\TestBundle\Entity\Client
     *
     * @ORM\ManyToOne(targetEntity="pidev\TestBundle\Entity\Client")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idClient", referencedColumnName="idClient")
     * })
     */
    private $idclient;

    /**
     * @var \pidev\TestBundle\Entity\Deal
     *
     * @ORM\ManyToOne(targetEntity="pidev\TestBundle\Entity\Deal")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idDeal", referencedColumnName="idDeal")
     * })
     */
    private $iddeal;



    /**
     * Get idreservation
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set statutreservation
     *
     * @param boolean $statutreservation
     * @return Reservation
     */
    public function setStatutreservation($statutreservation)
    {
        $this->statutreservation = $statutreservation;

        return $this;
    }

    /**
     * Get statutreservation
     *
     * @return boolean 
     */
    public function getStatutreservation()
    {
        return $this->statutreservation;
    }

    /**
     * Set datererservation
     *
     * @param \DateTime $datererservation
     * @return Reservation
     */
    public function setDatererservation($datererservation)
    {
        $this->datererservation = $datererservation;

        return $this;
    }

    /**
     * Get datererservation
     *
     * @return \DateTime 
     */
    public function getDatererservation()
    {
        return $this->datererservation;
    }

    /**
     * Set datemodification
     *
     * @param \DateTime $datemodification
     * @return Reservation
     */
    public function setDatemodification($datemodification)
    {
        $this->datemodification = $datemodification;

        return $this;
    }

    /**
     * Get datemodification
     *
     * @return \DateTime 
     */
    public function getDatemodification()
    {
        return $this->datemodification;
    }

    /**
     * Set idclient
     *
     * @param \pidev\TestBundle\Entity\Client $idclient
     * @return Reservation
     */
    public function setIdclient(\pidev\TestBundle\Entity\Client $idclient = null)
    {
        $this->idclient = $idclient;

        return $this;
    }

    /**
     * Get idclient
     *
     * @return \pidev\TestBundle\Entity\Client 
     */
    public function getIdclient()
    {
        return $this->idclient;
    }

    /**
     * Set iddeal
     *
     * @param \pidev\TestBundle\Entity\Deal $iddeal
     * @return Reservation
     */
    public function setIddeal(\pidev\TestBundle\Entity\Deal $iddeal = null)
    {
        $this->iddeal = $iddeal;

        return $this;
    }

    /**
     * Get iddeal
     *
     * @return \pidev\TestBundle\Entity\Deal 
     */
    public function getIddeal()
    {
        return $this->iddeal;
    }
}
