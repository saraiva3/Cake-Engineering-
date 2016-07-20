<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PlanoNegocio
 *
 * @ORM\Table(name="plano_negocio", indexes={@ORM\Index(name="fk_descricao_plano_negocio_usuario1_idx", columns={"usuario_id"})})
 * @ORM\Entity
 */
class PlanoNegocio
{
    /**
     * @var string
     *
     * @ORM\Column(name="nome_plano", type="string", length=50, nullable=false)
     */
    private $nomePlano;

    /**
     * @var integer
     *
     * @ORM\Column(name="periodo_planejamento", type="integer", nullable=false)
     */
    private $periodoPlanejamento;

    /**
     * @var string
     *
     * @ORM\Column(name="resumo_plano", type="string", length=1000, nullable=true)
     */
    private $resumoPlano;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Usuario
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Usuario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="usuario_id", referencedColumnName="id")
     * })
     */
    private $usuario;



    /**
     * Set nomePlano
     *
     * @param string $nomePlano
     *
     * @return PlanoNegocio
     */
    public function setNomePlano($nomePlano)
    {
        $this->nomePlano = $nomePlano;

        return $this;
    }

    /**
     * Get nomePlano
     *
     * @return string
     */
    public function getNomePlano()
    {
        return $this->nomePlano;
    }

    /**
     * Set periodoPlanejamento
     *
     * @param integer $periodoPlanejamento
     *
     * @return PlanoNegocio
     */
    public function setPeriodoPlanejamento($periodoPlanejamento)
    {
        $this->periodoPlanejamento = $periodoPlanejamento;

        return $this;
    }

    /**
     * Get periodoPlanejamento
     *
     * @return integer
     */
    public function getPeriodoPlanejamento()
    {
        return $this->periodoPlanejamento;
    }

    /**
     * Set resumoPlano
     *
     * @param string $resumoPlano
     *
     * @return PlanoNegocio
     */
    public function setResumoPlano($resumoPlano)
    {
        $this->resumoPlano = $resumoPlano;

        return $this;
    }

    /**
     * Get resumoPlano
     *
     * @return string
     */
    public function getResumoPlano()
    {
        return $this->resumoPlano;
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
     * Set usuario
     *
     * @param \AppBundle\Entity\Usuario $usuario
     *
     * @return PlanoNegocio
     */
    public function setUsuario(\AppBundle\Entity\Usuario $usuario = null)
    {
        $this->usuario = $usuario;

        return $this;
    }

    /**
     * Get usuario
     *
     * @return \AppBundle\Entity\Usuario
     */
    public function getUsuario()
    {
        return $this->usuario;
    }
}
