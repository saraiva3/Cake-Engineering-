<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CapacidadeMaxima
 *
 * @ORM\Table(name="capacidade_maxima", indexes={@ORM\Index(name="fk_capacidade_maxima_plano_negocio1_idx", columns={"plano_negocio_id"})})
 * @ORM\Entity
 */
class CapacidadeMaxima
{
    /**
     * @var string
     *
     * @ORM\Column(name="descricao_capacidade", type="string", length=300, nullable=true)
     */
    private $descricaoCapacidade;

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
     * Set descricaoCapacidade
     *
     * @param string $descricaoCapacidade
     *
     * @return CapacidadeMaxima
     */
    public function setDescricaoCapacidade($descricaoCapacidade)
    {
        $this->descricaoCapacidade = $descricaoCapacidade;

        return $this;
    }

    /**
     * Get descricaoCapacidade
     *
     * @return string
     */
    public function getDescricaoCapacidade()
    {
        return $this->descricaoCapacidade;
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
     * @return CapacidadeMaxima
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
