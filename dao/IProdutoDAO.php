<?php
namespace dao;

interface IProdutoDAO
{
    public function listar();
    public function inserir($nome, $descricao, $preco);
    public function listarId($id);
    public function alterar($id, $nome, $descricao, $preco);
    public function deletar($id);
}
