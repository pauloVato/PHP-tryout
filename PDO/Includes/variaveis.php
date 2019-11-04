<?php

if(isset($_POST['Nome'])){
	$nome = filter_input(INPUT_POST, 'Nome',FILTER_SANITIZE_SPECIAL_CHARS);
}elseif(isset($_GET['Nome'])){
	$nome = filter_input(INPUT_POST, 'Nome',FILTER_SANITIZE_SPECIAL_CHARS);
}else{
	$nome="";
}

if(isset($_POST['Sexo'])){
	$sexo = filter_input(INPUT_POST, 'Sexo',FILTER_SANITIZE_SPECIAL_CHARS);
}elseif(isset($_GET['Sexo'])){
	$sexo = filter_input(INPUT_POST, 'Sexo',FILTER_SANITIZE_SPECIAL_CHARS);
}else{
	$sexo="";
}

if(isset($_POST['CPF'])){
	$CPF = filter_input(INPUT_POST, 'CPF',FILTER_SANITIZE_SPECIAL_CHARS);
}elseif(isset($_GET['CPF'])){
	$CPF = filter_input(INPUT_POST, 'CPF',FILTER_SANITIZE_SPECIAL_CHARS);
}else{
	$CPF="";
}

if(isset($_POST['Id'])){
	$Id = filter_input(INPUT_POST, 'Id',FILTER_SANITIZE_SPECIAL_CHARS);
}elseif(isset($_GET['Id'])){
	$Id = filter_input(INPUT_POST, 'Id',FILTER_SANITIZE_SPECIAL_CHARS);
}else{
	$Id=0;
}



