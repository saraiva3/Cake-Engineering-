<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * InvestimentoPre
 *
 * @ORM\Table(name="investimento_pre", indexes={@ORM\Index(name="fk_investimento_pre_investimento_total1_idx", columns={"investimento_total_id"})})
 * @ORM\Entity
 */
class InvestimentoPre
{
    /**
     * @var string
     *
     * @ORM\Column(name="descricao", type="string", length=45, nullable=true)
     */
    private $descricao;

    /**
     * @var float
     *
     * @ORM\Column(name="valor", type="float", precision=10, scale=0, nullable=true)
     */
    private $valor;

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
     * Set descricao
     *
     * @param string $descricao
     *
     * @return InvestimentoPre
     */
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;

        return $this;
    }

    /**
     * Get descricao
     *
     * @return string
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * Set valor
     *
     * @param float $valor
     *
     * @return InvestimentoPre
     */
    public function setValor($valor)
    {
        $this->valor = $valor;

        return $this;
    }

    /**
     * Get valor
     *
     * @return float
     */
    public function getValor()
    {
        return $this->valor;
    }

    /**
     * Set id
     *
     * @param integer $id
     *
     * @return InvestimentoPre
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
     * @return InvestimentoPre
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
