<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProcessoOperacional
 *
 * @ORM\Table(name="processo_operacional", indexes={@ORM\Index(name="fk_processo_operacional_plano_negocio1_idx", columns={"plano_negocio_id"})})
 * @ORM\Entity
 */
class ProcessoOperacional
{
    /**
     * @var string
     *
     * @ORM\Column(name="descricao_atividades", type="string", length=300, nullable=true)
     */
    private $descricaoAtividades;

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
     * Set descricaoAtividades
     *
     * @param string $descricaoAtividades
     *
     * @return ProcessoOperacional
     */
    public function setDescricaoAtividades($descricaoAtividades)
    {
        $this->descricaoAtividades = $descricaoAtividades;

        return $this;
    }

    /**
     * Get descricaoAtividades
     *
     * @return string
     */
    public function getDescricaoAtividades()
    {
        return $this->descricaoAtividades;
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
     * @return ProcessoOperacional
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
