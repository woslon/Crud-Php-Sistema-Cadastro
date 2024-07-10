<?php
include("conexao.php");

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$endereço = $_POST['endereço'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$cel = $_POST['cel'];
$email = $_POST['email'];

$sql= " INSERT INTO cadastro (nome, cpf, endereço, cidade, estado, cel, email) 
VALUES ('$nome','$cpf','$endereço','$cidade','$estado','$cel','$email')";

if(mysqli_query($conexao, $sql)){

    echo "cliente cadastrado com sucesso...";
    
}
else{
    echo 'falha ao cadastrar o cliente !'. mysqli_connect_error();
}
mysqli_close($conexao);










?>