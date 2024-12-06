<?php 
namespace App\Model;

use App\Model\Model;

class Produto extends Model {
	
	private $table = "produtos";
	protected $fields = [
		"id",
		"titulo",
		"link_produto",
		"imagem_principal",
		"status",
		"data_cadastro",
		"data_atualizacao"
	];

	function insertProduto($campos)
	{
		$this->insert($this->table, $campos);
	}

	function updateProduto($valores, $where)
	{	
		$this->update($this->table, $valores, $where);
	}

	function deleteProduto($coluna, $valor)
	{
		$this->delete($this->table, $coluna, $valor);
	}

	function selectProduto($campos, $where):array
	{
		return $this->select($this->table, $campos, $where);
	}
 
	function selectProdutosPage($limit, $offset)
	{
		$sql = "SELECT * FROM ".$this->table." ORDER BY id DESC LIMIT ".$offset.", ".$limit;
 
		return $this->querySelect($sql);
	}
 
	function selectProdutosPesquisa($pesquisa)
	{
		$sql = "SELECT * FROM ".$this->table." WHERE titulo LIKE '%".$pesquisa."%' ORDER BY id DESC";
 
		return $this->querySelect($sql);
	}
}