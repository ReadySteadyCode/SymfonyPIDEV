<?php

namespace pidev\TestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Vendeur
 *
 * @ORM\Table(name="vendeur")
 * @ORM\Entity
 */
class Vendeur
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idVendeur", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nomCommercial", type="string", length=160, nullable=false)
     */
    private $nomcommercial;

    /**
     * @var string
     *
     * @ORM\Column(name="addresse", type="text", nullable=true)
     */
    private $addresse;

    /**
     * @var string
     *
     * @ORM\Column(name="typeBien", type="text", nullable=true)
     */
    private $typebien;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var float
     *
     * @ORM\Column(name="note", type="float", precision=10, scale=0, nullable=true)
     */
    private $note;

    /**
     * @var string
     *
     * @ORM\Column(name="posx", type="string", length=120, nullable=true)
     */
    private $posx;

    /**
     * @var string
     *
     * @ORM\Column(name="posy", type="string", length=120, nullable=true)
     */
    private $posy;



    /**
     * Get idvendeur
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nomcommercial
     *
     * @param string $nomcommercial
     * @return Vendeur
     */
    public function setNomcommercial($nomcommercial)
    {
        $this->nomcommercial = $nomcommercial;

        return $this;
    }

    /**
     * Get nomcommercial
     *
     * @return string 
     */
    public function getNomcommercial()
    {
        return $this->nomcommercial;
    }

    /**
     * Set addresse
     *
     * @param string $addresse
     * @return Vendeur
     */
    public function setAddresse($addresse)
    {
        $this->addresse = $addresse;

        return $this;
    }

    /**
     * Get addresse
     *
     * @return string 
     */
    public function getAddresse()
    {
        return $this->addresse;
    }

    /**
     * Set typebien
     *
     * @param string $typebien
     * @return Vendeur
     */
    public function setTypebien($typebien)
    {
        $this->typebien = $typebien;

        return $this;
    }

    /**
     * Get typebien
     *
     * @return string 
     */
    public function getTypebien()
    {
        return $this->typebien;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Vendeur
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set note
     *
     * @param float $note
     * @return Vendeur
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     *
     * @return float 
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Set posx
     *
     * @param string $posx
     * @return Vendeur
     */
    public function setPosx($posx)
    {
        $this->posx = $posx;

        return $this;
    }

    /**
     * Get posx
     *
     * @return string 
     */
    public function getPosx()
    {
        return $this->posx;
    }

    /**
     * Set posy
     *
     * @param string $posy
     * @return Vendeur
     */
    public function setPosy($posy)
    {
        $this->posy = $posy;

        return $this;
    }

    /**
     * Get posy
     *
     * @return string 
     */
    public function getPosy()
    {
        return $this->posy;
    }
}
