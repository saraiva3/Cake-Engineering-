<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Preco
 *
 * @ORM\Table(name="preco", indexes={@ORM\Index(name="fk_preco_plano_negocio1_idx", columns={"plano_negocio_id"})})
 * @ORM\Entity
 */
class Preco
{
    /**
     * @var string
     *
     * @ORM\Column(name="descricao_estrategia_preco", type="string", length=300, nullable=true)
     */
    private $descricaoEstrategiaPreco;

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
     * Set descricaoEstrategiaPreco
     *
     * @param string $descricaoEstrategiaPreco
     *
     * @return Preco
     */
    public function setDescricaoEstrategiaPreco($descricaoEstrategiaPreco)
    {
        $this->descricaoEstrategiaPreco = $descricaoEstrategiaPreco;

        return $this;
    }

    /**
     * Get descricaoEstrategiaPreco
     *
     * @return string
     */
    public function getDescricaoEstrategiaPreco()
    {
        return $this->descricaoEstrategiaPreco;
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
     * @return Preco
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
