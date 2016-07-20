<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EstruturaComercializacao
 *
 * @ORM\Table(name="estrutura_comercializacao", indexes={@ORM\Index(name="fk_estrutura_comercializacao_plano_negocio1_idx", columns={"plano_negocio_id"})})
 * @ORM\Entity
 */
class EstruturaComercializacao
{
    /**
     * @var string
     *
     * @ORM\Column(name="descricao_comerdistri", type="string", length=300, nullable=true)
     */
    private $descricaoComerdistri;

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
     * Set descricaoComerdistri
     *
     * @param string $descricaoComerdistri
     *
     * @return EstruturaComercializacao
     */
    public function setDescricaoComerdistri($descricaoComerdistri)
    {
        $this->descricaoComerdistri = $descricaoComerdistri;

        return $this;
    }

    /**
     * Get descricaoComerdistri
     *
     * @return string
     */
    public function getDescricaoComerdistri()
    {
        return $this->descricaoComerdistri;
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
     * @return EstruturaComercializacao
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
