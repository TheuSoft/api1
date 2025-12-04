<?php
namespace service;

use dao\mysql\ProdutoDAO;

class ProdutoService extends ProdutoDAO
{
    public function listarProduto()
    {

        return parent::listar();
    }

    public function inserir($nome, $descricao, $preco)
    {
        if (parent::inserir($nome, $descricao, $preco)) {
            return "Dados Salvo com Sucesso!";
        }
        return null;
    }
    public function alterar($id, $nome, $descricao, $preco)
    {
        return parent::alterar($id, $nome, $descricao, $preco);
    }
    public function listarId($id)
    {
        return parent::listarId($id);
    }
    public function deletar($id)
    {
        return parent::deletar($id);
    }
}
