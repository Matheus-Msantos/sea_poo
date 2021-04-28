<?php 

require_once 'dataBase.class.php';

abstract class Crud extends DataBase{

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