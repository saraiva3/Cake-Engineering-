<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * IndicadoresViabilidade
 *
 * @ORM\Table(name="indicadores_viabilidade", indexes={@ORM\Index(name="fk_indicadores_viabilidade_plano_negocio1_idx", columns={"plano_negocio_id"})})
 * @ORM\Entity
 */
class IndicadoresViabilidade
{
    /**
     * @var float
     *
     * @ORM\Column(name="ponto_equilibrio", type="float", precision=8, scale=2, nullable=true)
     */
    private $pontoEquilibrio;

    /**
     * @var float
     *
     * @ORM\Column(name="lucrativade", type="float", precision=8, scale=2, nullable=true)
     */
    private $lucrativade;

    /**
     * @var float
     *
     * @ORM\Column(name="rentabilidade", type="float", precision=8, scale=2, nullable=true)
     */
    private $rentabilidade;

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
     * Set pontoEquilibrio
     *
     * @param float $pontoEquilibrio
     *
     * @return IndicadoresViabilidade
     */
    public function setPontoEquilibrio($pontoEquilibrio)
    {
        $this->pontoEquilibrio = $pontoEquilibrio;

        return $this;
    }

    /**
     * Get pontoEquilibrio
     *
     * @return float
     */
    public function getPontoEquilibrio()
    {
        return $this->pontoEquilibrio;
    }

    /**
     * Set lucrativade
     *
     * @param float $lucrativade
     *
     * @return IndicadoresViabilidade
     */
    public function setLucrativade($lucrativade)
    {
        $this->lucrativade = $lucrativade;

        return $this;
    }

    /**
     * Get lucrativade
     *
     * @return float
     */
    public function getLucrativade()
    {
        return $this->lucrativade;
    }

    /**
     * Set rentabilidade
     *
     * @param float $rentabilidade
     *
     * @return IndicadoresViabilidade
     */
    public function setRentabilidade($rentabilidade)
    {
        $this->rentabilidade = $rentabilidade;

        return $this;
    }

    /**
     * Get rentabilidade
     *
     * @return float
     */
    public function getRentabilidade()
    {
        return $this->rentabilidade;
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
     * @return IndicadoresViabilidade
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
