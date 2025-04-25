<?php

class Carta{
    private $nome;
    private $custoDeMana;
    private $tipo;
    private $raridade;
    private $imagem;

    public function __construct($nome, $custoDeMana, $tipo, $raridade, $imagem) {
        $this->nome = $nome;
        $this->custoDeMana = $custoDeMana;
        $this->tipo = $tipo;
        $this->raridade = $raridade;
        $this->imagem = $imagem;
    }

    /**
     * Get the value of nome
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     */
    public function setNome($nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of custoDeMana
     */
    public function getCustoDeMana()
    {
        return $this->custoDeMana;
    }

    /**
     * Set the value of custoDeMana
     */
    public function setCustoDeMana($custoDeMana): self
    {
        $this->custoDeMana = $custoDeMana;

        return $this;
    }

    /**
     * Get the value of tipo
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set the value of tipo
     */
    public function setTipo($tipo): self
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get the value of raridade
     */
    public function getRaridade()
    {
        return $this->raridade;
    }

    /**
     * Set the value of raridade
     */
    public function setRaridade($raridade): self
    {
        $this->raridade = $raridade;

        return $this;
    }

    /**
     * Get the value of imagem
     */
    public function getImagem()
    {
        return $this->imagem;
    }

    /**
     * Set the value of imagem
     */
    public function setImagem($imagem): self
    {
        $this->imagem = $imagem;

        return $this;
    }
}
