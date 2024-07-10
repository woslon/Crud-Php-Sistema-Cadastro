<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$db_name ="db_sistema";

$conexao = mysqli_connect($servidor,$usuario,$senha,$db_name);
if(!$conexao){
    die( mysqli_connect_error());
}
else{
    echo'<br>';
}

?>