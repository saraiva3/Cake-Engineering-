<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * InvestimentoTotal
 *
 * @ORM\Table(name="investimento_total")
 * @ORM\Entity
 */
class InvestimentoTotal
{
    /**
     * @var string
     *
     * @ORM\Column(name="resultado", type="string", length=45, nullable=true)
     */
    private $resultado;

    /**
     * @var integer
     *
     * @ORM\Column(name="percentual_recursosProprios", type="integer", nullable=true)
     */
    private $percentualRecursosproprios;

    /**
     * @var integer
     *
     * @ORM\Column(name="percentual_recursosTerceiros", type="integer", nullable=true)
     */
    private $percentualRecursosterceiros;

    /**
     * @var integer
     *
     * @ORM\Column(name="percentual_outros", type="integer", nullable=true)
     */
    private $percentualOutros;

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
     * @param string $resultado
     *
     * @return InvestimentoTotal
     */
    public function setResultado($resultado)
    {
        $this->resultado = $resultado;

        return $this;
    }

    /**
     * Get resultado
     *
     * @return string
     */
    public function getResultado()
    {
        return $this->resultado;
    }

    /**
     * Set percentualRecursosproprios
     *
     * @param integer $percentualRecursosproprios
     *
     * @return InvestimentoTotal
     */
    public function setPercentualRecursosproprios($percentualRecursosproprios)
    {
        $this->percentualRecursosproprios = $percentualRecursosproprios;

        return $this;
    }

    /**
     * Get percentualRecursosproprios
     *
     * @return integer
     */
    public function getPercentualRecursosproprios()
    {
        return $this->percentualRecursosproprios;
    }

    /**
     * Set percentualRecursosterceiros
     *
     * @param integer $percentualRecursosterceiros
     *
     * @return InvestimentoTotal
     */
    public function setPercentualRecursosterceiros($percentualRecursosterceiros)
    {
        $this->percentualRecursosterceiros = $percentualRecursosterceiros;

        return $this;
    }

    /**
     * Get percentualRecursosterceiros
     *
     * @return integer
     */
    public function getPercentualRecursosterceiros()
    {
        return $this->percentualRecursosterceiros;
    }

    /**
     * Set percentualOutros
     *
     * @param integer $percentualOutros
     *
     * @return InvestimentoTotal
     */
    public function setPercentualOutros($percentualOutros)
    {
        $this->percentualOutros = $percentualOutros;

        return $this;
    }

    /**
     * Get percentualOutros
     *
     * @return integer
     */
    public function getPercentualOutros()
    {
        return $this->percentualOutros;
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
