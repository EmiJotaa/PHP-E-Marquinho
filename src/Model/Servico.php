<?php 
namespace App\Model;

use App\Model\Model;

class Servico extends Model {
	
	private $table = "servicos";
	protected $fields = [
		"id",
		"titulo",
		"url_amigavel",
		"descricao",
		"imagem_principal",
		"status",
		"data_cadastro",
		"data_atualizacao"
	];

	function insertServico($campos)
	{
		$this->insert($this->table, $campos);
	}

	function updateServico($valores, $where)
	{	
		$this->update($this->table, $valores, $where);
	}

	function deleteServico($coluna, $valor)
	{
		$this->delete($this->table, $coluna, $valor);
	}

	function selectServico($campos, $where):array
	{
		return $this->select($this->table, $campos, $where);
	}
	function getUltimoServico()
	{
		$sql = "SELECT * FROM ".$this->table." ORDER BY id DESC LIMIT 1";
		return $this->querySelect($sql)[0];
	}
 
	function insertFotoGaleria($campos)
	{
		$this->insert('galeria', $campos);
	}

	function selectGaleriaServico($campos, $where):array
	{
		return $this->select('galeria', $campos, $where);
	}
	function deleteImagemGaleria($coluna, $valor)
	{
		$this->delete('galeria', $coluna, $valor);
	}
	function selectServicosPage($limit, $offset)
	{
		$sql = "SELECT * FROM ".$this->table." ORDER BY id DESC LIMIT ".$offset.", ".$limit;
 
		return $this->querySelect($sql);
	}
 
	function selectServicosPesquisa($pesquisa)
	{
		$sql = "SELECT * FROM ".$this->table." WHERE titulo LIKE '%".$pesquisa."%' ORDER BY id DESC";
 
		return $this->querySelect($sql);
	}
}