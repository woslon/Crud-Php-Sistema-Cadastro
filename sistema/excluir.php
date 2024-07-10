<?php
    include("conexao.php");

    $nome=$_POST['nome'];

    $sql="DELETE FROM cadastro WHERE nome ='$nome'";

        
        if(mysqli_query($conexao, $sql)){
            echo "Cadastro excluido";
        }
        else{
            echo "Não foi realizada a operação".mysqli_error($conexao);
        }

    mysqli_close($conexao);
