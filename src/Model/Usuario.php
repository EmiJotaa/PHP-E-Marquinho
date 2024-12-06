<?php 
namespace App\Model;

use App\Model\Model;

class Usuario extends Model {
	
	private $table = "usuarios";
	protected $fields = [
		"id",
		"nome",
		"foto",
		"email",
		"senha",
		"data_cadastro",
		"data_atualizacao"
	];

	function insertUsuario($campos)
	{
		$this->insert($this->table, $campos);
	}

	function updateUsuario($valores, $where)
	{	
		$this->update($this->table, $valores, $where);
	}

	function deleteUsuario($coluna, $valor)
	{
		$this->delete($this->table, $coluna, $valor);
	}

	function selectUsuario($campos, $where):array
	{
		return $this->select($this->table, $campos, $where);
	}
	public static function verifica_login($pageLogin = false){
		if (!isset($_SESSION)) {
			session_start();
		}
		if ($pageLogin) {
			if (isset($_SESSION['usuario_logado']) && $_SESSION['usuario_logado'] !== null){
				header('Location:'.URL_BASE.'admin');
           		exit();
			}
		}else{
			if (!isset($_SESSION['usuario_logado']) || (isset($_SESSION['usuario_logado']) && $_SESSION['usuario_logado'] === null)){
				header('Location:'.URL_BASE.'login');
           		exit();
			}
		}

	}
}