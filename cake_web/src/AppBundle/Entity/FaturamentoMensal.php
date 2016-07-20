<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FaturamentoMensal
 *
 * @ORM\Table(name="faturamento_mensal")
 * @ORM\Entity
 */
class FaturamentoMensal
{
    /**
     * @var string
     *
     * @ORM\Column(name="tipo", type="string", length=45, nullable=true)
     */
    private $tipo;

    /**
     * @var string
     *
     * @ORM\Column(name="descricao", type="string", length=45, nullable=true)
     */
    private $descricao;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantidade", type="integer", nullable=true)
     */
    private $quantidade;

    /**
     * @var float
     *
     * @ORM\Column(name="preco", type="float", precision=10, scale=0, nullable=true)
     */
    private $preco;

    /**
     * @var float
     *
     * @ORM\Column(name="crescimeto_constante", type="float", precision=10, scale=0, nullable=true)
     */
    private $crescimetoConstante;

    /**
     * @var string
     *
     * @ORM\Column(name="crescimento_mes", type="string", length=45, nullable=true)
     */
    private $crescimentoMes;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set tipo
     *
     * @param string $tipo
     *
     * @return FaturamentoMensal
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return string
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set descricao
     *
     * @param string $descricao
     *
     * @return FaturamentoMensal
     */
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;

        return $this;
    }

    /**
     * Get descricao
     *
     * @return string
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * Set quantidade
     *
     * @param integer $quantidade
     *
     * @return FaturamentoMensal
     */
    public function setQuantidade($quantidade)
    {
        $this->quantidade = $quantidade;

        return $this;
    }

    /**
     * Get quantidade
     *
     * @return integer
     */
    public function getQuantidade()
    {
        return $this->quantidade;
    }

    /**
     * Set preco
     *
     * @param float $preco
     *
     * @return FaturamentoMensal
     */
    public function setPreco($preco)
    {
        $this->preco = $preco;

        return $this;
    }

    /**
     * Get preco
     *
     * @return float
     */
    public function getPreco()
    {
        return $this->preco;
    }

    /**
     * Set crescimetoConstante
     *
     * @param float $crescimetoConstante
     *
     * @return FaturamentoMensal
     */
    public function setCrescimetoConstante($crescimetoConstante)
    {
        $this->crescimetoConstante = $crescimetoConstante;

        return $this;
    }

    /**
     * Get crescimetoConstante
     *
     * @return float
     */
    public function getCrescimetoConstante()
    {
        return $this->crescimetoConstante;
    }

    /**
     * Set crescimentoMes
     *
     * @param string $crescimentoMes
     *
     * @return FaturamentoMensal
     */
    public function setCrescimentoMes($crescimentoMes)
    {
        $this->crescimentoMes = $crescimentoMes;

        return $this;
    }

    /**
     * Get crescimentoMes
     *
     * @return string
     */
    public function getCrescimentoMes()
    {
        return $this->crescimentoMes;
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
}
