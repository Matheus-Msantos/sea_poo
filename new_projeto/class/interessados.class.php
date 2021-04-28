<?php

require_once 'crud.class.php';

class Interessado extends Crud{
	
	protected $table = 'interessado';
	private $nome;
	private $email;
    private $telefone;
    private $estudouIngles;
    private $quantoTempo; 
    private $nota; 
    private $imagem;
    private $mensagem;
    private $registro;
    private $data;


	public function setDados($nome, $email, $telefone, $estudouIngles, $quantoTempo, $nota, $imagem, $mensagem, $registro, $data){
		$this->nome = $nome;
        $this->email = $email;
        $this->telefone = $telefone;
        $this->estudouIngles = $estudouIngles;
        $this->quantoTempo = $quantoTempo;
        $this->nota = $nota;
        $this->imagem = $imagem;
        $this->mensagem = $mensagem;
        $this->registro = $registro;
        $this->data = $data;
	}

	public function getDados(){
        $dados = [$this->nome, $this->email, $this->telefone, $this->estudouIngles, $this->quantoTempo, $this->nota, $this->imagem, 
                $this->mensagem, $this->registro, $this->data];
		return $dados;
	}

	public function insert(){

		$sql  = "INSERT INTO Interessado (nome, telefone, email, estudouIngles, quantoTempo, nota, imagem, mensagem, registro, data) 
                VALUES (:nome, :telefone, :email, :estudouIngles, :tempoDeCurso,  :nota, :imagem, :mensagem, :registro, :data)";

		$stmt = DataBase::prepare($sql);
		$stmt->bindParam(':nome', $this->nome);
		$stmt->bindParam(':email', $this->email);
        $stmt->bindParam(':telefone', $this->telefone);
        $stmt->bindParam(':estudouIngles', $this->estudouIngles);
        $stmt->bindParam(':tempoDeCurso', $this->quatoTempo);
        $stmt->bindParam(':nota', $this->nota);
        $stmt->bindParam(':imagem', $this->imagem);
        $stmt->bindParam(':mensagem', $this->mensagem);
        $stmt->bindParam(':registro', $this->registro);
        $stmt->bindParam(':data', $this->data);

		return $stmt->execute(); 

	}

	public function update($id){

		$sql  = "UPDATE Interessado SET nome = :nome, telefone = :telefone, email = :email,  estudouIngles = :estudouIngles, nota = :nota, registro = :registro,
                                        imagem = :MAX_FILE_SIZE, mensagem = :mensagem, data = :data WHERE id = :id";

		$stmt = DataBase::prepare($sql);
		$stmt->bindParam(':nome', $this->nome);
		$stmt->bindParam(':email', $this->email);
        $stmt->bindParam(':telefone', $this->telefone);
        $stmt->bindParam(':estudouIngles', $this->estudouIngles);
        $stmt->bindParam(':tempoDeCurso', $this->quatoTempo);
        $stmt->bindParam(':nota', $this->nota);
        $stmt->bindParam(':imagem', $this->imagem);
        $stmt->bindParam(':mensagem', $this->mensagem);
        $stmt->bindParam(':registro', $this->registro);
        $stmt->bindParam(':data', $this->data);
		$stmt->bindParam(':id', $id);

		return $stmt->execute();

	}

}