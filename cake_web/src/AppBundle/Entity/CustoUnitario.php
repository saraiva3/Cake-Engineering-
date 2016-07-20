<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CustoUnitario
 *
 * @ORM\Table(name="custo_unitario", indexes={@ORM\Index(name="fk_custo_unitario_faturamento_mensal1_idx", columns={"faturamento_mensal_id"}), @ORM\Index(name="fk_custo_unitario_apuracao_custo_md_mv1_idx", columns={"apuracao_custo_md_mv_id"})})
 * @ORM\Entity
 */
class CustoUnitario
{
    /**
     * @var string
     *
     * @ORM\Column(name="produto", type="string", length=45, nullable=true)
     */
    private $produto;

    /**
     * @var string
     *
     * @ORM\Column(name="custo_unitariocol", type="string", length=45, nullable=true)
     */
    private $custoUnitariocol;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \AppBundle\Entity\FaturamentoMensal
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\FaturamentoMensal")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="faturamento_mensal_id", referencedColumnName="id")
     * })
     */
    private $faturamentoMensal;

    /**
     * @var \AppBundle\Entity\ApuracaoCustoMdMv
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\ApuracaoCustoMdMv")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="apuracao_custo_md_mv_id", referencedColumnName="id")
     * })
     */
    private $apuracaoCustoMdMv;



    /**
     * Set produto
     *
     * @param string $produto
     *
     * @return CustoUnitario
     */
    public function setProduto($produto)
    {
        $this->produto = $produto;

        return $this;
    }

    /**
     * Get produto
     *
     * @return string
     */
    public function getProduto()
    {
        return $this->produto;
    }

    /**
     * Set custoUnitariocol
     *
     * @param string $custoUnitariocol
     *
     * @return CustoUnitario
     */
    public function setCustoUnitariocol($custoUnitariocol)
    {
        $this->custoUnitariocol = $custoUnitariocol;

        return $this;
    }

    /**
     * Get custoUnitariocol
     *
     * @return string
     */
    public function getCustoUnitariocol()
    {
        return $this->custoUnitariocol;
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
     * Set faturamentoMensal
     *
     * @param \AppBundle\Entity\FaturamentoMensal $faturamentoMensal
     *
     * @return CustoUnitario
     */
    public function setFaturamentoMensal(\AppBundle\Entity\FaturamentoMensal $faturamentoMensal = null)
    {
        $this->faturamentoMensal = $faturamentoMensal;

        return $this;
    }

    /**
     * Get faturamentoMensal
     *
     * @return \AppBundle\Entity\FaturamentoMensal
     */
    public function getFaturamentoMensal()
    {
        return $this->faturamentoMensal;
    }

    /**
     * Set apuracaoCustoMdMv
     *
     * @param \AppBundle\Entity\ApuracaoCustoMdMv $apuracaoCustoMdMv
     *
     * @return CustoUnitario
     */
    public function setApuracaoCustoMdMv(\AppBundle\Entity\ApuracaoCustoMdMv $apuracaoCustoMdMv = null)
    {
        $this->apuracaoCustoMdMv = $apuracaoCustoMdMv;

        return $this;
    }

    /**
     * Get apuracaoCustoMdMv
     *
     * @return \AppBundle\Entity\ApuracaoCustoMdMv
     */
    public function getApuracaoCustoMdMv()
    {
        return $this->apuracaoCustoMdMv;
    }
}
