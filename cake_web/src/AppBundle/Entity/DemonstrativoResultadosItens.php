<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DemonstrativoResultadosItens
 *
 * @ORM\Table(name="demonstrativo_resultados_itens")
 * @ORM\Entity
 */
class DemonstrativoResultadosItens
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
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set descricao
     *
     * @param string $descricao
     *
     * @return DemonstrativoResultadosItens
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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}
