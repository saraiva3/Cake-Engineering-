<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EstrategiaPromocional
 *
 * @ORM\Table(name="estrategia_promocional", indexes={@ORM\Index(name="fk_estrategia_promocional_plano_negocio1_idx", columns={"plano_negocio_id"})})
 * @ORM\Entity
 */
class EstrategiaPromocional
{
    /**
     * @var string
     *
     * @ORM\Column(name="estrategia_promocional", type="string", length=300, nullable=true)
     */
    private $estrategiaPromocional;

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
     * Set estrategiaPromocional
     *
     * @param string $estrategiaPromocional
     *
     * @return EstrategiaPromocional
     */
    public function setEstrategiaPromocional($estrategiaPromocional)
    {
        $this->estrategiaPromocional = $estrategiaPromocional;

        return $this;
    }

    /**
     * Get estrategiaPromocional
     *
     * @return string
     */
    public function getEstrategiaPromocional()
    {
        return $this->estrategiaPromocional;
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
     * @return EstrategiaPromocional
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
