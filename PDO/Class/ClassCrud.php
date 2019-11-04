<?php
class ClassCrud extends ClassConnection{

	private $crud;
	private $contador;

	private function preparedStatements($query,$parameters){
		$this->countParameters($parameters);
		$this->crud = $this->conectaDB()->prepare($query);
		
		if($this->contador > 0){
			for($i=1;$i<=$this->contador;$i++){
				$this->crud->bindValue($i,$parameters[$i-1]);
			}
		}

		$this->crud->execute();
	}

	private function countParameters($parameters){
		$this->contador = count($parameters);
	}

}
?>