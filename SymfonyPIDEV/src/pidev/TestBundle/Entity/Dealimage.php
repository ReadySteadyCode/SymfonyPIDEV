<?php

namespace pidev\TestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Dealimage
 *
 * @ORM\Table(name="dealimage", indexes={@ORM\Index(name="imageDeal_idx", columns={"idDeal"})})
 * @ORM\Entity
 */
class Dealimage
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idDealImage", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="Image", type="blob", nullable=false)
     */
    private $image;

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
     * Get iddealimage
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set image
     *
     * @param string $image
     * @return Dealimage
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string 
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set iddeal
     *
     * @param \pidev\TestBundle\Entity\Deal $iddeal
     * @return Dealimage
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
