<?php


class Funcionario
{
    private String $cpf;
    private String $nome;
    private String $endereco;

    /**
     * Funcionario constructor.
     * @param String $cpf
     * @param String $nome
     * @param String $endereco
     */
    public function __construct(String $cpf, String $nome, String $endereco)
    {
        $this->cpf = $cpf;
        $this->nome = $nome;
        $this->endereco = $endereco;
    }


    public function recuperaCpf(): String
    {
        return $this->cpf;
    }


    public function setCpf(String $cpf): void
    {
        $this->cpf = $cpf;
    }


    public function recuperaNome(): String
    {
        return $this->nome;
    }


    public function setNome(String $nome): void
    {
        $this->nome = $nome;
    }


    public function recuperaEndereco(): String
    {
        return $this->endereco;
    }


    public function setEndereco(String $endereco): void
    {
        $this->endereco = $endereco;
    }
}