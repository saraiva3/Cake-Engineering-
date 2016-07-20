<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CustoMaoDeObra
 *
 * @ORM\Table(name="custo_mao_de_obra", indexes={@ORM\Index(name="fk_custo_mao_de_obra_plano_negocio1_idx", columns={"plano_negocio_id"})})
 * @ORM\Entity
 */
class CustoMaoDeObra
{
    /**
     * @var string
     *
     * @ORM\Column(name="cargo", type="string", length=45, nullable=true)
     */
    private $cargo;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantidade", type="integer", nullable=true)
     */
    private $quantidade;

    /**
     * @var float
     *
     * @ORM\Column(name="salario", type="float", precision=10, scale=0, nullable=true)
     */
    private $salario;

    /**
     * @var float
     *
     * @ORM\Column(name="percentual_encargo_social", type="float", precision=10, scale=0, nullable=true)
     */
    private $percentualEncargoSocial;

    /**
     * @var float
     *
     * @ORM\Column(name="resultado", type="float", precision=10, scale=0, nullable=true)
     */
    private $resultado;

    /**
     * @var integer
     *
     * @ORM\Column(name="idcusto_mao_de_obra", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcustoMaoDeObra;

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
     * Set cargo
     *
     * @param string $cargo
     *
     * @return CustoMaoDeObra
     */
    public function setCargo($cargo)
    {
        $this->cargo = $cargo;

        return $this;
    }

    /**
     * Get cargo
     *
     * @return string
     */
    public function getCargo()
    {
        return $this->cargo;
    }

    /**
     * Set quantidade
     *
     * @param integer $quantidade
     *
     * @return CustoMaoDeObra
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
     * Set salario
     *
     * @param float $salario
     *
     * @return CustoMaoDeObra
     */
    public function setSalario($salario)
    {
        $this->salario = $salario;

        return $this;
    }

    /**
     * Get salario
     *
     * @return float
     */
    public function getSalario()
    {
        return $this->salario;
    }

    /**
     * Set percentualEncargoSocial
     *
     * @param float $percentualEncargoSocial
     *
     * @return CustoMaoDeObra
     */
    public function setPercentualEncargoSocial($percentualEncargoSocial)
    {
        $this->percentualEncargoSocial = $percentualEncargoSocial;

        return $this;
    }

    /**
     * Get percentualEncargoSocial
     *
     * @return float
     */
    public function getPercentualEncargoSocial()
    {
        return $this->percentualEncargoSocial;
    }

    /**
     * Set resultado
     *
     * @param float $resultado
     *
     * @return CustoMaoDeObra
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
     * Get idcustoMaoDeObra
     *
     * @return integer
     */
    public function getIdcustoMaoDeObra()
    {
        return $this->idcustoMaoDeObra;
    }

    /**
     * Set planoNegocio
     *
     * @param \AppBundle\Entity\PlanoNegocio $planoNegocio
     *
     * @return CustoMaoDeObra
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
