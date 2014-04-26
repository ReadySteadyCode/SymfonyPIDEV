<?php

namespace pidev\TestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Message
 *
 * @ORM\Table(name="message", indexes={@ORM\Index(name="Message_Client_idx", columns={"idClient"})})
 * @ORM\Entity
 */
class Message
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idMessage", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="contenu", type="string", length=160, nullable=false)
     */
    private $contenu;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateEnvoi", type="datetime", nullable=false)
     */
    private $dateenvoi;

    /**
     * @var boolean
     *
     * @ORM\Column(name="statutLivraison", type="boolean", nullable=false)
     */
    private $statutlivraison;

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
     * Get idmessage
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set contenu
     *
     * @param string $contenu
     * @return Message
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
     * Set dateenvoi
     *
     * @param \DateTime $dateenvoi
     * @return Message
     */
    public function setDateenvoi($dateenvoi)
    {
        $this->dateenvoi = $dateenvoi;

        return $this;
    }

    /**
     * Get dateenvoi
     *
     * @return \DateTime 
     */
    public function getDateenvoi()
    {
        return $this->dateenvoi;
    }

    /**
     * Set statutlivraison
     *
     * @param boolean $statutlivraison
     * @return Message
     */
    public function setStatutlivraison($statutlivraison)
    {
        $this->statutlivraison = $statutlivraison;

        return $this;
    }

    /**
     * Get statutlivraison
     *
     * @return boolean 
     */
    public function getStatutlivraison()
    {
        return $this->statutlivraison;
    }

    /**
     * Set idclient
     *
     * @param \pidev\TestBundle\Entity\Client $idclient
     * @return Message
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
