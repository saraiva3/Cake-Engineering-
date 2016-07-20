<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Socio
 *
 * @ORM\Table(name="socio", indexes={@ORM\Index(name="fk_socio_capitarl_social1_idx", columns={"capitarl_social_id"}), @ORM\Index(name="fk_socio_plano_negocio1_idx", columns={"plano_negocio_id"})})
 * @ORM\Entity
 */
class Socio
{
    /**
     * @var string
     *
     * @ORM\Column(name="nome", type="string", length=45, nullable=true)
     */
    private $nome;

    /**
     * @var float
     *
     * @ORM\Column(name="valor", type="float", precision=8, scale=2, nullable=true)
     */
    private $valor;

    /**
     * @var float
     *
     * @ORM\Column(name="participacao", type="float", precision=8, scale=2, nullable=true)
     */
    private $participacao;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $id;

    /**
     * @var \AppBundle\Entity\CapitarlSocial
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\CapitarlSocial")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="capitarl_social_id", referencedColumnName="id")
     * })
     */
    private $capitarlSocial;

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
     * Set nome
     *
     * @param string $nome
     *
     * @return Socio
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get nome
     *
     * @return string
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set valor
     *
     * @param float $valor
     *
     * @return Socio
     */
    public function setValor($valor)
    {
        $this->valor = $valor;

        return $this;
    }

    /**
     * Get valor
     *
     * @return float
     */
    public function getValor()
    {
        return $this->valor;
    }

    /**
     * Set participacao
     *
     * @param float $participacao
     *
     * @return Socio
     */
    public function setParticipacao($participacao)
    {
        $this->participacao = $participacao;

        return $this;
    }

    /**
     * Get participacao
     *
     * @return float
     */
    public function getParticipacao()
    {
        return $this->participacao;
    }

    /**
     * Set id
     *
     * @param integer $id
     *
     * @return Socio
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
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
     * Set capitarlSocial
     *
     * @param \AppBundle\Entity\CapitarlSocial $capitarlSocial
     *
     * @return Socio
     */
    public function setCapitarlSocial(\AppBundle\Entity\CapitarlSocial $capitarlSocial)
    {
        $this->capitarlSocial = $capitarlSocial;

        return $this;
    }

    /**
     * Get capitarlSocial
     *
     * @return \AppBundle\Entity\CapitarlSocial
     */
    public function getCapitarlSocial()
    {
        return $this->capitarlSocial;
    }

    /**
     * Set planoNegocio
     *
     * @param \AppBundle\Entity\PlanoNegocio $planoNegocio
     *
     * @return Socio
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
