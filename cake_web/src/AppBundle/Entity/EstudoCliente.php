<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EstudoCliente
 *
 * @ORM\Table(name="estudo_cliente", indexes={@ORM\Index(name="fk_estudo_cliente_plano_negocio1_idx", columns={"plano_negocio_id"})})
 * @ORM\Entity
 */
class EstudoCliente
{
    /**
     * @var string
     *
     * @ORM\Column(name="publico_alvo", type="string", length=1000, nullable=true)
     */
    private $publicoAlvo;

    /**
     * @var string
     *
     * @ORM\Column(name="comportamento", type="string", length=1000, nullable=true)
     */
    private $comportamento;

    /**
     * @var string
     *
     * @ORM\Column(name="abrangencia", type="string", length=1000, nullable=true)
     */
    private $abrangencia;

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
     * Set publicoAlvo
     *
     * @param string $publicoAlvo
     *
     * @return EstudoCliente
     */
    public function setPublicoAlvo($publicoAlvo)
    {
        $this->publicoAlvo = $publicoAlvo;

        return $this;
    }

    /**
     * Get publicoAlvo
     *
     * @return string
     */
    public function getPublicoAlvo()
    {
        return $this->publicoAlvo;
    }

    /**
     * Set comportamento
     *
     * @param string $comportamento
     *
     * @return EstudoCliente
     */
    public function setComportamento($comportamento)
    {
        $this->comportamento = $comportamento;

        return $this;
    }

    /**
     * Get comportamento
     *
     * @return string
     */
    public function getComportamento()
    {
        return $this->comportamento;
    }

    /**
     * Set abrangencia
     *
     * @param string $abrangencia
     *
     * @return EstudoCliente
     */
    public function setAbrangencia($abrangencia)
    {
        $this->abrangencia = $abrangencia;

        return $this;
    }

    /**
     * Get abrangencia
     *
     * @return string
     */
    public function getAbrangencia()
    {
        return $this->abrangencia;
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
     * @return EstudoCliente
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
