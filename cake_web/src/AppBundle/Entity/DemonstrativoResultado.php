<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DemonstrativoResultado
 *
 * @ORM\Table(name="demonstrativo_resultado", indexes={@ORM\Index(name="fk_demonstrativo_resultado_demonstrativo_resultados_itens1_idx", columns={"demonstrativo_resultados_itens_id"}), @ORM\Index(name="fk_demonstrativo_resultado_plano_negocio1_idx", columns={"plano_negocio_id"})})
 * @ORM\Entity
 */
class DemonstrativoResultado
{
    /**
     * @var float
     *
     * @ORM\Column(name="valor", type="float", precision=8, scale=2, nullable=true)
     */
    private $valor;

    /**
     * @var float
     *
     * @ORM\Column(name="valor_anual", type="float", precision=8, scale=2, nullable=true)
     */
    private $valorAnual;

    /**
     * @var float
     *
     * @ORM\Column(name="percentual_", type="float", precision=8, scale=2, nullable=true)
     */
    private $percentual;

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
     * @var \AppBundle\Entity\DemonstrativoResultadosItens
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\DemonstrativoResultadosItens")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="demonstrativo_resultados_itens_id", referencedColumnName="id")
     * })
     */
    private $demonstrativoResultadosItens;



    /**
     * Set valor
     *
     * @param float $valor
     *
     * @return DemonstrativoResultado
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
     * Set valorAnual
     *
     * @param float $valorAnual
     *
     * @return DemonstrativoResultado
     */
    public function setValorAnual($valorAnual)
    {
        $this->valorAnual = $valorAnual;

        return $this;
    }

    /**
     * Get valorAnual
     *
     * @return float
     */
    public function getValorAnual()
    {
        return $this->valorAnual;
    }

    /**
     * Set percentual
     *
     * @param float $percentual
     *
     * @return DemonstrativoResultado
     */
    public function setPercentual($percentual)
    {
        $this->percentual = $percentual;

        return $this;
    }

    /**
     * Get percentual
     *
     * @return float
     */
    public function getPercentual()
    {
        return $this->percentual;
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
     * @return DemonstrativoResultado
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
     * Set demonstrativoResultadosItens
     *
     * @param \AppBundle\Entity\DemonstrativoResultadosItens $demonstrativoResultadosItens
     *
     * @return DemonstrativoResultado
     */
    public function setDemonstrativoResultadosItens(\AppBundle\Entity\DemonstrativoResultadosItens $demonstrativoResultadosItens = null)
    {
        $this->demonstrativoResultadosItens = $demonstrativoResultadosItens;

        return $this;
    }

    /**
     * Get demonstrativoResultadosItens
     *
     * @return \AppBundle\Entity\DemonstrativoResultadosItens
     */
    public function getDemonstrativoResultadosItens()
    {
        return $this->demonstrativoResultadosItens;
    }
}
