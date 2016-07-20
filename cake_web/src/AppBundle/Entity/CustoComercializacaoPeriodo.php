<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CustoComercializacaoPeriodo
 *
 * @ORM\Table(name="custo_comercializacao_periodo")
 * @ORM\Entity
 */
class CustoComercializacaoPeriodo
{
    /**
     * @var string
     *
     * @ORM\Column(name="mes", type="string", length=45, nullable=true)
     */
    private $mes;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set mes
     *
     * @param string $mes
     *
     * @return CustoComercializacaoPeriodo
     */
    public function setMes($mes)
    {
        $this->mes = $mes;

        return $this;
    }

    /**
     * Get mes
     *
     * @return string
     */
    public function getMes()
    {
        return $this->mes;
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
