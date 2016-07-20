<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CustoDepreciacao
 *
 * @ORM\Table(name="custo_depreciacao")
 * @ORM\Entity
 */
class CustoDepreciacao
{
    /**
     * @var float
     *
     * @ORM\Column(name="resultado", type="float", precision=10, scale=0, nullable=true)
     */
    private $resultado;

    /**
     * @var string
     *
     * @ORM\Column(name="descricao", type="string", length=45, nullable=true)
     */
    private $descricao;

    /**
     * @var float
     *
     * @ORM\Column(name="valor", type="float", precision=10, scale=0, nullable=true)
     */
    private $valor;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set resultado
     *
     * @param float $resultado
     *
     * @return CustoDepreciacao
     */
    public function setResultado($resultado)
    {
        $this->resultado = $resultado;

        return $this;
    }

    /**
     * Get resultado
     *
     * @return float
     */
    public function getResultado()
    {
        return $this->resultado;
    }

    /**
     * Set descricao
     *
     * @param string $descricao
     *
     * @return CustoDepreciacao
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
     * Set valor
     *
     * @param float $valor
     *
     * @return CustoDepreciacao
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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}
