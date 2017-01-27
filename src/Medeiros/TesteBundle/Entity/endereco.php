<?php

namespace Medeiros\TesteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * endereco
 *
 * @ORM\Table(name="endereco")
 * @ORM\Entity(repositoryClass="Medeiros\TesteBundle\Repository\enderecoRepository")
 */
class endereco
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="rua", type="string", length=255)
     */
    private $rua;

    /**
     * @var string
     *
     * @ORM\Column(name="nome_bairro", type="string", length=255)
     */
    private $nomeBairro;

    /**
     * @var bool
     *
     * @ORM\Column(name="status", type="boolean")
     */
    private $status;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data", type="date")
     */
    private $data;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set rua
     *
     * @param string $rua
     *
     * @return endereco
     */
    public function setRua($rua)
    {
        $this->rua = $rua;

        return $this;
    }

    /**
     * Get rua
     *
     * @return string
     */
    public function getRua()
    {
        return $this->rua;
    }

    /**
     * Set nomeBairro
     *
     * @param string $nomeBairro
     *
     * @return endereco
     */
    public function setNomeBairro($nomeBairro)
    {
        $this->nomeBairro = $nomeBairro;

        return $this;
    }

    /**
     * Get nomeBairro
     *
     * @return string
     */
    public function getNomeBairro()
    {
        return $this->nomeBairro;
    }

    /**
     * Set status
     *
     * @param boolean $status
     *
     * @return endereco
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return bool
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set data
     *
     * @param \DateTime $data
     *
     * @return endereco
     */
    public function setData($data)
    {
        $this->data = $data;

        return $this;
    }

    /**
     * Get data
     *
     * @return \DateTime
     */
    public function getData()
    {
        return $this->data;
    }
}
