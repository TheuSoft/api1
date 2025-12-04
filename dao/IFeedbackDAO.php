<?php
namespace dao;

interface IFeedbackDAO
{
    public function listar();
    public function inserir($usuario_id, $produto_id, $nota, $comentario);
    public function listarId($id);
    public function alterar($id, $usuario_id, $produto_id, $nota, $comentario);
    public function listarPorProduto($produto_id);
    public function listarPorUsuario($usuario_id);
    public function deletar($id);
}
