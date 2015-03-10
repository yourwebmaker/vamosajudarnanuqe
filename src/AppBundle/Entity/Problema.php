<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Problema
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="AppBundle\Entity\ProblemaRepository")
 */
class Problema
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="titulo", type="string", length=255)
     */
    private $titulo;

    /**
     * @var string
     *
     * @ORM\Column(name="descricao", type="string", length=255)
     */
    private $descricao;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dataCriacao", type="datetime")
     */
    private $dataCriacao;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dataAlteracao", type="datetime")
     */
    private $dataAlteracao;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dataResolucao", type="datetime")
     */
    private $dataResolucao;

    /**
     * @var \stdClass
     *
     * @ORM\Column(name="relatadoPor", type="object")
     */
    private $relatadoPor;

    /**
     * @var integer
     *
     * @ORM\Column(name="status", type="integer")
     */
    private $status;

    /**
     * @var \stdClass
     *
     * @ORM\Column(name="categoria", type="object")
     */
    private $categoria;

    /**
     * @var array
     *
     * @ORM\Column(name="fotos", type="array")
     */
    private $fotos;

    /**
     * @var array
     *
     * @ORM\Column(name="links", type="array")
     */
    private $links;


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
     * Set titulo
     *
     * @param string $titulo
     * @return Problema
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get titulo
     *
     * @return string 
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set descricao
     *
     * @param string $descricao
     * @return Problema
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
     * Set dataCriacao
     *
     * @param \DateTime $dataCriacao
     * @return Problema
     */
    public function setDataCriacao($dataCriacao)
    {
        $this->dataCriacao = $dataCriacao;

        return $this;
    }

    /**
     * Get dataCriacao
     *
     * @return \DateTime 
     */
    public function getDataCriacao()
    {
        return $this->dataCriacao;
    }

    /**
     * Set dataAlteracao
     *
     * @param \DateTime $dataAlteracao
     * @return Problema
     */
    public function setDataAlteracao($dataAlteracao)
    {
        $this->dataAlteracao = $dataAlteracao;

        return $this;
    }

    /**
     * Get dataAlteracao
     *
     * @return \DateTime 
     */
    public function getDataAlteracao()
    {
        return $this->dataAlteracao;
    }

    /**
     * Set dataResolucao
     *
     * @param \DateTime $dataResolucao
     * @return Problema
     */
    public function setDataResolucao($dataResolucao)
    {
        $this->dataResolucao = $dataResolucao;

        return $this;
    }

    /**
     * Get dataResolucao
     *
     * @return \DateTime 
     */
    public function getDataResolucao()
    {
        return $this->dataResolucao;
    }

    /**
     * Set relatadoPor
     *
     * @param \stdClass $relatadoPor
     * @return Problema
     */
    public function setRelatadoPor($relatadoPor)
    {
        $this->relatadoPor = $relatadoPor;

        return $this;
    }

    /**
     * Get relatadoPor
     *
     * @return \stdClass 
     */
    public function getRelatadoPor()
    {
        return $this->relatadoPor;
    }

    /**
     * Set status
     *
     * @param integer $status
     * @return Problema
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return integer 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set categoria
     *
     * @param \stdClass $categoria
     * @return Problema
     */
    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;

        return $this;
    }

    /**
     * Get categoria
     *
     * @return \stdClass 
     */
    public function getCategoria()
    {
        return $this->categoria;
    }

    /**
     * Set fotos
     *
     * @param array $fotos
     * @return Problema
     */
    public function setFotos($fotos)
    {
        $this->fotos = $fotos;

        return $this;
    }

    /**
     * Get fotos
     *
     * @return array 
     */
    public function getFotos()
    {
        return $this->fotos;
    }

    /**
     * Set links
     *
     * @param array $links
     * @return Problema
     */
    public function setLinks($links)
    {
        $this->links = $links;

        return $this;
    }

    /**
     * Get links
     *
     * @return array 
     */
    public function getLinks()
    {
        return $this->links;
    }
}
