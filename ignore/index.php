<?php
    // Adiciona classe de conexao com banco de dados
    require_once('../portal/db.php');
    // Adiciona classe modelo DAO aluno
    require_once("classes/DAO/AlunoDAO.class.php");
    // Abre conexao com banco de dados
    abre_banco();
    // Instancia classe aluno
    $alunoDAO = new Aluno();
    // Busca lista de alunos
    $resultAlunos = $alunoDAO->buscaAlunos();
    // Captura o total de alunos retornadas no result mysql
    $totalAlunos = $alunoDAO->getCountResult($resultAlunos); 
	
	// O arquivo index.html mostra na pratica o javascript funcionando
?>
	<!-- Classe AlunoDAO -->
<?php
	class AlunoDAO{	
		//atributos - colunas da tabela
		private $table = "aluno";
		private $nome;
		private $id;
		private $sexo;
		private $cpf;
		
		//construtor
		function __construct(){}
		
		function insert(){}
		function update(){}
		function remove(){}
		//gets e sets
		
		//Conselho: faz procedural. É bastante complicado realizar as consultas de forma OO
		
	}
	
?>
	<!-- exibindo de maneira orientada -->
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Idade</th>
                <th>CPF</th>
            </tr>
        </thead>
        <?php
            for ($i=0; $i<$totalAlunos; $i++)
            {
                // Converte o result mysql em objeto da classe aluno
                $objetoAluno = $alunoDAO->getObjetcClass($resultAlunos, "Aluno");
        ?>
            <tr id="<?php echo $objetoAluno->getId(); ?>">			<!-- Define que essa linha terá o mesmo ID do objeto em questao -->
                <td><?php echo $objetoAluno->getId(); ?></td>
                <td><?php echo $objetoAluno->getNome(); ?></td>
                <td><?php echo $objetoAluno->getIdade(); ?></td>
                <td><?php echo $objetoAluno->getCpf(); ?></td>
				<td id="<?php echo "coluna".$objetoAluno->getId(); ?>" onclick="remover(this)">Remover</td>	<!-- define que o botao especifico tera id coluna + numero do id -->
            </tr>
      <?php } ?>
    </table>
	
	<!-- Javascript -->
	<script>
		function remover(id){
			id.replace("coluna", "");	// Tira o coluna do id do botao clicado
			let elemento = document.getElementById(id);	// Busca o id pai (a tr, q contem toda a linha)
			elemento.parentNode.removeChild(elemento);  // Remove a linha inteira somente do DOM
			
		}
	</script>
