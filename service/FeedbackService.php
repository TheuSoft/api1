<?php
namespace service;

use dao\mysql\FeedbackDAO;

class FeedbackService extends FeedbackDAO
{
    public function listarFeedback()
    {
        return parent::listar();
    }

    public function inserir($usuario_id, $produto_id, $nota, $comentario)
    {
        if (parent::inserir($usuario_id, $produto_id, $nota, $comentario)) {
            return "Dados Salvo com Sucesso!";
        }
        return null;
    }

    public function alterar($id, $usuario_id, $produto_id, $nota, $comentario)
    {
        return parent::alterar($id, $usuario_id, $produto_id, $nota, $comentario);
    }

    public function listarId($id)
    {
        return parent::listarId($id);
    }

    public function listarPorProduto($produto_id)
    {
        return parent::listarPorProduto($produto_id);
    }

    public function listarPorUsuario($usuario_id)
    {
        return parent::listarPorUsuario($usuario_id);
    }

    public function deletar($id)
    {
        return parent::deletar($id);
    }
}
