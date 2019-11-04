<?php
// Conecta ao banco de dados
mysql_connect('127.0.0.1', 'usuario', 'senha');
mysql_select_db('meusite');
// "Hoje" em formato SQL
$data = date('Y-m-d');
// Monta e executa uma consulta SQL
$sql = "SELECT `id`, `titulo`, `link` FROM `noticias` WHERE `ativa` = 1 AND `data` <= '". $data ."'";
$query = mysql_query($sql);
// Para cada resultado encontrado...
while ($noticia = mysql_fetch_assoc($query)) {
  // Exibe um link com a notícia
  echo '['. $noticia['titulo'] .']('. $noticia['link'] .')';
  echo '';
} // fim while
// Total de notícias
echo 'Total de notícias: ' . mysql_num_rows($query);
