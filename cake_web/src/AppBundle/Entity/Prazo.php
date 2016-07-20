<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Prazo
 *
 * @ORM\Table(name="prazo", indexes={@ORM\Index(name="fk_prazo_caixa_minimo1_idx", columns={"caixa_minimo_id"})})
 * @ORM\Entity
 */
class Prazo
{
    /**
     * @var string
     *
     * @ORM\Column(name="descricao", type="string", length=300, nullable=true)
     */
    private $descricao;

    /**
     * @var integer
     *
     * @ORM\Column(name="percentual", type="integer", nullable=true)
     */
    private $percentual;

    /**
     * @var integer
     *
     * @ORM\Column(name="dias", type="integer", nullable=true)
     */
    private $dias;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $id;

    /**
     * @var \AppBundle\Entity\CaixaMinimo
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\CaixaMinimo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="caixa_minimo_id", referencedColumnName="id")
     * })
     */
    private $caixaMinimo;



    /**
     * Set descricao
     *
     * @param string $descricao
     *
     * @return Prazo
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
     * Set percentual
     *
     * @param integer $percentual
     *
     * @return Prazo
     */
    public function setPercentual($percentual)
    {
        $this->percentual = $percentual;

        return $this;
    }

    /**
     * Get percentual
     *
     * @return integer
     */
    public function getPercentual()
    {
        return $this->percentual;
    }

    /**
     * Set dias
     *
     * @param integer $dias
     *
     * @return Prazo
     */
    public function setDias($dias)
    {
        $this->dias = $dias;

        return $this;
    }

    /**
     * Get dias
     *
     * @return integer
     */
    public function getDias()
    {
        return $this->dias;
    }

    /**
     * Set id
     *
     * @param integer $id
     *
     * @return Prazo
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
     * Set caixaMinimo
     *
     * @param \AppBundle\Entity\CaixaMinimo $caixaMinimo
     *
     * @return Prazo
     */
    public function setCaixaMinimo(\AppBundle\Entity\CaixaMinimo $caixaMinimo)
    {
        $this->caixaMinimo = $caixaMinimo;

        return $this;
    }

    /**
     * Get caixaMinimo
     *
     * @return \AppBundle\Entity\CaixaMinimo
     */
    public function getCaixaMinimo()
    {
        return $this->caixaMinimo;
    }
}
