<?php

abstract class ClassConnection{

	//Realizar conexão
	protected function conectaDB(){
		try{
			$conn = new mysqli("localhost","root","","crud");
			return $conn;
		}catch(Exception $erro){
			$erro->getmessage();
			return $erro;
		}
	}
}
