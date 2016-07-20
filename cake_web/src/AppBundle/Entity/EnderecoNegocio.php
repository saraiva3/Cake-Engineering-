<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EnderecoNegocio
 *
 * @ORM\Table(name="endereco_negocio", indexes={@ORM\Index(name="fk_endereco_negocio_logradouro1_idx", columns={"logradouro_id"})})
 * @ORM\Entity
 */
class EnderecoNegocio
{
    /**
     * @var integer
     *
     * @ORM\Column(name="telefone", type="integer", nullable=true)
     */
    private $telefone;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Logradouro
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Logradouro")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="logradouro_id", referencedColumnName="id")
     * })
     */
    private $logradouro;



    /**
     * Set telefone
     *
     * @param integer $telefone
     *
     * @return EnderecoNegocio
     */
    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;

        return $this;
    }

    /**
     * Get telefone
     *
     * @return integer
     */
    public function getTelefone()
    {
        return $this->telefone;
    }

    /**
     * Set id
     *
     * @param integer $id
     *
     * @return EnderecoNegocio
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
     * Set logradouro
     *
     * @param \AppBundle\Entity\Logradouro $logradouro
     *
     * @return EnderecoNegocio
     */
    public function setLogradouro(\AppBundle\Entity\Logradouro $logradouro)
    {
        $this->logradouro = $logradouro;

        return $this;
    }

    /**
     * Get logradouro
     *
     * @return \AppBundle\Entity\Logradouro
     */
    public function getLogradouro()
    {
        return $this->logradouro;
    }
}
