<?php

namespace pidev\TestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Chart
 *
 * @ORM\Table(name="chart", indexes={@ORM\Index(name="rap_chart_idx", columns={"idRapport"})})
 * @ORM\Entity
 */
class Chart
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idChart", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="typeChart", type="string", length=45, nullable=false)
     */
    private $typechart;

    /**
     * @var string
     *
     * @ORM\Column(name="descChart", type="text", nullable=true)
     */
    private $descchart;

    /**
     * @var \pidev\TestBundle\Entity\Rapport
     *
     * @ORM\ManyToOne(targetEntity="pidev\TestBundle\Entity\Rapport")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idRapport", referencedColumnName="idRapport")
     * })
     */
    private $idrapport;



    /**
     * Get idchart
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set typechart
     *
     * @param string $typechart
     * @return Chart
     */
    public function setTypechart($typechart)
    {
        $this->typechart = $typechart;

        return $this;
    }

    /**
     * Get typechart
     *
     * @return string 
     */
    public function getTypechart()
    {
        return $this->typechart;
    }

    /**
     * Set descchart
     *
     * @param string $descchart
     * @return Chart
     */
    public function setDescchart($descchart)
    {
        $this->descchart = $descchart;

        return $this;
    }

    /**
     * Get descchart
     *
     * @return string 
     */
    public function getDescchart()
    {
        return $this->descchart;
    }

    /**
     * Set idrapport
     *
     * @param \pidev\TestBundle\Entity\Rapport $idrapport
     * @return Chart
     */
    public function setIdrapport(\pidev\TestBundle\Entity\Rapport $idrapport = null)
    {
        $this->idrapport = $idrapport;

        return $this;
    }

    /**
     * Get idrapport
     *
     * @return \pidev\TestBundle\Entity\Rapport 
     */
    public function getIdrapport()
    {
        return $this->idrapport;
    }
}
