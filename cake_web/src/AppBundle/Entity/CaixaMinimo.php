<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CaixaMinimo
 *
 * @ORM\Table(name="caixa_minimo", indexes={@ORM\Index(name="fk_caixa_minimo_investimento_total1_idx", columns={"investimento_total_id"})})
 * @ORM\Entity
 */
class CaixaMinimo
{
    /**
     * @var integer
     *
     * @ORM\Column(name="necessidade_estoque", type="integer", nullable=true)
     */
    private $necessidadeEstoque;

    /**
     * @var float
     *
     * @ORM\Column(name="resultado", type="float", precision=10, scale=0, nullable=true)
     */
    private $resultado;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \AppBundle\Entity\InvestimentoTotal
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\InvestimentoTotal")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="investimento_total_id", referencedColumnName="id")
     * })
     */
    private $investimentoTotal;



    /**
     * Set necessidadeEstoque
     *
     * @param integer $necessidadeEstoque
     *
     * @return CaixaMinimo
     */
    public function setNecessidadeEstoque($necessidadeEstoque)
    {
        $this->necessidadeEstoque = $necessidadeEstoque;

        return $this;
    }

    /**
     * Get necessidadeEstoque
     *
     * @return integer
     */
    public function getNecessidadeEstoque()
    {
        return $this->necessidadeEstoque;
    }

    /**
     * Set resultado
     *
     * @param float $resultado
     *
     * @return CaixaMinimo
     */
    public function setResultado($resultado)
    {
        $this->resultado = $resultado;

        return $this;
    }

    /**
     * Get resultado
     *
     * @return float
     */
    public function getResultado()
    {
        return $this->resultado;
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
     * Set investimentoTotal
     *
     * @param \AppBundle\Entity\InvestimentoTotal $investimentoTotal
     *
     * @return CaixaMinimo
     */
    public function setInvestimentoTotal(\AppBundle\Entity\InvestimentoTotal $investimentoTotal = null)
    {
        $this->investimentoTotal = $investimentoTotal;

        return $this;
    }

    /**
     * Get investimentoTotal
     *
     * @return \AppBundle\Entity\InvestimentoTotal
     */
    public function getInvestimentoTotal()
    {
        return $this->investimentoTotal;
    }
}
