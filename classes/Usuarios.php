<?php


class Usuarios{

	private $nome;
	private $cpf;
	private $sexo;
	private $idade;
	private $endereço;
	private $email;
	private $telefone;
	private $cep;

	public function getNome(){

		return $this->nome; 

	}

	public function setNome($nome){

		$this->nome = $nome;
	}

	public function getCpf(){

		return $this->cpf; 

	}

	public function setCpf($cpf){

		$this->cpf = $cpf;
	}	

	public function getSexo(){

		return $this->sexo; 

	}

	public function setSexo($sexo){

		$this->sexo = $sexo;
	}

	public function getIdade(){

		return $this->idade; 

	}

	public function setIdade($idade){

		$this->idade = $idade;
	}

	public function getEndereco(){

		return $this->endereco; 

	}

	public function setEndereco($endereco){

		$this->endereco = $endereco;
	}

	public function getEmail(){

		return $this->email; 

	}

	public function setEmail($email){

		$this->email = $email;
	}

	public function getTelefone(){

		return $this->telefone; 

	}

	public function setTelefone($telefone){

		$this->telefone = $telefone;
	}

	public function getCep(){

		return $this->cep; 

	}

	public function setCep($cep){

		$this->cep = $cep;
	}

}


?>