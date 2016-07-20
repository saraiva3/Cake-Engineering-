<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ConstrucaoCenarios
 *
 * @ORM\Table(name="construcao_cenarios", indexes={@ORM\Index(name="fk_cenario_idx", columns={"id_cenario"}), @ORM\Index(name="fk_acao_idx", columns={"id_acao"}), @ORM\Index(name="fk_construcao_cenarios_plano_negocio1_idx", columns={"plano_negocio_id"})})
 * @ORM\Entity
 */
class ConstrucaoCenarios
{
    /**
     * @var float
     *
     * @ORM\Column(name="cenario_provavel", type="float", precision=10, scale=0, nullable=false)
     */
    private $cenarioProvavel;

    /**
     * @var float
     *
     * @ORM\Column(name="cenario_pessimista", type="float", precision=10, scale=0, nullable=false)
     */
    private $cenarioPessimista;

    /**
     * @var float
     *
     * @ORM\Column(name="cenario_otimista", type="float", precision=10, scale=0, nullable=false)
     */
    private $cenarioOtimista;

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
     * @var \AppBundle\Entity\Cenario
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Cenario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_cenario", referencedColumnName="id")
     * })
     */
    private $idCenario;

    /**
     * @var \AppBundle\Entity\Acoes
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Acoes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_acao", referencedColumnName="id")
     * })
     */
    private $idAcao;



    /**
     * Set cenarioProvavel
     *
     * @param float $cenarioProvavel
     *
     * @return ConstrucaoCenarios
     */
    public function setCenarioProvavel($cenarioProvavel)
    {
        $this->cenarioProvavel = $cenarioProvavel;

        return $this;
    }

    /**
     * Get cenarioProvavel
     *
     * @return float
     */
    public function getCenarioProvavel()
    {
        return $this->cenarioProvavel;
    }

    /**
     * Set cenarioPessimista
     *
     * @param float $cenarioPessimista
     *
     * @return ConstrucaoCenarios
     */
    public function setCenarioPessimista($cenarioPessimista)
    {
        $this->cenarioPessimista = $cenarioPessimista;

        return $this;
    }

    /**
     * Get cenarioPessimista
     *
     * @return float
     */
    public function getCenarioPessimista()
    {
        return $this->cenarioPessimista;
    }

    /**
     * Set cenarioOtimista
     *
     * @param float $cenarioOtimista
     *
     * @return ConstrucaoCenarios
     */
    public function setCenarioOtimista($cenarioOtimista)
    {
        $this->cenarioOtimista = $cenarioOtimista;

        return $this;
    }

    /**
     * Get cenarioOtimista
     *
     * @return float
     */
    public function getCenarioOtimista()
    {
        return $this->cenarioOtimista;
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
     * @return ConstrucaoCenarios
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
     * Set idCenario
     *
     * @param \AppBundle\Entity\Cenario $idCenario
     *
     * @return ConstrucaoCenarios
     */
    public function setIdCenario(\AppBundle\Entity\Cenario $idCenario = null)
    {
        $this->idCenario = $idCenario;

        return $this;
    }

    /**
     * Get idCenario
     *
     * @return \AppBundle\Entity\Cenario
     */
    public function getIdCenario()
    {
        return $this->idCenario;
    }

    /**
     * Set idAcao
     *
     * @param \AppBundle\Entity\Acoes $idAcao
     *
     * @return ConstrucaoCenarios
     */
    public function setIdAcao(\AppBundle\Entity\Acoes $idAcao = null)
    {
        $this->idAcao = $idAcao;

        return $this;
    }

    /**
     * Get idAcao
     *
     * @return \AppBundle\Entity\Acoes
     */
    public function getIdAcao()
    {
        return $this->idAcao;
    }
}
