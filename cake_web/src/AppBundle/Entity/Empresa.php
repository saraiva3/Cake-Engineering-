<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Empresa
 *
 * @ORM\Table(name="empresa", indexes={@ORM\Index(name="fk_empresa_plano_negocio1_idx", columns={"plano_negocio_id"})})
 * @ORM\Entity
 */
class Empresa
{
    /**
     * @var string
     *
     * @ORM\Column(name="missao", type="string", length=300, nullable=true)
     */
    private $missao;

    /**
     * @var string
     *
     * @ORM\Column(name="setor_atividade", type="string", length=45, nullable=true)
     */
    private $setorAtividade;

    /**
     * @var string
     *
     * @ORM\Column(name="fonte_recursos", type="string", length=300, nullable=true)
     */
    private $fonteRecursos;

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
     * Set missao
     *
     * @param string $missao
     *
     * @return Empresa
     */
    public function setMissao($missao)
    {
        $this->missao = $missao;

        return $this;
    }

    /**
     * Get missao
     *
     * @return string
     */
    public function getMissao()
    {
        return $this->missao;
    }

    /**
     * Set setorAtividade
     *
     * @param string $setorAtividade
     *
     * @return Empresa
     */
    public function setSetorAtividade($setorAtividade)
    {
        $this->setorAtividade = $setorAtividade;

        return $this;
    }

    /**
     * Get setorAtividade
     *
     * @return string
     */
    public function getSetorAtividade()
    {
        return $this->setorAtividade;
    }

    /**
     * Set fonteRecursos
     *
     * @param string $fonteRecursos
     *
     * @return Empresa
     */
    public function setFonteRecursos($fonteRecursos)
    {
        $this->fonteRecursos = $fonteRecursos;

        return $this;
    }

    /**
     * Get fonteRecursos
     *
     * @return string
     */
    public function getFonteRecursos()
    {
        return $this->fonteRecursos;
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
     * @return Empresa
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
