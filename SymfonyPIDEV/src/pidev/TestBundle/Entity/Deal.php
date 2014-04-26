<?php

namespace pidev\TestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Deal
 *
 * @ORM\Table(name="deal")
 * @ORM\Entity
 */
class Deal
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idDeal", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="titreDeal", type="string", length=300, nullable=false)
     */
    private $titredeal;

    /**
     * @var string
     *
     * @ORM\Column(name="descDeal", type="text", nullable=false)
     */
    private $descdeal;

    /**
     * @var float
     *
     * @ORM\Column(name="prixDeal", type="float", precision=10, scale=0, nullable=false)
     */
    private $prixdeal;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbrachatactuel", type="integer", nullable=false)
     */
    private $nbrachatactuel;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbrAchatValidation", type="integer", nullable=false)
     */
    private $nbrachatvalidation;

    /**
     * @var string
     *
     * @ORM\Column(name="etatDeal", type="string", length=45, nullable=false)
     */
    private $etatdeal;

    /**
     * @var boolean
     *
     * @ORM\Column(name="StatutDeal", type="boolean", nullable=false)
     */
    private $statutdeal;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateDebut", type="datetime", nullable=false)
     */
    private $datedebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateFin", type="datetime", nullable=false)
     */
    private $datefin;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbrAffichage", type="integer", nullable=true)
     */
    private $nbraffichage;

    /**
     * @var integer
     *
     * @ORM\Column(name="idVendeur", type="integer", nullable=true)
     */
    private $idvendeur;

    /**
     * @var string
     *
     * @ORM\Column(name="categorie", type="string", length=60, nullable=false)
     */
    private $categorie;

    /**
     * @var string
     *
     * @ORM\Column(name="img", type="text", nullable=true)
     */
    private $img;



    /**
     * Get iddeal
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set titredeal
     *
     * @param string $titredeal
     * @return Deal
     */
    public function setTitredeal($titredeal)
    {
        $this->titredeal = $titredeal;

        return $this;
    }

    /**
     * Get titredeal
     *
     * @return string 
     */
    public function getTitredeal()
    {
        return $this->titredeal;
    }

    /**
     * Set descdeal
     *
     * @param string $descdeal
     * @return Deal
     */
    public function setDescdeal($descdeal)
    {
        $this->descdeal = $descdeal;

        return $this;
    }

    /**
     * Get descdeal
     *
     * @return string 
     */
    public function getDescdeal()
    {
        return $this->descdeal;
    }

    /**
     * Set prixdeal
     *
     * @param float $prixdeal
     * @return Deal
     */
    public function setPrixdeal($prixdeal)
    {
        $this->prixdeal = $prixdeal;

        return $this;
    }

    /**
     * Get prixdeal
     *
     * @return float 
     */
    public function getPrixdeal()
    {
        return $this->prixdeal;
    }

    /**
     * Set nbrachatactuel
     *
     * @param integer $nbrachatactuel
     * @return Deal
     */
    public function setNbrachatactuel($nbrachatactuel)
    {
        $this->nbrachatactuel = $nbrachatactuel;

        return $this;
    }

    /**
     * Get nbrachatactuel
     *
     * @return integer 
     */
    public function getNbrachatactuel()
    {
        return $this->nbrachatactuel;
    }

    /**
     * Set nbrachatvalidation
     *
     * @param integer $nbrachatvalidation
     * @return Deal
     */
    public function setNbrachatvalidation($nbrachatvalidation)
    {
        $this->nbrachatvalidation = $nbrachatvalidation;

        return $this;
    }

    /**
     * Get nbrachatvalidation
     *
     * @return integer 
     */
    public function getNbrachatvalidation()
    {
        return $this->nbrachatvalidation;
    }

    /**
     * Set etatdeal
     *
     * @param string $etatdeal
     * @return Deal
     */
    public function setEtatdeal($etatdeal)
    {
        $this->etatdeal = $etatdeal;

        return $this;
    }

    /**
     * Get etatdeal
     *
     * @return string 
     */
    public function getEtatdeal()
    {
        return $this->etatdeal;
    }

    /**
     * Set statutdeal
     *
     * @param boolean $statutdeal
     * @return Deal
     */
    public function setStatutdeal($statutdeal)
    {
        $this->statutdeal = $statutdeal;

        return $this;
    }

    /**
     * Get statutdeal
     *
     * @return boolean 
     */
    public function getStatutdeal()
    {
        return $this->statutdeal;
    }

    /**
     * Set datedebut
     *
     * @param \DateTime $datedebut
     * @return Deal
     */
    public function setDatedebut($datedebut)
    {
        $this->datedebut = $datedebut;

        return $this;
    }

    /**
     * Get datedebut
     *
     * @return \DateTime 
     */
    public function getDatedebut()
    {
        return $this->datedebut;
    }

    /**
     * Set datefin
     *
     * @param \DateTime $datefin
     * @return Deal
     */
    public function setDatefin($datefin)
    {
        $this->datefin = $datefin;

        return $this;
    }

    /**
     * Get datefin
     *
     * @return \DateTime 
     */
    public function getDatefin()
    {
        return $this->datefin;
    }

    /**
     * Set nbraffichage
     *
     * @param integer $nbraffichage
     * @return Deal
     */
    public function setNbraffichage($nbraffichage)
    {
        $this->nbraffichage = $nbraffichage;

        return $this;
    }

    /**
     * Get nbraffichage
     *
     * @return integer 
     */
    public function getNbraffichage()
    {
        return $this->nbraffichage;
    }

    /**
     * Set idvendeur
     *
     * @param integer $idvendeur
     * @return Deal
     */
    public function setIdvendeur($idvendeur)
    {
        $this->idvendeur = $idvendeur;

        return $this;
    }

    /**
     * Get idvendeur
     *
     * @return integer 
     */
    public function getIdvendeur()
    {
        return $this->idvendeur;
    }

    /**
     * Set categorie
     *
     * @param string $categorie
     * @return Deal
     */
    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * Get categorie
     *
     * @return string 
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * Set img
     *
     * @param string $img
     * @return Deal
     */
    public function setImg($img)
    {
        $this->img = $img;

        return $this;
    }

    /**
     * Get img
     *
     * @return string 
     */
    public function getImg()
    {
        return $this->img;
    }
}
