<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Fornecedor
 *
 * @ORM\Table(name="fornecedor", indexes={@ORM\Index(name="fk_fornecedor_plano_negocio1_idx", columns={"plano_negocio_id"})})
 * @ORM\Entity
 */
class Fornecedor
{
    /**
     * @var string
     *
     * @ORM\Column(name="preco", type="string", length=45, nullable=true)
     */
    private $preco;

    /**
     * @var string
     *
     * @ORM\Column(name="localizacao", type="string", length=45, nullable=true)
     */
    private $localizacao;

    /**
     * @var string
     *
     * @ORM\Column(name="prazo_entrega", type="string", length=45, nullable=true)
     */
    private $prazoEntrega;

    /**
     * @var string
     *
     * @ORM\Column(name="descricao_item", type="string", length=500, nullable=true)
     */
    private $descricaoItem;

    /**
     * @var string
     *
     * @ORM\Column(name="condicoes_pagamento", type="string", length=45, nullable=true)
     */
    private $condicoesPagamento;

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
     * Set preco
     *
     * @param string $preco
     *
     * @return Fornecedor
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
     * Set localizacao
     *
     * @param string $localizacao
     *
     * @return Fornecedor
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
     * Set prazoEntrega
     *
     * @param string $prazoEntrega
     *
     * @return Fornecedor
     */
    public function setPrazoEntrega($prazoEntrega)
    {
        $this->prazoEntrega = $prazoEntrega;

        return $this;
    }

    /**
     * Get prazoEntrega
     *
     * @return string
     */
    public function getPrazoEntrega()
    {
        return $this->prazoEntrega;
    }

    /**
     * Set descricaoItem
     *
     * @param string $descricaoItem
     *
     * @return Fornecedor
     */
    public function setDescricaoItem($descricaoItem)
    {
        $this->descricaoItem = $descricaoItem;

        return $this;
    }

    /**
     * Get descricaoItem
     *
     * @return string
     */
    public function getDescricaoItem()
    {
        return $this->descricaoItem;
    }

    /**
     * Set condicoesPagamento
     *
     * @param string $condicoesPagamento
     *
     * @return Fornecedor
     */
    public function setCondicoesPagamento($condicoesPagamento)
    {
        $this->condicoesPagamento = $condicoesPagamento;

        return $this;
    }

    /**
     * Get condicoesPagamento
     *
     * @return string
     */
    public function getCondicoesPagamento()
    {
        return $this->condicoesPagamento;
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
     * @return Fornecedor
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
