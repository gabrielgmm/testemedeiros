<?php

namespace Medeiros\TesteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * paciente
 *
 * @ORM\Table(name="paciente")
 * @ORM\Entity(repositoryClass="Medeiros\TesteBundle\Repository\pacienteRepository")
 */
class paciente
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
     * @var int
     *
     * @ORM\Column(name="endereco_id", type="integer")
     */
    private $enderecoId;

    /**
     * @var string
     *
     * @ORM\Column(name="nome", type="string", length=255)
     */
    private $nome;

    /**
     * @var string
     *
     * @ORM\Column(name="nome_mae", type="string", length=255)
     */
    private $nomeMae;

    /**
     * @var string
     *
     * @ORM\Column(name="nome_pai", type="string", length=255)
     */
    private $nomePai;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

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
     * Set enderecoId
     *
     * @param integer $enderecoId
     *
     * @return paciente
     */
    public function setEnderecoId($enderecoId)
    {
        $this->enderecoId = $enderecoId;

        return $this;
    }

    /**
     * Get enderecoId
     *
     * @return int
     */
    public function getEnderecoId()
    {
        return $this->enderecoId;
    }

    /**
     * Set nome
     *
     * @param string $nome
     *
     * @return paciente
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get nome
     *
     * @return string
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set nomeMae
     *
     * @param string $nomeMae
     *
     * @return paciente
     */
    public function setNomeMae($nomeMae)
    {
        $this->nomeMae = $nomeMae;

        return $this;
    }

    /**
     * Get nomeMae
     *
     * @return string
     */
    public function getNomeMae()
    {
        return $this->nomeMae;
    }

    /**
     * Set nomePai
     *
     * @param string $nomePai
     *
     * @return paciente
     */
    public function setNomePai($nomePai)
    {
        $this->nomePai = $nomePai;

        return $this;
    }

    /**
     * Get nomePai
     *
     * @return string
     */
    public function getNomePai()
    {
        return $this->nomePai;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return paciente
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set status
     *
     * @param boolean $status
     *
     * @return paciente
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
     * @return paciente
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
