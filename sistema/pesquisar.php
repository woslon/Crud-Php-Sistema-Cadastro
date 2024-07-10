<?php

include("conexao.php");

$pesquisar = $_POST['pesquisar'];

$consulta = "SELECT * FROM cadastro WHERE nome like '%$pesquisar%' ";
$resultado = mysqli_query($conexao , $consulta);
 
if(mysqli_num_rows($resultado) > 0){
 
    while($rows = mysqli_fetch_array($resultado)){
        echo "nome: ".$rows['nome']."<br>";
        echo "cpf: ".$rows['cpf']."<br>";
        echo "endereço: ".$rows['endereço']."<br>";
        echo "cidade: ".$rows['cidade']."<br>";
        echo "estado: ".$rows['estado']."<br>";
        echo "cel: ".$rows['cel']."<br>";
        echo "email: ".$rows['email']."<hr>";
    } 
    
}
else{
    echo'NOME NÃO ENCONTRADO EM NOSSOS REGISTROS';
}
   
?>