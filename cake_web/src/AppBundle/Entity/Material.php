<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Material
 *
 * @ORM\Table(name="material", indexes={@ORM\Index(name="fk_material_custo_unitario1_idx", columns={"custo_unitario_id"})})
 * @ORM\Entity
 */
class Material
{
    /**
     * @var string
     *
     * @ORM\Column(name="material", type="string", length=300, nullable=true)
     */
    private $material;

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
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $id;

    /**
     * @var \AppBundle\Entity\CustoUnitario
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\CustoUnitario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="custo_unitario_id", referencedColumnName="id")
     * })
     */
    private $custoUnitario;



    /**
     * Set material
     *
     * @param string $material
     *
     * @return Material
     */
    public function setMaterial($material)
    {
        $this->material = $material;

        return $this;
    }

    /**
     * Get material
     *
     * @return string
     */
    public function getMaterial()
    {
        return $this->material;
    }

    /**
     * Set quantidade
     *
     * @param integer $quantidade
     *
     * @return Material
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
     * @return Material
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
     * Set id
     *
     * @param integer $id
     *
     * @return Material
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
     * Set custoUnitario
     *
     * @param \AppBundle\Entity\CustoUnitario $custoUnitario
     *
     * @return Material
     */
    public function setCustoUnitario(\AppBundle\Entity\CustoUnitario $custoUnitario)
    {
        $this->custoUnitario = $custoUnitario;

        return $this;
    }

    /**
     * Get custoUnitario
     *
     * @return \AppBundle\Entity\CustoUnitario
     */
    public function getCustoUnitario()
    {
        return $this->custoUnitario;
    }
}
