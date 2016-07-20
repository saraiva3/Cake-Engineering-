<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CustoComercializacao
 *
 * @ORM\Table(name="custo_comercializacao", indexes={@ORM\Index(name="fk_custo_comercializacao_custo_comercializacao_periodo1_idx", columns={"custo_comercializacao_periodo_id"}), @ORM\Index(name="fk_custo_comercializacao_plano_negocio1_idx", columns={"plano_negocio_id"})})
 * @ORM\Entity
 */
class CustoComercializacao
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ano_referente", type="integer", nullable=true)
     */
    private $anoReferente;

    /**
     * @var float
     *
     * @ORM\Column(name="ano_referente_valor", type="float", precision=8, scale=2, nullable=true)
     */
    private $anoReferenteValor;

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
     * @var \AppBundle\Entity\CustoComercializacaoPeriodo
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\CustoComercializacaoPeriodo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="custo_comercializacao_periodo_id", referencedColumnName="id")
     * })
     */
    private $custoComercializacaoPeriodo;



    /**
     * Set anoReferente
     *
     * @param integer $anoReferente
     *
     * @return CustoComercializacao
     */
    public function setAnoReferente($anoReferente)
    {
        $this->anoReferente = $anoReferente;

        return $this;
    }

    /**
     * Get anoReferente
     *
     * @return integer
     */
    public function getAnoReferente()
    {
        return $this->anoReferente;
    }

    /**
     * Set anoReferenteValor
     *
     * @param float $anoReferenteValor
     *
     * @return CustoComercializacao
     */
    public function setAnoReferenteValor($anoReferenteValor)
    {
        $this->anoReferenteValor = $anoReferenteValor;

        return $this;
    }

    /**
     * Get anoReferenteValor
     *
     * @return float
     */
    public function getAnoReferenteValor()
    {
        return $this->anoReferenteValor;
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
     * @return CustoComercializacao
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

    /**
     * Set custoComercializacaoPeriodo
     *
     * @param \AppBundle\Entity\CustoComercializacaoPeriodo $custoComercializacaoPeriodo
     *
     * @return CustoComercializacao
     */
    public function setCustoComercializacaoPeriodo(\AppBundle\Entity\CustoComercializacaoPeriodo $custoComercializacaoPeriodo = null)
    {
        $this->custoComercializacaoPeriodo = $custoComercializacaoPeriodo;

        return $this;
    }

    /**
     * Get custoComercializacaoPeriodo
     *
     * @return \AppBundle\Entity\CustoComercializacaoPeriodo
     */
    public function getCustoComercializacaoPeriodo()
    {
        return $this->custoComercializacaoPeriodo;
    }
}
