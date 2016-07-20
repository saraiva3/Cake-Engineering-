<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pessoal
 *
 * @ORM\Table(name="pessoal", indexes={@ORM\Index(name="fk_pessoal_custo_mao_de_obra1_idx", columns={"custo_mao_de_obra_idcusto_mao_de_obra"})})
 * @ORM\Entity
 */
class Pessoal
{
    /**
     * @var string
     *
     * @ORM\Column(name="cargo", type="string", length=45, nullable=true)
     */
    private $cargo;

    /**
     * @var string
     *
     * @ORM\Column(name="qualificacao", type="string", length=300, nullable=true)
     */
    private $qualificacao;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $id;

    /**
     * @var \AppBundle\Entity\CustoMaoDeObra
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\CustoMaoDeObra")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="custo_mao_de_obra_idcusto_mao_de_obra", referencedColumnName="idcusto_mao_de_obra")
     * })
     */
    private $custoMaoDeObracustoMaoDeObra;



    /**
     * Set cargo
     *
     * @param string $cargo
     *
     * @return Pessoal
     */
    public function setCargo($cargo)
    {
        $this->cargo = $cargo;

        return $this;
    }

    /**
     * Get cargo
     *
     * @return string
     */
    public function getCargo()
    {
        return $this->cargo;
    }

    /**
     * Set qualificacao
     *
     * @param string $qualificacao
     *
     * @return Pessoal
     */
    public function setQualificacao($qualificacao)
    {
        $this->qualificacao = $qualificacao;

        return $this;
    }

    /**
     * Get qualificacao
     *
     * @return string
     */
    public function getQualificacao()
    {
        return $this->qualificacao;
    }

    /**
     * Set id
     *
     * @param integer $id
     *
     * @return Pessoal
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
     * Set custoMaoDeObracustoMaoDeObra
     *
     * @param \AppBundle\Entity\CustoMaoDeObra $custoMaoDeObracustoMaoDeObra
     *
     * @return Pessoal
     */
    public function setCustoMaoDeObracustoMaoDeObra(\AppBundle\Entity\CustoMaoDeObra $custoMaoDeObracustoMaoDeObra)
    {
        $this->custoMaoDeObracustoMaoDeObra = $custoMaoDeObracustoMaoDeObra;

        return $this;
    }

    /**
     * Get custoMaoDeObracustoMaoDeObra
     *
     * @return \AppBundle\Entity\CustoMaoDeObra
     */
    public function getCustoMaoDeObracustoMaoDeObra()
    {
        return $this->custoMaoDeObracustoMaoDeObra;
    }
}
