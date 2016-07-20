<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Fofa
 *
 * @ORM\Table(name="fofa", indexes={@ORM\Index(name="fk_fofa_plano_negocio1_idx", columns={"plano_negocio_id"})})
 * @ORM\Entity
 */
class Fofa
{
    /**
     * @var string
     *
     * @ORM\Column(name="forcas", type="string", length=100, nullable=true)
     */
    private $forcas;

    /**
     * @var string
     *
     * @ORM\Column(name="oportunidade", type="string", length=100, nullable=true)
     */
    private $oportunidade;

    /**
     * @var string
     *
     * @ORM\Column(name="fraquezas", type="string", length=100, nullable=true)
     */
    private $fraquezas;

    /**
     * @var string
     *
     * @ORM\Column(name="ameacas", type="string", length=100, nullable=true)
     */
    private $ameacas;

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
     * Set forcas
     *
     * @param string $forcas
     *
     * @return Fofa
     */
    public function setForcas($forcas)
    {
        $this->forcas = $forcas;

        return $this;
    }

    /**
     * Get forcas
     *
     * @return string
     */
    public function getForcas()
    {
        return $this->forcas;
    }

    /**
     * Set oportunidade
     *
     * @param string $oportunidade
     *
     * @return Fofa
     */
    public function setOportunidade($oportunidade)
    {
        $this->oportunidade = $oportunidade;

        return $this;
    }

    /**
     * Get oportunidade
     *
     * @return string
     */
    public function getOportunidade()
    {
        return $this->oportunidade;
    }

    /**
     * Set fraquezas
     *
     * @param string $fraquezas
     *
     * @return Fofa
     */
    public function setFraquezas($fraquezas)
    {
        $this->fraquezas = $fraquezas;

        return $this;
    }

    /**
     * Get fraquezas
     *
     * @return string
     */
    public function getFraquezas()
    {
        return $this->fraquezas;
    }

    /**
     * Set ameacas
     *
     * @param string $ameacas
     *
     * @return Fofa
     */
    public function setAmeacas($ameacas)
    {
        $this->ameacas = $ameacas;

        return $this;
    }

    /**
     * Get ameacas
     *
     * @return string
     */
    public function getAmeacas()
    {
        return $this->ameacas;
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
     * @return Fofa
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
