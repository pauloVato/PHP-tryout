<?php

abstract class ClassConnection{

	//Realizar conexão
	protected function conectaDB(){
		try{
			$conn = new PDO("mysql:host-localhost;dbname=crud","root","");
			return $conn;
		}catch(PDOException $erro){
			return $erro->getMessage();
		}
	}
}
