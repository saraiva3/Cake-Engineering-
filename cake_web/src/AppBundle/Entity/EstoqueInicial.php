<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EstoqueInicial
 *
 * @ORM\Table(name="estoque_inicial", indexes={@ORM\Index(name="fk_estoque_inicial_investimento_total1_idx", columns={"investimento_total_id"})})
 * @ORM\Entity
 */
class EstoqueInicial
{
    /**
     * @var string
     *
     * @ORM\Column(name="descricao_estoque", type="string", length=45, nullable=true)
     */
    private $descricaoEstoque;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantidade", type="integer", nullable=true)
     */
    private $quantidade;

    /**
     * @var float
     *
     * @ORM\Column(name="valor_unitario", type="float", precision=10, scale=0, nullable=true)
     */
    private $valorUnitario;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $id;

    /**
     * @var \AppBundle\Entity\InvestimentoTotal
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\InvestimentoTotal")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="investimento_total_id", referencedColumnName="id")
     * })
     */
    private $investimentoTotal;



    /**
     * Set descricaoEstoque
     *
     * @param string $descricaoEstoque
     *
     * @return EstoqueInicial
     */
    public function setDescricaoEstoque($descricaoEstoque)
    {
        $this->descricaoEstoque = $descricaoEstoque;

        return $this;
    }

    /**
     * Get descricaoEstoque
     *
     * @return string
     */
    public function getDescricaoEstoque()
    {
        return $this->descricaoEstoque;
    }

    /**
     * Set quantidade
     *
     * @param integer $quantidade
     *
     * @return EstoqueInicial
     */
    public function setQuantidade($quantidade)
    {
        $this->quantidade = $quantidade;

        return $this;
    }

    /**
     * Get quantidade
     *
     * @return integer
     */
    public function getQuantidade()
    {
        return $this->quantidade;
    }

    /**
     * Set valorUnitario
     *
     * @param float $valorUnitario
     *
     * @return EstoqueInicial
     */
    public function setValorUnitario($valorUnitario)
    {
        $this->valorUnitario = $valorUnitario;

        return $this;
    }

    /**
     * Get valorUnitario
     *
     * @return float
     */
    public function getValorUnitario()
    {
        return $this->valorUnitario;
    }

    /**
     * Set id
     *
     * @param integer $id
     *
     * @return EstoqueInicial
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
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
     * @return EstoqueInicial
     */
    public function setInvestimentoTotal(\AppBundle\Entity\InvestimentoTotal $investimentoTotal)
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
