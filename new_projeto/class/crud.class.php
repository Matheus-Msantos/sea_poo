<?php 

require_once 'dataBase.class.php';

interface Crud {

	protected $table;

	abstract public function insert();
	abstract public function update($id);

	public function find($id);
	public function findAll();
	public function delete($id);

}

abstract class CrudAdmin extends DataBase implements Crud {
	
	protected $table;

	abstract public function insert();
	abstract public function update($id);

	public function find($id){
		$sql  = "SELECT * FROM $this->table WHERE id = :id";
		$stmt = DataBase::prepare($sql);
		$stmt->bindParam(':id', $id, PDO::PARAM_INT);
		$stmt->execute();
		return $stmt->fetch();
	}

	public function findAll(){
		$sql  = "SELECT * FROM $this->table";
		$stmt = DataBase::prepare($sql);
		$stmt->execute();
		return $stmt->fetchAll();
	}

	public function delete($id){
		$sql  = "DELETE FROM $this->table WHERE id = :id";
		$stmt = DataBase::prepare($sql);
		$stmt->bindParam(':id', $id, PDO::PARAM_INT);
		return $stmt->execute(); 
	}

}

abstract class CrudInteressados extends DataBase implements Crud {
	
	protected $table;

	abstract public function insert();
	abstract public function update($id);

	public function find($id){
		$sql  = "SELECT * FROM $this->table WHERE id = :id";
		$stmt = DataBase::prepare($sql);
		$stmt->bindParam(':id', $id, PDO::PARAM_INT);
		$stmt->execute();
		return $stmt->fetch();
	}

	public function findAll(){
		$sql  = "SELECT * FROM $this->table";
		$stmt = DataBase::prepare($sql);
		$stmt->execute();
		return $stmt->fetchAll();
	}

	public function delete($id){
		$sql  = "DELETE FROM $this->table WHERE id = :id";
		$stmt = DataBase::prepare($sql);
		$stmt->bindParam(':id', $id, PDO::PARAM_INT);
		return $stmt->execute(); 
	}

}