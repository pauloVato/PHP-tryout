<?php
include("Class/ClassConnection.php");
class ClassCrud extends ClassConnection{
	private $crud;
	private $contador;
	private $result;

	private function preparedStatements($query,$types,$parameters){
		$this->countParameters($parameters);
		$conn= $this->conectaDB();
		$this->crud=$conn->prepare($query);

		if($this->contador > 0){
			$callParameters =  array();
			foreach($parameters as $key=>$parametro){
				$callParameters[$key] = &$parameters[$key];
			}
			array_unshift($callParameters, $types);
			call_user_func_array(array($this->crud,'bind_param'),$callParameters);
		}
		$this->crud->execute();
		$this->result->$this->crud->getresult();
	}

	private function countParameters($parameters){
		$this->contador = count($parameters);
	}

}
?>