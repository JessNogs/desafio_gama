<?php

include_once("conexao.php");

$nome = $_POST['nome'];
$profissao = $_POST['prof'];
$cargo= $_POST['cargo'];
$dia= $_POST['dia'];
$mes= $_POST['mes'];
$ano= $_POST['ano'];
$estCivil= $_POST['est_civil'];
$sexo= $_POST['sexo'];
$cep= $_POST['cep'];
$uf= $_POST['uf'];
$rua= $_POST['rua'];
$numero= $_POST['num'];
$bairro= $_POST['bairro'];
$cidade= $_POST['cidade'];
$tel1= $_POST['tel1'];
$tel2= $_POST['tel2'];
$celular= $_POST['celular'];
$contato= $_POST['contato'];
$email= $_POST['email'];
$identidade= $_POST['identidade'];
$cpf= $_POST['cpf'];
$veic= $_POST['veic'];
$habilitacao= $_POST['habilitacao'];

$sql = "insert into usuarios (nome, profissao, cargo, 
diaNasc, mesNasc, anoNasc, estCivil, sexo, cep, estado, rua, numero,
bairro, cidade, tel1, tel2, cel, contato, email, identidade, cpf, veiculo, habilitacao) values ('$nome', '$profissao', '$cargo', '$dia', 
'$mes', '$ano', '$estCivil', '$sexo', '$cep', '$uf', '$rua', '$numero', '$bairro', '$cidade', '$tel1', '$tel2', '$celular', '$contato', 
'$email', '$identidade', '$cpf', '$veic', '$habilitacao')";

$salvar = mysqli_query($conexao, $sql);

mysqli_close($conexao);


?>