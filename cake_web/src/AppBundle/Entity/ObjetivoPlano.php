<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ObjetivoPlano
 *
 * @ORM\Table(name="objetivo_plano", indexes={@ORM\Index(name="fk_objetivo_plano_plano_negocio1_idx", columns={"plano_negocio_id"})})
 * @ORM\Entity
 */
class ObjetivoPlano
{
    /**
     * @var string
     *
     * @ORM\Column(name="descricao_objetivo", type="string", length=45, nullable=true)
     */
    private $descricaoObjetivo;

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
     * Set descricaoObjetivo
     *
     * @param string $descricaoObjetivo
     *
     * @return ObjetivoPlano
     */
    public function setDescricaoObjetivo($descricaoObjetivo)
    {
        $this->descricaoObjetivo = $descricaoObjetivo;

        return $this;
    }

    /**
     * Get descricaoObjetivo
     *
     * @return string
     */
    public function getDescricaoObjetivo()
    {
        return $this->descricaoObjetivo;
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
     * @return ObjetivoPlano
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
