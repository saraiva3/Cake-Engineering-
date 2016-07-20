<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Concorrente
 *
 * @ORM\Table(name="concorrente", indexes={@ORM\Index(name="fk_concorrente_plano_negocio1_idx", columns={"plano_negocio_id"})})
 * @ORM\Entity
 */
class Concorrente
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
     * @ORM\Column(name="localizacao", type="string", length=45, nullable=true)
     */
    private $localizacao;

    /**
     * @var string
     *
     * @ORM\Column(name="atendimento", type="string", length=45, nullable=true)
     */
    private $atendimento;

    /**
     * @var string
     *
     * @ORM\Column(name="preco", type="string", length=45, nullable=true)
     */
    private $preco;

    /**
     * @var string
     *
     * @ORM\Column(name="qualidade", type="string", length=450, nullable=true)
     */
    private $qualidade;

    /**
     * @var string
     *
     * @ORM\Column(name="servicos_clientes", type="string", length=450, nullable=true)
     */
    private $servicosClientes;

    /**
     * @var string
     *
     * @ORM\Column(name="condicoes_pagamentos", type="string", length=450, nullable=true)
     */
    private $condicoesPagamentos;

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
     * @return Concorrente
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
     * Set localizacao
     *
     * @param string $localizacao
     *
     * @return Concorrente
     */
    public function setLocalizacao($localizacao)
    {
        $this->localizacao = $localizacao;

        return $this;
    }

    /**
     * Get localizacao
     *
     * @return string
     */
    public function getLocalizacao()
    {
        return $this->localizacao;
    }

    /**
     * Set atendimento
     *
     * @param string $atendimento
     *
     * @return Concorrente
     */
    public function setAtendimento($atendimento)
    {
        $this->atendimento = $atendimento;

        return $this;
    }

    /**
     * Get atendimento
     *
     * @return string
     */
    public function getAtendimento()
    {
        return $this->atendimento;
    }

    /**
     * Set preco
     *
     * @param string $preco
     *
     * @return Concorrente
     */
    public function setPreco($preco)
    {
        $this->preco = $preco;

        return $this;
    }

    /**
     * Get preco
     *
     * @return string
     */
    public function getPreco()
    {
        return $this->preco;
    }

    /**
     * Set qualidade
     *
     * @param string $qualidade
     *
     * @return Concorrente
     */
    public function setQualidade($qualidade)
    {
        $this->qualidade = $qualidade;

        return $this;
    }

    /**
     * Get qualidade
     *
     * @return string
     */
    public function getQualidade()
    {
        return $this->qualidade;
    }

    /**
     * Set servicosClientes
     *
     * @param string $servicosClientes
     *
     * @return Concorrente
     */
    public function setServicosClientes($servicosClientes)
    {
        $this->servicosClientes = $servicosClientes;

        return $this;
    }

    /**
     * Get servicosClientes
     *
     * @return string
     */
    public function getServicosClientes()
    {
        return $this->servicosClientes;
    }

    /**
     * Set condicoesPagamentos
     *
     * @param string $condicoesPagamentos
     *
     * @return Concorrente
     */
    public function setCondicoesPagamentos($condicoesPagamentos)
    {
        $this->condicoesPagamentos = $condicoesPagamentos;

        return $this;
    }

    /**
     * Get condicoesPagamentos
     *
     * @return string
     */
    public function getCondicoesPagamentos()
    {
        return $this->condicoesPagamentos;
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
     * @return Concorrente
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
