<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * InvestimentoFixo
 *
 * @ORM\Table(name="investimento_fixo", indexes={@ORM\Index(name="fk_investimento_fixo_investimento_total1_idx", columns={"investimento_total_id"}), @ORM\Index(name="fk_investimento_fixo_custo_depreciacao1_idx", columns={"custo_depreciacao_id"}), @ORM\Index(name="fk_investimento_fixo_plano_negocio1_idx", columns={"plano_negocio_id"})})
 * @ORM\Entity
 */
class InvestimentoFixo
{
    /**
     * @var string
     *
     * @ORM\Column(name="tipo", type="string", length=45, nullable=true)
     */
    private $tipo;

    /**
     * @var string
     *
     * @ORM\Column(name="descricao_objeto", type="string", length=300, nullable=true)
     */
    private $descricaoObjeto;

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
     * @var \AppBundle\Entity\CustoDepreciacao
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\CustoDepreciacao")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="custo_depreciacao_id", referencedColumnName="id")
     * })
     */
    private $custoDepreciacao;

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
     * @var \AppBundle\Entity\PlanoNegocio
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\PlanoNegocio")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="plano_negocio_id", referencedColumnName="id")
     * })
     */
    private $planoNegocio;



    /**
     * Set tipo
     *
     * @param string $tipo
     *
     * @return InvestimentoFixo
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return string
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set descricaoObjeto
     *
     * @param string $descricaoObjeto
     *
     * @return InvestimentoFixo
     */
    public function setDescricaoObjeto($descricaoObjeto)
    {
        $this->descricaoObjeto = $descricaoObjeto;

        return $this;
    }

    /**
     * Get descricaoObjeto
     *
     * @return string
     */
    public function getDescricaoObjeto()
    {
        return $this->descricaoObjeto;
    }

    /**
     * Set quantidade
     *
     * @param integer $quantidade
     *
     * @return InvestimentoFixo
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
     * @return InvestimentoFixo
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
     * @return InvestimentoFixo
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
     * Set custoDepreciacao
     *
     * @param \AppBundle\Entity\CustoDepreciacao $custoDepreciacao
     *
     * @return InvestimentoFixo
     */
    public function setCustoDepreciacao(\AppBundle\Entity\CustoDepreciacao $custoDepreciacao)
    {
        $this->custoDepreciacao = $custoDepreciacao;

        return $this;
    }

    /**
     * Get custoDepreciacao
     *
     * @return \AppBundle\Entity\CustoDepreciacao
     */
    public function getCustoDepreciacao()
    {
        return $this->custoDepreciacao;
    }

    /**
     * Set investimentoTotal
     *
     * @param \AppBundle\Entity\InvestimentoTotal $investimentoTotal
     *
     * @return InvestimentoFixo
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

    /**
     * Set planoNegocio
     *
     * @param \AppBundle\Entity\PlanoNegocio $planoNegocio
     *
     * @return InvestimentoFixo
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
