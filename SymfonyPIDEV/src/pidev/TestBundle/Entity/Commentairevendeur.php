<?php

namespace pidev\TestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commentairevendeur
 *
 * @ORM\Table(name="commentairevendeur", indexes={@ORM\Index(name="Commentaire_Vendeur_idx", columns={"idVendeur"}), @ORM\Index(name="Commentaire_vendeur_Client_idx", columns={"idClient"})})
 * @ORM\Entity
 */
class Commentairevendeur
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idCommentaireVendeur", type="integer")
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
     * @var \pidev\TestBundle\Entity\Vendeur
     *
     * @ORM\ManyToOne(targetEntity="pidev\TestBundle\Entity\Vendeur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idVendeur", referencedColumnName="idVendeur")
     * })
     */
    private $idvendeur;

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
     * Get idcommentairevendeur
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
     * @return Commentairevendeur
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
     * @return Commentairevendeur
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
     * Set idvendeur
     *
     * @param \pidev\TestBundle\Entity\Vendeur $idvendeur
     * @return Commentairevendeur
     */
    public function setIdvendeur(\pidev\TestBundle\Entity\Vendeur $idvendeur = null)
    {
        $this->idvendeur = $idvendeur;

        return $this;
    }

    /**
     * Get idvendeur
     *
     * @return \pidev\TestBundle\Entity\Vendeur 
     */
    public function getIdvendeur()
    {
        return $this->idvendeur;
    }

    /**
     * Set idclient
     *
     * @param \pidev\TestBundle\Entity\Client $idclient
     * @return Commentairevendeur
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
