<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SocioEmpresa
 *
 * @ORM\Table(name="socio_empresa", indexes={@ORM\Index(name="fk_socio_empresa_plano_negocio1_idx", columns={"plano_negocio_id"})})
 * @ORM\Entity
 */
class SocioEmpresa
{
    /**
     * @var string
     *
     * @ORM\Column(name="nome", type="string", length=45, nullable=true)
     */
    private $nome;

    /**
     * @var string
     *
     * @ORM\Column(name="perfil", type="string", length=100, nullable=true)
     */
    private $perfil;

    /**
     * @var string
     *
     * @ORM\Column(name="atribuicoes", type="string", length=100, nullable=true)
     */
    private $atribuicoes;

    /**
     * @var integer
     *
     * @ORM\Column(name="telefone", type="integer", nullable=true)
     */
    private $telefone;

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
     * Set nome
     *
     * @param string $nome
     *
     * @return SocioEmpresa
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
     * Set perfil
     *
     * @param string $perfil
     *
     * @return SocioEmpresa
     */
    public function setPerfil($perfil)
    {
        $this->perfil = $perfil;

        return $this;
    }

    /**
     * Get perfil
     *
     * @return string
     */
    public function getPerfil()
    {
        return $this->perfil;
    }

    /**
     * Set atribuicoes
     *
     * @param string $atribuicoes
     *
     * @return SocioEmpresa
     */
    public function setAtribuicoes($atribuicoes)
    {
        $this->atribuicoes = $atribuicoes;

        return $this;
    }

    /**
     * Get atribuicoes
     *
     * @return string
     */
    public function getAtribuicoes()
    {
        return $this->atribuicoes;
    }

    /**
     * Set telefone
     *
     * @param integer $telefone
     *
     * @return SocioEmpresa
     */
    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;

        return $this;
    }

    /**
     * Get telefone
     *
     * @return integer
     */
    public function getTelefone()
    {
        return $this->telefone;
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
     * @return SocioEmpresa
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
