<?php

namespace pidev\TestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Consultation
 *
 * @ORM\Table(name="consultation", indexes={@ORM\Index(name="Consultation_Deal_idx", columns={"IdDeal"}), @ORM\Index(name="Consultation_Deal_Client_idx", columns={"idClient"})})
 * @ORM\Entity
 */
class Consultation
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idConsultation", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateCreation", type="datetime", nullable=true)
     */
    private $datecreation;

    /**
     * @var \pidev\TestBundle\Entity\Deal
     *
     * @ORM\ManyToOne(targetEntity="pidev\TestBundle\Entity\Deal")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IdDeal", referencedColumnName="idDeal")
     * })
     */
    private $iddeal;

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
     * Get idconsultation
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set datecreation
     *
     * @param \DateTime $datecreation
     * @return Consultation
     */
    public function setDatecreation($datecreation)
    {
        $this->datecreation = $datecreation;

        return $this;
    }

    /**
     * Get datecreation
     *
     * @return \DateTime 
     */
    public function getDatecreation()
    {
        return $this->datecreation;
    }

    /**
     * Set iddeal
     *
     * @param \pidev\TestBundle\Entity\Deal $iddeal
     * @return Consultation
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

    /**
     * Set idclient
     *
     * @param \pidev\TestBundle\Entity\Client $idclient
     * @return Consultation
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
}
