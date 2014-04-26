<?php

namespace pidev\TestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Client
 *
 * @ORM\Table(name="client", uniqueConstraints={@ORM\UniqueConstraint(name="Email_UNIQUE", columns={"email"}), @ORM\UniqueConstraint(name="CIN_UNIQUE", columns={"CIN"})})
 * @ORM\Entity
 */
class Client
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idClient", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=60, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=60, nullable=false)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=80, nullable=false)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="Telephone", type="string", length=45, nullable=true)
     */
    private $telephone;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=250, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="listedechoix", type="text", nullable=false)
     */
    private $listedechoix;

    /**
     * @var integer
     *
     * @ORM\Column(name="CIN", type="integer", nullable=false)
     */
    private $cin;

    /**
     * @var string
     *
     * @ORM\Column(name="datenaissance", type="string", length=60, nullable=false)
     */
    private $datenaissance;

    /**
     * @var boolean
     *
     * @ORM\Column(name="sexe", type="boolean", nullable=false)
     */
    private $sexe;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbrSignalisation", type="integer", nullable=true)
     */
    private $nbrsignalisation;



    /**
     * Get idclient
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->idclient;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Client
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     * @return Client
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return Client
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set telephone
     *
     * @param string $telephone
     * @return Client
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return string 
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Client
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set listedechoix
     *
     * @param string $listedechoix
     * @return Client
     */
    public function setListedechoix($listedechoix)
    {
        $this->listedechoix = $listedechoix;

        return $this;
    }

    /**
     * Get listedechoix
     *
     * @return string 
     */
    public function getListedechoix()
    {
        return $this->listedechoix;
    }

    /**
     * Set cin
     *
     * @param integer $cin
     * @return Client
     */
    public function setCin($cin)
    {
        $this->cin = $cin;

        return $this;
    }

    /**
     * Get cin
     *
     * @return integer 
     */
    public function getCin()
    {
        return $this->cin;
    }

    /**
     * Set datenaissance
     *
     * @param string $datenaissance
     * @return Client
     */
    public function setDatenaissance($datenaissance)
    {
        $this->datenaissance = $datenaissance;

        return $this;
    }

    /**
     * Get datenaissance
     *
     * @return string 
     */
    public function getDatenaissance()
    {
        return $this->datenaissance;
    }

    /**
     * Set sexe
     *
     * @param boolean $sexe
     * @return Client
     */
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;

        return $this;
    }

    /**
     * Get sexe
     *
     * @return boolean 
     */
    public function getSexe()
    {
        return $this->sexe;
    }

    /**
     * Set nbrsignalisation
     *
     * @param integer $nbrsignalisation
     * @return Client
     */
    public function setNbrsignalisation($nbrsignalisation)
    {
        $this->nbrsignalisation = $nbrsignalisation;

        return $this;
    }

    /**
     * Get nbrsignalisation
     *
     * @return integer 
     */
    public function getNbrsignalisation()
    {
        return $this->nbrsignalisation;
    }
}
