<?php 
namespace App\Model;

use App\Model\Model;

class ModeloModel extends Model {
	
	private $table = "nome_tabela";
	protected $fields = [
		"id",
		"coluna1",
		"coluna2",
		"coluna3",
		"coluna4",
		"coluna5"
	];

	function insertModeloModel($campos)
	{
		$this->insert($this->table, $campos);
	}

	function updateModeloModel($valores, $where)
	{	
		$this->update($this->table, $valores, $where);
	}

	function deleteModeloModel($coluna, $valor)
	{
		$this->delete($this->table, $coluna, $valor);
	}

	function selectModeloModel($campos, $where):array
	{
		return $this->select($this->table, $campos, $where);
	}
}