<?php

namespace pidev\TestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commentairedeal
 *
 * @ORM\Table(name="commentairedeal", indexes={@ORM\Index(name="Deal_Comment_idx", columns={"idDeal"}), @ORM\Index(name="Deal_Comment_Client_idx", columns={"idClient"})})
 * @ORM\Entity
 */
class Commentairedeal
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idCommentaireDeal", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateAjout", type="datetime", nullable=false)
     */
    private $dateajout;

    /**
     * @var string
     *
     * @ORM\Column(name="contenu", type="text", nullable=false)
     */
    private $contenu;

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
     * @var \pidev\TestBundle\Entity\Client
     *
     * @ORM\ManyToOne(targetEntity="pidev\TestBundle\Entity\Client")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idClient", referencedColumnName="idClient")
     * })
     */
    private $idclient;



    /**
     * Get idcommentairedeal
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set dateajout
     *
     * @param \DateTime $dateajout
     * @return Commentairedeal
     */
    public function setDateajout($dateajout)
    {
        $this->dateajout = $dateajout;

        return $this;
    }

    /**
     * Get dateajout
     *
     * @return \DateTime 
     */
    public function getDateajout()
    {
        return $this->dateajout;
    }

    /**
     * Set contenu
     *
     * @param string $contenu
     * @return Commentairedeal
     */
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;

        return $this;
    }

    /**
     * Get contenu
     *
     * @return string 
     */
    public function getContenu()
    {
        return $this->contenu;
    }

    /**
     * Set iddeal
     *
     * @param \pidev\TestBundle\Entity\Deal $iddeal
     * @return Commentairedeal
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
     * @return Commentairedeal
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
