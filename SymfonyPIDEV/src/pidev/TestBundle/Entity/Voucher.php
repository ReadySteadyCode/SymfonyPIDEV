<?php

namespace pidev\TestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Voucher
 *
 * @ORM\Table(name="voucher", indexes={@ORM\Index(name="Vouche_Reservation_idx", columns={"idReservation"})})
 * @ORM\Entity
 */
class Voucher
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idVoucher", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantiteAchat", type="integer", nullable=false)
     */
    private $quantiteachat;

    /**
     * @var \pidev\TestBundle\Entity\Reservation
     *
     * @ORM\ManyToOne(targetEntity="pidev\TestBundle\Entity\Reservation")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idReservation", referencedColumnName="idReservation")
     * })
     */
    private $idreservation;



    /**
     * Get idvoucher
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set quantiteachat
     *
     * @param integer $quantiteachat
     * @return Voucher
     */
    public function setQuantiteachat($quantiteachat)
    {
        $this->quantiteachat = $quantiteachat;

        return $this;
    }

    /**
     * Get quantiteachat
     *
     * @return integer 
     */
    public function getQuantiteachat()
    {
        return $this->quantiteachat;
    }

    /**
     * Set idreservation
     *
     * @param \pidev\TestBundle\Entity\Reservation $idreservation
     * @return Voucher
     */
    public function setIdreservation(\pidev\TestBundle\Entity\Reservation $idreservation = null)
    {
        $this->idreservation = $idreservation;

        return $this;
    }

    /**
     * Get idreservation
     *
     * @return \pidev\TestBundle\Entity\Reservation 
     */
    public function getIdreservation()
    {
        return $this->idreservation;
    }
}
