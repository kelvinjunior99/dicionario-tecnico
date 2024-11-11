<?php  

require_once "controller/conexao.php";

$dados_banco = $pdo->query("SELECT nome, descricao FROM palavras");

echo json_encode($dados_banco->fetchAll(PDO::FETCH_ASSOC));

?>