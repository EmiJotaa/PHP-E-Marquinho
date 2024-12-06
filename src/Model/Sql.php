<?php 

namespace App\Model;

class Sql {

	const HOSTNAME = SQL_DB_SERVER;
	const USERNAME = SQL_DB_USER;
	const PASSWORD = SQL_DB_PASS;
	const DBNAME   = SQL_DB_DATABASE;

	private $conn;

	public function __construct()
	{
		$this->conn = new \PDO(
			"mysql:dbname=".Sql::DBNAME.";charset=utf8;host=".Sql::HOSTNAME, 
			Sql::USERNAME,
			Sql::PASSWORD
		);
	}

	private function setParams($statement, $parameters = array())
	{
		foreach ($parameters as $key => $value) {		
			$this->bindParam($statement, $key, $value);
		}
	}

	private function bindParam($statement, $key, $value)
	{
		if($key !== ':descricao'){
			$value = strip_tags(trim($value));
		}
		
		$statement->bindParam($key, $value);
	}

	public function query($rawQuery, $params = array())
	{
		$stmt = $this->conn->prepare($rawQuery);
		$this->setParams($stmt, $params);
		$stmt->execute();
	}

	public function querySelect($rawQuery, $params = array())
	{
		$stmt = $this->conn->prepare($rawQuery);
		$this->setParams($stmt, $params);
		$stmt->execute();
		return $stmt->fetchAll(\PDO::FETCH_ASSOC);
	}

	public function select($table, $campos, $where):array
	{	
		$sqlCampos = "";
		$campos = !is_array($campos) ? [$campos] : $campos;
		foreach ($campos as $key => $value) {
			if (end($campos) == $value) {
				$sqlCampos .= $value;
			}else{
				$sqlCampos .= $value.", ";
			}
		}
		if($where){
			$sqlWhere = "";
			$where = !is_array($where) ? [$where] : $where;
			foreach ($where as $key => $value) {
				if (end($where) == $value) {
					$sqlWhere .= $key." = :".$key;
				}else{
					$sqlWhere .= $key." = :".$key." AND ";
				}
				$parans[':'.$key] = $value;
			}
			$stmt = $this->conn->prepare("SELECT $sqlCampos FROM $table WHERE $sqlWhere");
			$this->setParams($stmt, $parans);
		}else{
			$stmt = $this->conn->prepare("SELECT $sqlCampos FROM $table");
		}
		$stmt->execute();
		return $stmt->fetchAll(\PDO::FETCH_ASSOC);
	}

	public function insert($table, $data)
	{	
		$sqlColunas = "";
		$data = !is_array($data) ? [$data] : $data;
		foreach ($data as $key => $value) {
			if (end($data) == $value) {
				$sqlColunas .= $key;
			}else{
				$sqlColunas .= $key.", ";
			}
		}
		$sqlCampos = "";
		$data = !is_array($data) ? [$data] : $data;
		foreach ($data as $key => $value) {
			if (end($data) == $value) {
				$sqlCampos .= ":".$key;
			}else{
				$sqlCampos .= ":".$key.", ";
			}
			$parans[':'.$key] = $value;
		}
		$this->query("INSERT INTO $table ($sqlColunas) VALUES ($sqlCampos)", $parans);

	}

	public function delete($table, $coluna, $valor)
	{
		$this->query("DELETE FROM $table WHERE $coluna = :valor", array(
			":valor" =>	$valor
		));
	}

	public function update($table, $valores, $where)
	{
		$sqlValues = "";
		$valores = !is_array($valores) ? [$valores] : $valores;
		foreach ($valores as $key => $value) {
			if (end($valores) == $value) {
				$sqlValues .= $key." = :".$key;
			}else{
				$sqlValues .= $key." = :".$key.", ";
			}
			$parans[':'.$key] = $value;
		}
		$sqlWhere = "";
		$where = !is_array($where) ? [$where] : $where;
		foreach ($where as $key => $value) {
			if (end($where) == $value) {
				$sqlWhere .= $key." = :".$key;
			}else{
				$sqlWhere .= $key." = :".$key." AND ";
			}
			$parans[':'.$key] = $value;
		}
		$this->query("UPDATE $table SET $sqlValues WHERE $sqlWhere", $parans);
	}
}?>