<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ApuracaoCustoMdMv
 *
 * @ORM\Table(name="apuracao_custo_md_mv", indexes={@ORM\Index(name="fk_apuracao_custo_md_mv_faturamento_mensal1_idx", columns={"faturamento_mensal_id"}), @ORM\Index(name="fk_apuracao_custo_md_mv_plano_negocio1_idx", columns={"plano_negocio_id"})})
 * @ORM\Entity
 */
class ApuracaoCustoMdMv
{
    /**
     * @var string
     *
     * @ORM\Column(name="crescimento_mes", type="string", length=45, nullable=true)
     */
    private $crescimentoMes;

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
     * @var \AppBundle\Entity\FaturamentoMensal
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\FaturamentoMensal")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="faturamento_mensal_id", referencedColumnName="id")
     * })
     */
    private $faturamentoMensal;



    /**
     * Set crescimentoMes
     *
     * @param string $crescimentoMes
     *
     * @return ApuracaoCustoMdMv
     */
    public function setCrescimentoMes($crescimentoMes)
    {
        $this->crescimentoMes = $crescimentoMes;

        return $this;
    }

    /**
     * Get crescimentoMes
     *
     * @return string
     */
    public function getCrescimentoMes()
    {
        return $this->crescimentoMes;
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
     * @return ApuracaoCustoMdMv
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
     * Set faturamentoMensal
     *
     * @param \AppBundle\Entity\FaturamentoMensal $faturamentoMensal
     *
     * @return ApuracaoCustoMdMv
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
}
