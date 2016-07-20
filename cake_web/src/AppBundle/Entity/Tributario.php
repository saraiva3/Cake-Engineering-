<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tributario
 *
 * @ORM\Table(name="tributario", indexes={@ORM\Index(name="fk_tributario_plano_negocio1_idx", columns={"plano_negocio_id"})})
 * @ORM\Entity
 */
class Tributario
{
    /**
     * @var boolean
     *
     * @ORM\Column(name="simples", type="boolean", nullable=true)
     */
    private $simples;

    /**
     * @var boolean
     *
     * @ORM\Column(name="irpj", type="boolean", nullable=true)
     */
    private $irpj;

    /**
     * @var boolean
     *
     * @ORM\Column(name="pis", type="boolean", nullable=true)
     */
    private $pis;

    /**
     * @var boolean
     *
     * @ORM\Column(name="cofins", type="boolean", nullable=true)
     */
    private $cofins;

    /**
     * @var boolean
     *
     * @ORM\Column(name="csll", type="boolean", nullable=true)
     */
    private $csll;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ipi", type="boolean", nullable=true)
     */
    private $ipi;

    /**
     * @var boolean
     *
     * @ORM\Column(name="icms", type="boolean", nullable=true)
     */
    private $icms;

    /**
     * @var boolean
     *
     * @ORM\Column(name="iss", type="boolean", nullable=true)
     */
    private $iss;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \AppBundle\Entity\PlanoNegocio
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\PlanoNegocio")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="plano_negocio_id", referencedColumnName="id")
     * })
     */
    private $planoNegocio;



    /**
     * Set simples
     *
     * @param boolean $simples
     *
     * @return Tributario
     */
    public function setSimples($simples)
    {
        $this->simples = $simples;

        return $this;
    }

    /**
     * Get simples
     *
     * @return boolean
     */
    public function getSimples()
    {
        return $this->simples;
    }

    /**
     * Set irpj
     *
     * @param boolean $irpj
     *
     * @return Tributario
     */
    public function setIrpj($irpj)
    {
        $this->irpj = $irpj;

        return $this;
    }

    /**
     * Get irpj
     *
     * @return boolean
     */
    public function getIrpj()
    {
        return $this->irpj;
    }

    /**
     * Set pis
     *
     * @param boolean $pis
     *
     * @return Tributario
     */
    public function setPis($pis)
    {
        $this->pis = $pis;

        return $this;
    }

    /**
     * Get pis
     *
     * @return boolean
     */
    public function getPis()
    {
        return $this->pis;
    }

    /**
     * Set cofins
     *
     * @param boolean $cofins
     *
     * @return Tributario
     */
    public function setCofins($cofins)
    {
        $this->cofins = $cofins;

        return $this;
    }

    /**
     * Get cofins
     *
     * @return boolean
     */
    public function getCofins()
    {
        return $this->cofins;
    }

    /**
     * Set csll
     *
     * @param boolean $csll
     *
     * @return Tributario
     */
    public function setCsll($csll)
    {
        $this->csll = $csll;

        return $this;
    }

    /**
     * Get csll
     *
     * @return boolean
     */
    public function getCsll()
    {
        return $this->csll;
    }

    /**
     * Set ipi
     *
     * @param boolean $ipi
     *
     * @return Tributario
     */
    public function setIpi($ipi)
    {
        $this->ipi = $ipi;

        return $this;
    }

    /**
     * Get ipi
     *
     * @return boolean
     */
    public function getIpi()
    {
        return $this->ipi;
    }

    /**
     * Set icms
     *
     * @param boolean $icms
     *
     * @return Tributario
     */
    public function setIcms($icms)
    {
        $this->icms = $icms;

        return $this;
    }

    /**
     * Get icms
     *
     * @return boolean
     */
    public function getIcms()
    {
        return $this->icms;
    }

    /**
     * Set iss
     *
     * @param boolean $iss
     *
     * @return Tributario
     */
    public function setIss($iss)
    {
        $this->iss = $iss;

        return $this;
    }

    /**
     * Get iss
     *
     * @return boolean
     */
    public function getIss()
    {
        return $this->iss;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set planoNegocio
     *
     * @param \AppBundle\Entity\PlanoNegocio $planoNegocio
     *
     * @return Tributario
     */
    public function setPlanoNegocio(\AppBundle\Entity\PlanoNegocio $planoNegocio = null)
    {
        $this->planoNegocio = $planoNegocio;

        return $this;
    }

    /**
     * Get planoNegocio
     *
     * @return \AppBundle\Entity\PlanoNegocio
     */
    public function getPlanoNegocio()
    {
        return $this->planoNegocio;
    }
}
