<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AnalisePlano
 *
 * @ORM\Table(name="analise_plano", indexes={@ORM\Index(name="fk_analise_plano_plano_negocio1_idx", columns={"plano_negocio_id"})})
 * @ORM\Entity
 */
class AnalisePlano
{
    /**
     * @var string
     *
     * @ORM\Column(name="analise", type="string", length=1000, nullable=true)
     */
    private $analise;

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
     * Set analise
     *
     * @param string $analise
     *
     * @return AnalisePlano
     */
    public function setAnalise($analise)
    {
        $this->analise = $analise;

        return $this;
    }

    /**
     * Get analise
     *
     * @return string
     */
    public function getAnalise()
    {
        return $this->analise;
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
     * @return AnalisePlano
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
