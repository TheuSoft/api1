<?php
namespace service;

use dao\mysql\UsuarioDAO;
use generic\JwtAuth;
use stdClass;

class UsuarioService extends UsuarioDAO
{
    public function autenticar($email, $senha)
    {
        $rows = parent::verificaLogin($email, $senha);

        if ($rows) {
            $jwt           = new JwtAuth();
            $objeto        = new stdClass();
            $objeto->nome  = $rows[0]["nome"];
            $objeto->email = $rows[0]["email"];

            return $jwt->criarChave(json_encode($objeto));
        }

        http_response_code(401);
    }

    public function listarUsuario()
    {
        return parent::listar();
    }

    public function cadastrarComSenha($nome, $email, $senha)
    {
        $senhaHash = password_hash($senha, PASSWORD_DEFAULT);

        $sql   = "INSERT INTO usuarios (nome, email, senha) VALUES (:nome, :email, :senha)";
        $param = [
            ":nome"  => $nome,
            ":email" => $email,
            ":senha" => $senhaHash,
        ];

        try {
            $this->banco->executar($sql, $param);
            return "Usuário cadastrado com sucesso";
        } catch (\Exception $e) {
            throw $e;
        }
    }
}
