<?php include("Includes/Header.php");?>
<div class="Content">
		
	<div class="Resultado"></div>
	<div class="Formulario">
		<h1 class="Center">Cadastro</h1>
		<form name="FormCadastro" id="FormCadastro" method="POST" action="Controllers/ControllerCadastro.php">
			<div class="FormularioInput">
				Nome: <br>
				<input type="text" id="Nome" name="Nome">	
			</div>
			<div class="FormularioInput">
				Sexo: <br>
				<input type="text" id="Sexo" name="Sexo">	
			</div>
			<div class="FormularioInput">
				CPF: <br>
				<input type="text" id="CPF" name="CPF">	
			</div>
			<div class="FormularioInput FormularioInput100 Center">
				<br>
				<input type="submit" value="cadastrar">	
			</div>
		</form>

	</div>	
</div>

<?php include("Includes/Footer.php");?>

