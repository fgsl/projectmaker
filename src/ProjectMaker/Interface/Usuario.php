<?php
namespace ProjectMaker\Interface;

class Usuario
{
    public int $id;
    public string $nome;
    public string $funcao;
    public string $email;
    public function cadastrarNoApp(): bool
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "projectmaker";

        if (strlen($this->funcao)>15){
            throw new \Exception('Tamanho de campo inválido!');
        }

        
        // Create connection
        $conn = new \mysqli($servername, $username, $password, $dbname);
        
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "INSERT INTO usuario (nome,funcao,email) VALUES ('{$this->nome}','{$this->funcao}','{$this->email}')";
        return ($conn->query($sql) === TRUE);
    }
}
